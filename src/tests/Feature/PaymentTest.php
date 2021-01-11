<?php

namespace Tests\Feature;

use Tests\TestCase;

class PaymentTest extends TestCase
{
    /**
     * 测试添加
     */
    public function testIndex()
    {
        $path = [
            'support_cod' => 0,
            'cod_fee' => 0,
            'is_online' => 1,
        ];

        $response = $this->getJson('/api/v4/payment/list?' . http_build_query($path), [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 测试添加
     */
    public function testCode()
    {
        $path = [
            'payment_id' => 9,
            'order_sn'=> '2018082010503215200',
            'log_id'=> '54',
            'order_amount'=> '90',
        ];

        $response = $this->getJson('/api/v4/payment/code?' . http_build_query($path), [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }
    /**
     * 测试添加
     */
    public function testCallback()
    {
        $path = [
            'code' => 'alipay',
            'log_id'=> '54',
            'type'=> 2,
        ];

        $response = $this->getJson('/api/v4/payment/callback?' . http_build_query($path), [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    public function testOnlinepay()
    {
        $path = [
            'order_sn' => '2018062609383557919',
        ];

        $response = $this->getJson('/api/v4/payment/onlinepay?' . http_build_query($path), [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    public function testChange()
    {
        $path = [
            'order_id' => 50,
            'pay_id' => 15,
        ];

        $response = $this->getJson('/api/v4/payment/change_payment?' . http_build_query($path), [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

}
