<?php

namespace Tests\Feature;

use Tests\TestCase;

class Exchange extends TestCase
{
    /**
     * Exchange 活动
     */
    public function testList()
    {

        $path = [
            'children' => 0,//分类
            'min' => 0,
            'max' => 0,
            'page' => 1,
            'size' => 10,
            'sort' => 'goods_id',
            'order' => 'DESC',
        ];
        $response = $this->getJson('/api/v4/exchange?' . http_build_query($path));

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * Exchange 活动
     */
    public function testInfo()
    {
        $response = $this->post('/api/v4/user/login', [
            'username' => 'ecmoban',
            'password' => 'admin123'
        ]);

        $res = json_decode($response->getContent(), true);
        $path = [
            'id' => 853,//分类
            'warehouse_id' => 1,
            'area_id' => 2,
        ];
        $response = $this->getJson('/api/v4/exchange/detail?' . http_build_query($path), [
            'token' => $res['data']
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

}


