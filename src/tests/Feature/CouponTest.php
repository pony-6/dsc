<?php

namespace Tests\Feature;

use Tests\TestCase;

class CouponTest extends TestCase
{
    /**
     * 测试详情
     */
    public function testList()
    {
        $response = $this->post('/api/v4/user/login', [
            'username' => 'ecmoban',
            'password' => 'admin123'
        ]);
        $res = json_decode($response->getContent(), true);
        $path = [
            'page' => 1,
            'size' => 10,
            'status' => 0,
        ];
        $response = $this->get('/api/v4/coupon?' . http_build_query($path), [
            'token' => $res['data']
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);

    }

    /**
     * 测试详情
     */
    public function testReceive()
    {
        $response = $this->post('/api/v4/user/login', [
            'username' => 'ecmoban',
            'password' => 'admin123'
        ]);
        $res = json_decode($response->getContent(), true);

        $response = $this->post('/api/v4/coupon/receive', [
            'cou_id' => 1,
        ], [
            'token' => $res['data']
        ]);
        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);

    }


    /**
     * 测试详情
     */
    public function testBonus()
    {
        $response = $this->post('/api/v4/user/login', [
            'username' => 'ecmoban',
            'password' => 'admin123'
        ]);

        $res = json_decode($response->getContent(), true);

        $path = [
            'page' => 1,
            'size' => 10,
            'type' => 0,
        ];
        $response = $this->getJson('/api/v4/coupon/coupon?' . http_build_query($path), [
            'token' => $res['data']
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);

    }

    /**
     * 测试详情
     */
    public function testGoods()
    {
        $response = $this->post('/api/v4/user/login', [
            'username' => 'ecmoban',
            'password' => 'admin123'
        ]);

        $res = json_decode($response->getContent(), true);

        $path = [
            'goods_id'=>903,
            'ru_id'=>0,
        ];
        $response = $this->getJson('/api/v4/coupon/goods?' . http_build_query($path), [
            'token' => $res['data']
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);

    }


}
