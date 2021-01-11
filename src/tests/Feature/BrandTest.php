<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BrandTest extends TestCase
{

    /**
     * 首页
     */
    public function testIndex()
    {
        $response = $this->postJson('/api/v4/brand/', [
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 详情
     */
    public function testDetail()
    {
        $response = $this->postJson('/api/v4/brand/detail', [
            'brand_id' => 108
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 商品
     */
    public function testGoodsList()
    {
        $response = $this->postJson('/api/v4/brand/goodslist', [
            'brand_id' => 108,
            'cat' => 168,
            'warehouse_id' => '0',
            'area_id' => '0',
            'area_city' => '0',
            'size' => '10',
            'page' => '1',
            'sort' => 'goods_id',
            'order' => 'DESC'
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 品牌列表
     */
    public function testBrandList()
    {
        $response = $this->postJson('/api/v4/brand/brandlist', [
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

}
