<?php

namespace Tests\Feature;

use Tests\TestCase;

class VisualTest extends TestCase
{
    /**
     * 公告
     */
    public function testArticle()
    {
        $response = $this->postJson('/api/v4/visual/article', [
            'cat_id' => 4,
            'num' => 10
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 分类
     */
    public function testProduct()
    {
        $response = $this->postJson('/api/v4/visual/product', [
            'number' => 20,
            'type' => '',
            'ruid' => '',
            'cat_id' => 1
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 选中的商品
     */
    public function testChecked()
    {
        $response = $this->postJson('/api/v4/visual/checked', [
            'goods_id' => '698,697,695,691,693,692',
            'warehouse_id' => 0,
            'area_id' => 0
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 选中的商品
     */
    public function testSeckill()
    {
        $response = $this->postJson('/api/v4/visual/seckill', [
            'number' => 10
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 店铺街
     */
    public function testStore()
    {
        $response = $this->postJson('/api/v4/visual/store', [
            'childrenNumber' => 3,
            'number' => 10
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 店铺街详情
     */
    public function testStoreIn()
    {
        $response = $this->postJson('/api/v4/visual/storein', [
            'ru_id' => 1
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 店铺街底部详情
     */
    public function testStoreDown()
    {
        $response = $this->postJson('/api/v4/visual/storedown', [
            'ru_id' => 1
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 店铺街关注
     */
    public function testAddCollect()
    {
        $response = $this->postJson('/api/v4/visual/addcollect', [
            'ru_id' => 1
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 店铺街关注
     */
    public function testView()
    {
        $response = $this->postJson('/api/v4/visual/view', [
            'id' => 3,
            'type' => 'index'
        ]);

        $this->assertContains('success', $response->getContent());
    }

}
