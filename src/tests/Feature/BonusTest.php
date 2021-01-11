<?php

namespace Tests\Feature;

use Tests\TestCase;

class BonusTest extends TestCase
{
    /**
     * 测试详情
     */
    public function testList()
    {
        $path = [
            'page' => 1,
            'size' => 10,
        ];
        $response = $this->getJson('/api/v4/bonus?' . http_build_query($path));

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
        $response = $this->post('/api/v4/bonus/receive', [
            'type_id' => 17,
        ], [
            'token' => $res['data']
        ]);
        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);

    }

    /**
     * 测试详情
     */
    public function testStore()
    {
        $response = $this->post('/api/v4/user/login', [
            'username' => 'ecmoban',
            'password' => 'admin123'
        ]);

        $res = json_decode($response->getContent(), true);
        $response = $this->post('/api/v4/bonus/store', [
            'bonus_sn' => '1000003339',
            'bonus_password' => 'AK042TN6D7',
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
        $response = $this->getJson('/api/v4/bonus/bonus?' . http_build_query($path), [
            'token' => $res['data']
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);

    }


}
