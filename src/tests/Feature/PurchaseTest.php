<?php

namespace Tests\Feature;

use Tests\TestCase;

class PurchaseTest extends TestCase
{
    /**
     * 采购聚合页
     */
    public function testIndex()
    {
        $response = $this->getJson('/api/v4/purchase', [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 采购列表页
     */
    public function testList()
    {
        $arg = http_build_query([
            'page' => 2,
            'cat_id' => 1,
        ]);

        $response = $this->getJson('/api/v4/purchase/list?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 商品列表
     */
    public function testGoodsList()
    {
        $arg = http_build_query([
            'page' => 2,
            'id' => 5,
        ]);

        $response = $this->getJson('/api/v4/purchase/goodslist?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 搜索结果列表
     */
    public function testSearchList()
    {
        $arg = http_build_query([
            'page' => 2,
            'keyword' => '衣服',
        ]);

        $response = $this->getJson('/api/v4/purchase/searchlist?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 采购商品详情
     */
    public function testGoods()
    {
        $arg = http_build_query([
            'act_id' => 117,
        ]);

        $response = $this->get('/api/v4/purchase/goods?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertContains('success', $res);
    }

    /**
     * 加入购物车
     */
    public function testAddToCart()
    {
        $arg = http_build_query([
            'goods_id' => 772,
        ]);

        $response = $this->getJson('/api/v4/purchase/addtocart?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 提交订单
     */
    public function testDown()
    {
        $arg = http_build_query([
        'consignee' => '普陀',
        'mobile' => '123456789',
        'address' => '普陀',
        'inv_type' => 0,
        'pay_id' => 0,
        'postscript' => '123',
        'inv_payee' => '1',
        'tax_id' => '1',
        'rec_ids' => '',
        ]);

        $response = $this->getJson('/api/v4/purchase/down?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 购物车
     */
    public function testCart()
    {
        $arg = http_build_query([
            'goods_id' => 772,
            'rec_ids' => '',
        ]);

        $response = $this->getJson('/api/v4/purchase/cart?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 购物车
     */
    public function testUpdateCartGoods()
    {
        $arg = http_build_query([
            'rec_id' => 2,
            'rec_num' => 2,
            'rec_ids' => '',
        ]);

        $response = $this->getJson('/api/v4/purchase/updatecartgoods?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 求购信息列表
     */
    public function testShow()
    {
        $arg = http_build_query([
            'is_finished' => 1,
            'keyword' => '',
            'page' => 1,
        ]);

        $response = $this->getJson('/api/v4/purchase/show?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 求购信息列表
     */
    public function testShowDetail()
    {
        $arg = http_build_query([
            'id' => 1,
        ]);

        $response = $this->getJson('/api/v4/purchase/showdetail?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }
}
