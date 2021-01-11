<?php

use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->update_desc();
    }

    /**
     * 更新支付宝在线申请地址
     */
    private function update_desc()
    {
        $result = DB::table('payment')->where('pay_code', 'alipay')->first();
        if (!empty($result)) {
            // 默认数据
            $rows = [
                    'pay_desc' => '支付宝网站(www.alipay.com) 是国内先进的网上支付平台。<br/>支付宝收款接口：在线即可开通，<font color="red"><b>零预付，免年费</b></font>，单笔阶梯费率，无流量限制。<br/><a href="https://openhome.alipay.com/" target="_blank"><font color="red">立即在线申请</font></a>'
            ];
            DB::table('payment')->where('pay_code', 'alipay')->update($rows);
        }
    }

}
