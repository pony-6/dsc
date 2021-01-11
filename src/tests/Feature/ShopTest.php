<?php

namespace Tests\Feature;

use Tests\TestCase;

class ShopTest extends TestCase
{
    /**
     * 店铺分类列表
     */
    public function testCatList()
    {
        $response = $this->postJson('/api/v4/shop/catlist', [
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 分类下店铺列表
     */
    public function testCatStoreList()
    {
        $response = $this->postJson('/api/v4/shop/catstorelist', [
            'cat_id' => 0,
            'warehouse_id' => '0',
            'area_id' => '0',
            'size' => '10',
            'page' => '1',
            'sort' => 'ASC',
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 店铺商品列表
     */
    public function testStoreGoodsList()
    {
        $response = $this->postJson('/api/v4/shop/storegoodslist', [
            'store_id' => 1,
            'cat_id' => 4,
            'warehouse_id' => '0',
            'area_id' => '0',
            'size' => '10',
            'page' => '1',
            'sort' => 'goods_id',
            'order' => 'DESC'
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 店铺详情
     */
    public function testStoreDetail()
    {
        $response = $this->postJson('/api/v4/shop/storedetail', [
            'ru_id' => 1,
        ]);

        $this->assertContains('success', $response->getContent());
    }



}
