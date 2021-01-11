<?php

use Illuminate\Database\Seeder;
use App\Models\SellerBillOrder;
use App\Repositories\Common\TimeRepository;
use App\Services\Commission\CommissionService;
use App\Models\OrderSettlementLog;

class CommissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = Storage::disk('local')->exists('seeder/commission_order.lock.php');
        if (!$file) {

            $this->getOrderList();

            $data = '大商创x https://www.dscmall.cn/';
            Storage::disk('local')->put('seeder/commission_order.lock.php', $data);
        }
    }

    public function getOrderList()
    {
        $list = SellerBillOrder::select('order_id', 'seller_id', 'order_sn');

        $list = $list->with([
            'getOrder'
        ]);

        $list = $list->get();

        $list = $list ? $list->toArray() : [];

        if ($list) {
            foreach ($list as $key => $row) {

                $filter = [
                    'order_sn' => $row['order_sn']
                ];

                /* 微分销 */
                if (file_exists(MOBILE_DRP)) {
                    $no_settlement = app(CommissionService::class)->merchantsIsSettlement($row['seller_id'], '', $filter);
                    $actual_amount = $no_settlement['all_price'] ?? 0;
                } else {
                    $no_settlement = app(CommissionService::class)->merchantsIsSettlement($row['seller_id'], '', $filter);
                    $actual_amount = $no_settlement ? $no_settlement : 0;
                }

                $actual_amount = number_format($actual_amount, 2, '.', '');

                $log = [
                    'order_id' => $row['order_id'],
                    'ru_id' => $row['seller_id'],
                    'actual_amount' => $actual_amount,
                    'is_settlement' => $row['get_order']['is_settlement'] ?? 0,
                    'add_time' => app(TimeRepository::class)->getGmTime()
                ];

                $count = OrderSettlementLog::where('order_id', $row['order_id'])->count();

                if ($count < 1) {
                    OrderSettlementLog::insert($log);

                    var_dump("账单订单结算记录数据执行成功。");
                } else {
                    var_dump("账单订单结算记录数据执行失败，已存在。");
                }
            }
        }
    }
}