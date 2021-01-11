<?php

namespace Tests\Feature;

use Tests\TestCase;

class SeckillTest extends TestCase
{

    /**
     * 测试添加
     */
    public function testTime()
    {
        $response = $this->getJson('/api/v4/seckill/time', [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }



    /**
     * 测试添加
     */
    public function testIndex()
    {
        $path = [
            'id'=>1,
            'page' => 1,
            'size' => 10,
            'tomorrow' => 1,
        ];

        $response = $this->getJson('/api/v4/seckill?' . http_build_query($path), [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }
    /**
     * 测试添加
     */
    public function testDetail()
    {
        $path = [
            'seckill_id'=>1,
            'tomorrow' => 1,
        ];

        $response = $this->getJson('/api/v4/seckill/detail?' . http_build_query($path), [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 测试添加
     */
    public function testBuy()
    {
        $path = [
            'sec_goods_id'=>47,
            'number' => 1,
            'warehouse_id'=>0,
            'area_id' => 0,
            'area_city' => 0,
            'goods_spec' =>0
        ];
        $response = $this->getJson('/api/v4/seckill/buy?' . http_build_query($path), [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);

    }


}
