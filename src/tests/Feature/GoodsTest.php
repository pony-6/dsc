<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GoodsTest extends TestCase
{

    /**
     * 组合套餐 改变属性、数量时重新计算商品价格
     */
    public function testFittingprice()
    {

        $path = [
            'id' => 903,
            'group' => [
                'attr' => '738,739',
                'attr' => '738,741',
                'goods_attr' => '7,47',
                'number' => 1,
                'warehouse_id' => 0,
                'area_id' => 0,
                'area_city' => 0,
                'group_name' => 'm_goods_1',
                'group_id' => 'm_goods_1_903',
                'fittings_goods' => 903,
            ],
            'type' => 1,
            'onload' => 'onload',
        ];

        $response = $this->postJson('/api/v4/goods/fittingprice', $path);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }



    /**
     * 组合套餐 配件
     */
    public function testFittings()
    {
        $response = $this->postJson('/api/v4/goods/fittings', [
            'goods_id' => '903'
        ]);

        $res = json_decode($response->getContent(), true);
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     * 详情
     */
    public function testShow()
    {
        $response = $this->postJson('/api/v4/goods/show', [
            'goods_id' => '902',
            'uid' => '99',
            'warehouse_id' => '0',
            'area_id' => '0',
            'is_delete' => '0',
            'is_on_sale' => '1',
            'is_alone_sale' => '1',

        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 获得促销商品
     */
    public function testPromoteGoods()
    {
        $response = $this->postJson('/api/v4/goods/promotegoods', [
            'uid' => '60',
            'warehouse_id' => '0',
            'area_id' => '0'
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 获得推荐商品
     */
    public function testRecommendGoods()
    {
        $response = $this->postJson('/api/v4/goods/recommendgoods', [
            'uid' => '60',
            'warehouse_id' => '0',
            'area_id' => '0'
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 点击切换属性价格
     */
    public function testAttrPrice()
    {
        $response = $this->postJson('/api/v4/goods/attrprice', [
            'uid' => '99',
            'goods_id' => '902',
            'num' => '1',
            'warehouse_id' => '0',
            'area_id' => '0',
            'store_id' => '0',
            'attr_id' => '17,751'
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }


}
