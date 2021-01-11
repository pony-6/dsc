<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $file = Storage::disk('local')->exists('seeder/install.lock.php');
        if (!$file) {

            $this->call([
                InstallSeeder::class,               //安装配置数据
                InstallDemoSeeder::class           	//安装测试数据
            ]);

            /* 标准版 */
            $this->call([
                MobileModuleSeeder::class
            ]);

            $data = '大商创x https://www.dscmall.cn/';
            Storage::disk('local')->put('seeder/install.lock.php', $data);
        }
		
		$this->call([
			RegionSeeder::class,                //地区数据
			RegionBackupSeeder::class,          //地区备份数据
			RegionWarehouseSeeder::class        //仓库地区数据
		]);

        /* 微商城 */
        $wechat = Storage::disk('local')->exists('seeder/wechat.lock.php');
        $wechat_file = app_path('Modules/Admin/Controllers/WechatController.php');

        if (!$wechat && is_file($wechat_file)) {

            $this->call([
                WechatModuleSeeder::class,
                KefuModuleSeeder::class
            ]);

            $data = '大商创x https://www.dscmall.cn/';
            Storage::disk('local')->put('seeder/wechat.lock.php', $data);
        }


        /* 微分销 */
        $drp = Storage::disk('local')->exists('seeder/drp.lock.php');
        $drp_file = app_path('Modules/Admin/Controllers/DrpController.php');
        if (!$drp && is_file($drp_file)) {
            $this->call([
                DRPModuleSeeder::class,
                TeamModuleSeeder::class,
                BargainModuleSeeder::class
            ]);

            $data = '大商创x https://www.dscmall.cn/';
            Storage::disk('local')->put('seeder/drp.lock.php', $data);
        }

        /* 小程序 */
        $wxapp = Storage::disk('local')->exists('seeder/wxapp.lock.php');
        $wxapp_file = app_path('Modules/Admin/Controllers/WxappController.php');
        if (!$wxapp && is_file($wxapp_file)) {
            $this->call([
                WeappModuleSeeder::class
            ]);

            $data = '大商创x https://www.dscmall.cn/';
            Storage::disk('local')->put('seeder/wxapp.lock.php', $data);
        }

        /* APP */
        $app = Storage::disk('local')->exists('seeder/app.lock.php');
        $app_file = app_path('Modules/Admin/Controllers/AppController.php');
        if (!$app && is_file($app_file)) {
            $this->call([
                AppModuleSeeder::class
            ]);

            $data = '大商创x https://www.dscmall.cn/';
            Storage::disk('local')->put('seeder/app.lock.php', $data);
        }

        $this->call([
            PaymentTableSeeder::class,          //支付方式
            AdminActionSeeder::class,           //后台权限
            ShopConfigSeeder::class,            //商城配置信息
            SmsTemplateSeeder::class,           //优化短信配置
            DeleteFileSeeder::class,            //删除多余文件
            CommissionSeeder::class
        ]);

        /* 更新订单ID */
        $orderruid = Storage::disk('local')->exists('seeder/orderruid.lock.php');
        if (!$orderruid) {
            $this->call([
                OrderRuIdSeeder::class
            ]);

            $data = '大商创x https://www.dscmall.cn/';
            Storage::disk('local')->put('seeder/orderruid.lock.php', $data);
        }
		
		/* 更新老版本手机端首页可视化 */
        $touchPageView = Storage::disk('local')->exists('seeder/touch_view.lock.php');

        if (!$touchPageView) {
            $this->call([
                TouchPageViewSeeder::class
            ]);

            $data = '大商创x https://www.dscmall.cn/';
            Storage::disk('local')->put('seeder/touch_view.lock.php', $data);
        }
    }
}
