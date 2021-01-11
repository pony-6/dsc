<?php

namespace Tests\Feature;

use Tests\TestCase;

class ShippingTest extends TestCase
{
    /**
     * 配送列表
     */
    public function testIndex()
    {
        $arg = http_build_query([
            'rec_ids' => '218',
            'ru_id' => 0,
            'consignee' => [],
            'flow_type' => 1,
        ]);
        $response = $this->getJson('/api/v4/shipping?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 配送运费
     */
    public function testAmount()
    {
        $arg = http_build_query([
            'page' => 2,
            'shipping_id' => [["0","16"]],
            'rec_ids' => '217,218,219',
            'shipping_type' => [["0","0"]],
            'shipping_code' => [["0","sf_express"]],
            'select_shipping' => 16,
            'consignee' => [],
            'store_id' => 0,
        ]);

        $response = $this->getJson('/api/v4/shipping/amount?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 商品运费
     */
    public function testGoodsShippingFee()
    {
        $arg = http_build_query([
            'goods_id' => 892,
            'position' => [
                'province_id' => 25,//上海市
                'city_id' => 321,//上海市
                'district_id' => 2709,//普陀区
                'street' => 3412,//长风街道
            ]
        ]);

        $response = $this->getJson('/api/v4/shipping/goodsshippingfee?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }
}
