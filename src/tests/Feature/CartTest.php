<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CartTest extends TestCase
{
    /**
     * 购物车选择促销活动
     */
    public function testGetfavourable()
    {
        $response = $this->postJson('/api/v4/cart/getfavourable', [
            'goods_id' => 829,  // 商品id
            'ru_id' => 0,       // 商家id
            'act_id' => 50,     // 活动id
            'rec_id' => 23      // 购物车id
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 购物车切换可选促销
     */
    public function testChangefav()
    {
        $response = $this->postJson('/api/v4/cart/changefav', [
            'goods_id' => 829,  // 商品id
            'act_id' => 50,     // 活动id
            'rec_id' => 69      // 购物车id
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }




    /**
     * 优惠活动（赠品）列表
     */
    public function testGiftlist()
    {
        $response = $this->postJson('/api/v4/cart/giftlist', [
            'act_id' => 1,  // 购物车id
        ]);
        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 购物车选择商品
     */
    public function testChecked()
    {
        $response = $this->postJson('/api/v4/cart/checked', [
            'rec_id' => [20,23,24],  // 购物车id
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 添加优惠活动（赠品）到购物车
     */
    public function testAddGiftCart()
    {
        $response = $this->postJson('/api/v4/cart/addGiftCart', [
            'act_id' => 1,  // 活动id
            'ru_id' => 0,   // 商家id
            'select_gift' => [672] // 赠品id
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     * 添加超值礼包
     */
    public function testAddpackage()
    {
        $response = $this->postJson('/api/v4/cart/addpackage', [
            'package_id' => 48,
            'number' => 1,
            'warehouse_id' => 0,
            'area_id' => 0,
            'confirm_type' => 3,
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 详情
     */
    public function testAdd()
    {
        $response = $this->postJson('/api/v4/cart/add', [
            'goods_id' => '904',
            'num' => '1',
            'uid' => '60',
            'spec' => '',
            'warehouse_id' => '0',
            'area_id' => '0',
            'parent_id' => '0',
            'store_id' => '0',
            'take_time' => '0',
            'store_mobile' => '0',

        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 购物车商品列表
     */
    public function testGoodsList()
    {
        $response = $this->postJson('/api/v4/cart/goodslist', [
            'uid' => '60',
            'warehouse_id' => '0',
            'area_id' => '0',

        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 购物车领取优惠券列表
     */
    public function testGetCoupons()
    {
        $response = $this->postJson('/api/v4/cart/getCoupons', [
            'ru_id' => 0,  // 活动id
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 删除购物车商品
     */
    public function testDeleteCart()
    {

        $response = $this->postJson('/api/v4/cart/deletecart', [
            'uid' => '60',
            'rec_id' => '8',
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 清空购物车商品
     */
    public function testClearCart()
    {

        $response = $this->postJson('/api/v4/cart/clearcart', [
            'uid' => '60',
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 获取购物车总金额
     */
    public function testAmount()
    {

        $response = $this->postJson('/api/v4/cart/amount', [
            'uid' => '60',
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

}
