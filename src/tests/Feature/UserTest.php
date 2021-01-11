<?php

namespace Tests\Feature;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * 用户登录测试
     */
    public function testLogin()
    {
        $response = $this->postJson('/api/v4/user/login', [
            'username' => 'ecmoban',
            'password' => 'admin123'
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 通过 token 换取 userinfo
     */
    public function testProfile()
    {
        $response = $this->getJson('/api/v4/user/profile', [
            'token' => env('USER_TOKEN')
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 订单列表
     */
    public function testOrderList()
    {
        $response = $this->postJson('/api/v4/user/orderlist', [
            'uid' => '99',
            'page' => '1',
            'size' => '10',
            'status' => '0',
            'type' => 'type',
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 订单详情
     */
    public function testOrderDetail()
    {
        $response = $this->postJson('/api/v4/user/orderdetail', [
            'order_id' => '7',
            'uid' => '99',
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 设置头像
     */
    public function testAvatar()
    {
        $path = [
            'pic' => ''
        ];
        $token = [
            'token' => env('USER_TOKEN')
        ];
        $response = $this->getJson('/api/v4/user/avatar?' .http_build_query($path), $token);
        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 帮助列表
     */
    public function testHelp()
    {
        $response = $this->postJson('/api/v4/user/help');

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);

    }
}
