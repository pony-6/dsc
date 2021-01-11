<?php

use App\Models\ShopConfig;
use Illuminate\Database\Seeder;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\DB;

class ShopConfigSeeder extends Seeder
{
    /**
     * @var Filesystem
     */
    private $filesystem;

    /**
     * DeleteFileSeeder constructor.
     * @param Filesystem $filesystem
     */
    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }


    /**
     * Run the database seeds.
     *
     * @throws Exception
     */
    public function run()
    {
        /* PC登录右侧 */
        $this->PcLoginRight();

        $this->update();
        $this->cloudIsOpen();
        $this->crossBorder();

        // 是否启用支付密码
        $this->usePaypwd();
        // 新增商店设置所在区域
        $this->add_shop_district();

        /* 跨境订单提交文章ID */
        $this->CrossBorderArticleId();

        /* 确认收货发短信开关 */
        $this->AffirmReceivedSmsSwitch();

        // v1.4.4 隐藏原短信配置
        $this->hiddenSms();

        // 更新商家入驻流程公司名称字段
        $this->updateMerchantField();


        // 是否启用支付手续费
        $this->usePayfee();

        // 增加支付模块分组
        $this->add_pay_group();

        /* 更新版本号 */
        $this->upgradePatch();
    }

    private function updateMerchantField()
    {
        $textFields = DB::table('merchants_steps_fields_centent')->where('id', 19)->value('textFields');

        DB::table('merchants_steps_fields_centent')->where('id', 19)->update(
            ['textFields' => str_replace('companyName', 'company', $textFields)]
        );
    }

    /**
     * 更新
     *
     * @throws Exception
     */
    private function update()
    {
        /* 去除复杂重写 */
        $count = ShopConfig::where('code', 'rewrite')->count();
        if ($count > 0) {
            // 默认数据
            $rows = [
                'store_range' => '0,1'
            ];
            ShopConfig::where('code', 'rewrite')->update($rows);
        }

        /* 电子面单开关 */
        $config_id = ShopConfig::where('code', 'extend_basic')->value('id');
        $config_id = $config_id ? $config_id : 0;

        $other = [
            'parent_id' => $config_id,
            'type' => 'select',
            'store_range' => '0,1',
            'value' => 0,
            'sort_order' => 1
        ];
        $count = ShopConfig::where('code', 'tp_api')->count();
        if ($count > 0) {
            ShopConfig::where('code', 'tp_api')->update($other);
        } else {
            $other['code'] = 'tp_api';
            ShopConfig::insert($other);
        }

        /* 去除发票类型税率 */
        $count = ShopConfig::where('code', 'invoice_type')->count();
        if ($count > 0) {
            /* 删除 */
            ShopConfig::where('code', 'invoice_type')->delete();
        }

        /* 隐藏是否启用首页可视化配置 */
        $count = ShopConfig::where('code', 'openvisual')->where('type', 'select')->count();
        if ($count > 0) {
            // 默认数据
            $rows = [
                'type' => 'hidden'
            ];
            ShopConfig::where('code', 'openvisual')->update($rows);
        }

        /* 去除头部右侧翻转效果图片配置 */
        $count = ShopConfig::where('code', 'site_commitment')->count();
        if ($count > 0) {
            /* 删除 */
            ShopConfig::where('code', 'site_commitment')->delete();
        }

        /* 等级积分清零开关 */
        $other = [
            'parent_id' => $config_id,
            'type' => 'hidden',
            'store_range' => '0,1',
            'value' => 0,
            'sort_order' => 1
        ];
        $count = ShopConfig::where('code', 'open_user_rank_set')->count();
        if (!$count) {
            $other['code'] = 'open_user_rank_set';
            ShopConfig::insert($other);
        }

        /* 等级积分清零时间 */
        $other = [
            'parent_id' => $config_id,
            'type' => 'hidden',
            'store_range' => '',
            'value' => 12,
            'sort_order' => 1
        ];
        $count = ShopConfig::where('code', 'clear_rank_point')->count();
        if (!$count) {
            $other['code'] = 'clear_rank_point';
            ShopConfig::insert($other);
        }

        $count = ShopConfig::where('code', 'cloud_storage')->count();
        if ($count <= 0) {
            $parent_id = ShopConfig::where('code', 'extend_basic')->value('id');
            $parent_id = $parent_id ? $parent_id : 0;

            ShopConfig::insert([
                'parent_id' => $parent_id,
                'code' => 'cloud_storage',
                'type' => 'select',
                'store_range' => '0,1,2',
                'sort_order' => 1,
                'value' => 0,
                'shop_group' => 'cloud'
            ]);
        }

        ShopConfig::where('code', 'open_oss')->update([
            'shop_group' => 'cloud'
        ]);

        ShopConfig::where('code', 'addon')->update([
            'shop_group' => 'ecjia'
        ]);

        /* 过滤词开关 */
        $count = ShopConfig::where('code', 'filter_words_control')->count();
        if ($count <= 0) {
            $parent_id = ShopConfig::where('code', 'extend_basic')->value('id');
            $parent_id = $parent_id ? $parent_id : 0;

            // 默认数据
            ShopConfig::insert([
                'parent_id' => $parent_id,
                'code' => 'filter_words_control',
                'value' => 1,
                'type' => 'hidden',
                'shop_group' => 'filter_words'
            ]);
        }

        // 隐藏网站域名
        $count = ShopConfig::where('code', 'site_domain')->count();
        if ($count > 0) {
            ShopConfig::where('code', 'site_domain')
                ->update([
                    'type' => 'hidden',
                    'value' => ''
                ]);
        }


        /* 修正语言包 */
        ShopConfig::where('code', 'lang')
            ->update([
                'value' => 'zh-CN'
            ]);

        $count = ShopConfig::where('code', 'show_mobile')->count();

        if ($count < 1) {
            $parent_id = ShopConfig::where('code', 'extend_basic')->value('id');

            /* 是否显示手机号码 */
            ShopConfig::where('code', 'show_mobile')
                ->insert([
                    'parent_id' => $parent_id,
                    'code' => 'show_mobile',
                    'value' => 1,
                    'type' => 'hidden'
                ]);
        }

        $count = ShopConfig::where('code', 'area_pricetype')->count();

        /* 商品设置地区模式时 */
        if ($count < 1) {
            $parent_id = ShopConfig::where('code', 'goods_base')->value('id');

            ShopConfig::insert([
                'parent_id' => $parent_id,
                'code' => 'area_pricetype',
                'type' => 'select',
                'store_range' => '0,1',
                'shop_group' => 'goods'
            ]);
        } else {
            ShopConfig::where('code', 'area_pricetype')
                ->update([
                    'type' => 'select'
                ]);
        }

        $count = ShopConfig::where('code', 'appkey')->count();
        if ($count == 0) {
            $parent_id = ShopConfig::where('code', 'extend_basic')->value('id');

            // 默认数据
            $rows = [
                'parent_id' => $parent_id,
                'code' => 'appkey',
                'type' => 'hidden'
            ];
            ShopConfig::where('code', 'rewrite')->update($rows);
        }

        /* 去除一步购物 */
        $count = ShopConfig::where('code', 'one_step_buy')->count();
        if ($count > 0) {
            /* 删除 */
            ShopConfig::where('code', 'one_step_buy')->delete();
        }

        /* 253创蓝短信 */
        /* 253创蓝短信 用户名*/
        $count = ShopConfig::where('code', 'chuanglan_account')->count();
        if ($count == 0) {
            $parent_id = ShopConfig::where('code', 'sms')->value('id');
            // 默认数据
            $rows = [
                'parent_id' => $parent_id,
                'code' => 'chuanglan_account',
                'type' => 'text',
            ];
            ShopConfig::insert($rows);
        }
        /* 253创蓝短信 密码*/
        $count = ShopConfig::where('code', 'chuanglan_password')->count();
        if ($count == 0) {
            $parent_id = ShopConfig::where('code', 'sms')->value('id');
            // 默认数据
            $rows = [
                'parent_id' => $parent_id,
                'code' => 'chuanglan_password',
                'type' => 'text',
            ];
            ShopConfig::insert($rows);
        }
        /* 253创蓝短信 请求地址*/
        $count = ShopConfig::where('code', 'chuanglan_api_url')->count();
        if ($count == 0) {
            $parent_id = ShopConfig::where('code', 'sms')->value('id');
            // 默认数据
            $rows = [
                'parent_id' => $parent_id,
                'code' => 'chuanglan_api_url',
                'type' => 'text',
            ];
            ShopConfig::insert($rows);
        }
        /* 253创蓝短信 签名*/
        $count = ShopConfig::where('code', 'chuanglan_signa')->count();
        if ($count == 0) {
            $parent_id = ShopConfig::where('code', 'sms')->value('id');
            // 默认数据
            $rows = [
                'parent_id' => $parent_id,
                'code' => 'chuanglan_signa',
                'type' => 'text',
            ];
            ShopConfig::insert($rows);
        }
        /* 253创蓝短信  end*/

        $count = ShopConfig::where('code', 'oss_network')->count();

        if ($count <= 0) {
            $parent_id = ShopConfig::where('code', 'extend_basic')->value('id');

            ShopConfig::insert([
                'parent_id' => $parent_id,
                'code' => 'oss_network',
                'type' => 'hidden',
                'store_range' => '0,1',
                'sort_order' => 1,
                'value' => 1
            ]);
        }

        /* 隐私 start*/
        $count = ShopConfig::where('code', 'privacy')->count();

        if ($count <= 0) {
            $parent_id = ShopConfig::where('code', 'shop_info')->value('id');

            ShopConfig::insert([
                'parent_id' => $parent_id,
                'code' => 'privacy',
                'type' => 'text',
                'store_range' => '',
                'sort_order' => 1,
                'value' => ''
            ]);
        }
        /* 隐私 end*/

        ShopConfig::where('code', 'kuaidi100_key')
            ->update([
                'type' => 'hidden'
            ]);

        /**
         * 新增分类商品属性筛选类型选择
         *
         * value：1-属性只要符合存在，2-属性要全部同时符合存在
         */
        $count = ShopConfig::where('code', 'cat_attr_search')->count();

        if (empty($count)) {
            $parent_id = ShopConfig::where('code', 'extend_basic')->value('id');
            $parent_id = !empty($parent_id) ? $parent_id : 0;

            ShopConfig::insert([
                'code' => 'cat_attr_search',
                'parent_id' => $parent_id,
                'type' => 'hidden',
                'value' => '1'
            ]);
        }

        /**
         * 新增商品评论开关
         *
         * value：1-开启，0-关闭
         */
        $count = ShopConfig::where('code', 'shop_can_comment')->count();

        if (empty($count)) {
            $parent_id = ShopConfig::where('code', 'goods_name_length')->value('parent_id');
            $parent_id = !empty($parent_id) ? $parent_id : 0;

            ShopConfig::insert([
                'code' => 'shop_can_comment',
                'parent_id' => $parent_id,
                'type' => 'select',
                'store_range' => '1,0',
                'value' => '1',
                'shop_group' => 'goods'
            ]);
        }

        /* 开启IP库存类型选择（默认IP库） */
        $type = ShopConfig::where('code', 'ip_type')->value('type');
        if ($type && $type == 'hidden') {
            ShopConfig::where('code', 'ip_type')->update([
                'type' => 'select',
                'store_range' => '0,1',
                'value' => 0
            ]);
        }

        $this->changeDscVersion();

        $this->clearCache();
    }

    /**
     * 新增贡云启用开关
     */
    private function cloudIsOpen()
    {
        $result = ShopConfig::where('code', 'cloud_is_open')->count();
        if (empty($result)) {
            $parent_id = ShopConfig::where('code', 'extend_basic')->value('id');
            $parent_id = !empty($parent_id) ? $parent_id : 0;

            // 默认数据
            $rows = [
                [
                    'parent_id' => $parent_id,
                    'code' => 'cloud_is_open',
                    'value' => 0,
                    'type' => 'hidden',
                    'shop_group' => 'cloud_api'
                ]
            ];
            ShopConfig::insert($rows);
        }
    }

    /**
     * 新增支付密码启用开关 (购物流程配置)
     */
    private function usePaypwd()
    {
        $result = ShopConfig::where('code', 'use_paypwd')->count();
        if (empty($result)) {
            $parent_id = ShopConfig::where('code', 'shopping_flow')->value('id');
            $parent_id = !empty($parent_id) ? $parent_id : 0;

            // 默认数据
            $rows = [
                [
                    'parent_id' => $parent_id,
                    'code' => 'use_paypwd',
                    'value' => 1,
                    'type' => 'select',
                    'store_range' => '1,0',
                    'sort_order' => 1,
                    'shop_group' => ''
                ]
            ];
            ShopConfig::insert($rows);
        }
    }

    /**
     * 新增商店设置所在区域
     */
    private function add_shop_district()
    {
        $result = ShopConfig::where('code', 'shop_district')->count();
        if (empty($result)) {
            $parent_id = ShopConfig::where('code', 'shop_info')->value('id');
            $parent_id = !empty($parent_id) ? $parent_id : 1;

            // 默认数据
            $rows = [
                [
                    'parent_id' => $parent_id,
                    'code' => 'shop_district',
                    'value' => '',
                    'type' => 'manual',
                    'store_range' => '',
                    'sort_order' => 0,
                    'shop_group' => ''
                ]
            ];
            ShopConfig::insert($rows);

            // 修改选择地区配置排序
            $where = [
                'shop_name',
                'shop_title',
                'shop_desc',
                'shop_keywords',
                'shop_country',
                'shop_province',
                'shop_city'
            ];
            ShopConfig::whereIn('code', $where)->update(['sort_order' => 0]);
        }
    }

    /**
     * 清除缓存
     *
     * @throws Exception
     */
    protected function clearCache()
    {
        cache()->forget('shop_config');
    }

    /**
     * 跨境配置
     */
    protected function crossBorder()
    {
        $result = ShopConfig::where('code', 'limited_amount')->count();
        if (empty($result)) {
            $parent_id = ShopConfig::where('code', 'shop_info')->value('id');
            $parent_id = !empty($parent_id) ? $parent_id : 0;
            // 默认数据
            $rows = [
                [
                    'parent_id' => $parent_id,
                    'code' => 'limited_amount',
                    'value' => '1000',
                    'type' => 'text',
                    'sort_order' => '1'
                ], [
                    'parent_id' => $parent_id,
                    'code' => 'duty_free',
                    'value' => '0',
                    'type' => 'hidden',
                    'sort_order' => '1'
                ],
            ];
            ShopConfig::insert($rows);
        }
    }

    /**
     * 修改版本号
     */
    private function changeDscVersion()
    {
        $appPath = app_path('Patch/');
        $list = $this->filesystem->allFiles($appPath);

        $dsc_version = '';
        if ($list) {
            foreach ($list as $key => $val) {
                $name = str_replace('Migration_', '', $this->filesystem->name($val));
                $dsc_version = str_replace('_', '.', $name);
            }
        }

        if ($dsc_version) {
            ShopConfig::where('code', 'dsc_version')
                ->update([
                    'value' => $dsc_version
                ]);
        }
    }


    /**
     * 跨境订单提交文章ID
     */
    private function CrossBorderArticleId()
    {
        /* 跨境订单提交文章ID */
        $count = ShopConfig::where('code', 'cross_border_article_id')->count();

        if ($count <= 0) {
            $parent_id = ShopConfig::where('code', 'shopping_flow')->value('id');
            $parent_id = !empty($parent_id) ? $parent_id : 0;

            // 默认数据
            $rows = [
                'parent_id' => $parent_id,
                'code' => 'cross_border_article_id',
                'value' => '0',
                'type' => 'text'
            ];
            ShopConfig::insert($rows);
        }
    }

    /**
     * 确认收货发短信开关
     */
    private function AffirmReceivedSmsSwitch()
    {
        $parent_id = ShopConfig::where('code', 'sms')->value('id');
        $parent_id = !empty($parent_id) ? $parent_id : 0;

        /* 确认收货发短信开关 */
        $count = ShopConfig::where('code', 'sms_order_received')->count();

        if ($count <= 0) {

            // 默认数据
            $rows = [
                'parent_id' => $parent_id,
                'code' => 'sms_order_received',
                'type' => 'select',
                'store_range' => '1,0',
                'value' => '0',
                'sort_order' => '13',
                'shop_group' => 'sms'
            ];
            ShopConfig::insert($rows);
        }

        /* 商家确认收货发短信开关 */
        $count = ShopConfig::where('code', 'sms_shop_order_received')->count();

        if ($count <= 0) {
            // 默认数据
            $rows = [
                'parent_id' => $parent_id,
                'code' => 'sms_shop_order_received',
                'type' => 'select',
                'store_range' => '1,0',
                'value' => '0',
                'sort_order' => '13',
                'shop_group' => 'sms'
            ];
            ShopConfig::insert($rows);
        }
    }

    /**
     * 我要开店
     */
    private function PcLoginRight()
    {
        $parent_id = ShopConfig::where('code', 'extend_basic')->value('id');
        $parent_id = !empty($parent_id) ? $parent_id : 0;

        $count = ShopConfig::where('code', 'login_right')->count();

        if ($count <= 0) {
            // 默认数据
            $rows = [
                'parent_id' => $parent_id,
                'code' => 'login_right',
                'type' => 'text',
                'value' => '我要开店',
                'sort_order' => '1'
            ];
            ShopConfig::insert($rows);
        }

        $count = ShopConfig::where('code', 'login_right_link')->count();

        if ($count <= 0) {
            // 默认数据
            $rows = [
                'parent_id' => $parent_id,
                'code' => 'login_right_link',
                'type' => 'text',
                'value' => 'merchants.php',
                'sort_order' => '1'
            ];
            ShopConfig::insert($rows);
        }
    }

    /**
     * v1.4.4 隐藏旧短信配置
     */
    private function hiddenSms()
    {
        $code_arr = [
            // 互亿
            'sms_ecmoban_user',
            'sms_ecmoban_password',
            // 阿里大于
            'ali_appkey',
            'ali_secretkey',
            // 阿里云
            'access_key_id',
            'access_key_secret',
            // 模板堂
            'dsc_appkey',
            'dsc_appsecret',
            // 华为云
            'huawei_sms_key',
            'huawei_sms_secret',
            // 创蓝
            'chuanglan_account',
            'chuanglan_password',
            'chuanglan_api_url',
            'chuanglan_signa',
        ];
        ShopConfig::where('type', '<>', 'hidden')->where(function ($query) use ($code_arr) {
            $query->whereIn('code', $code_arr)->orWhere('code', 'sms_type');
        })->update(['type' => 'hidden']);
    }

    /**
     * 1.5.3 新增支付手续费启用开关 (购物流程配置)
     */
    private function usePayfee()
    {
        $result = ShopConfig::where('code', 'use_pay_fee')->count();
        if (empty($result)) {
            $parent_id = ShopConfig::where('code', 'shopping_flow')->value('id');
            $parent_id = !empty($parent_id) ? $parent_id : 0;

            // 默认数据
            $rows = [
                [
                    'parent_id' => $parent_id,
                    'code' => 'use_pay_fee',
                    'value' => 0,
                    'type' => 'select',
                    'store_range' => '1,0',
                    'sort_order' => 2,
                    'shop_group' => ''
                ]
            ];
            ShopConfig::insert($rows);
        }
    }

    /**
     * 增加支付模块分组
     */
    protected function add_pay_group()
    {
        $result = ShopConfig::where('code', 'pay')->where('type', 'group')->count();
        if (empty($result)) {
            // 默认数据
            $rows = [
                [
                    'parent_id' => 0,
                    'code' => 'pay',
                    'value' => 0,
                    'type' => 'group',
                    'store_range' => '',
                    'sort_order' => 2,
                    'shop_group' => ''
                ]
            ];
            ShopConfig::insert($rows);
        }

        // 转移至支付模块下
        $parent_id = ShopConfig::where('code', 'pay')->value('id');
        $parent_id = !empty($parent_id) ? $parent_id : 0;
        if ($parent_id > 0) {
            $pay_code = [
                'use_integral',
                'use_pay_fee',
                'use_bonus',
                'use_surplus',
                'use_value_card',
                'use_coupons',
                'use_paypwd',
                'pay_effective_time'
            ];
            ShopConfig::whereIn('code', $pay_code)->where('parent_id', '<>', $parent_id)->update(['parent_id' => $parent_id]);
        }
    }

    /**
     * 升级补丁SQL
     */
    private function upgradePatch()
    {
        $list = glob(app_path('Patch/*.php'));

        if ($list) {
            $arr = [];
            foreach ($list as $key => $row) {
                $name = $this->filesystem->name($row);
                $version = 'App\\Patch\\' . $name;

                if (class_exists($version)) {
                    $version = str_replace('\\', '/', $version);
                    $ver = str_replace('App/Patch/Migration_', '', $version);
                    $ver = str_replace('_', '.', $ver);

                    $key = str_replace(['v', '.'], '', $ver);
                    $key = (int)$key;

                    $arr[$key] = $ver;
                }
            }

            $ver = collect($arr)->max();
            $ver = collect($arr)->search($ver);
            $verName = $arr[$ver] ?? '';

            ShopConfig::where('code', 'dsc_version')->update([
                'value' => $verName
            ]);
        }
    }
}
