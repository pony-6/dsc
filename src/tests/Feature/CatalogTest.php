<?php

namespace Tests\Feature;

use Tests\TestCase;

class CatalogTest extends TestCase
{
    /**
     * 分类
     */
    public function testindex()
    {
        $response = $this->get('/api/v4/catalog/list', [
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 分类详情
     */
    public function testshow()
    {
        $response = $this->get('/api/v4/catalog/1420/detail', [
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 分类下商品列表
     */
    public function testgoodslist()
    {
        $a = [];
        $a[0] = 349;
        $response = $this->post('/api/v4/catalog/goodslist', [
            'children' => $a,
            'brand_id' => '0',
            'warehouse_id' => '0',
            'oneself' => '0',
            'area_id' => '0',
            'min' => '0',
            'max' => '0',
            'filter_attr' => '',
            'where_ext' => '',
            'goods_num' => '0',
            'size' => '10',
            'page' => '1',
            'sort' => 'goods_id',
            'order' => 'ASC',
            'keywords' => [],
            'sc_ds' => ''
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 分类下品牌列表
     */
    public function testbrandList()
    {
        $a = [];
        $a[0] = 349;
        $response = $this->post('/api/v4/catalog/brandlist', [
            'children' => $a
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

}
