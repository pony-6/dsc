<?php

namespace Tests\Feature;

use Tests\TestCase;

class AddressTest extends TestCase
{

    /**
     * 测试添加
     */
    public function testCreate()
    {
        $response = $this->post('/api/v4/address/store', [
            'address_id' => 0,
            'consignee' => '发哥666',
            'mobile' => '18217233896',
            'country' => 1,
            'province' => 2,
            'city' => 52,
            'district' => 500,
            'address' => '法哥测试地址'
        ], [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 测试列表
     */
    public function testList()
    {
        $response = $this->getJson('/api/v4/address', [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 测试地址详情
     */
    public function testDetail()
    {
        $response = $this->post('/api/v4/address/show', [
            'address_id' => 12
        ], [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 测试更新
     */
    public function testUpdate()
    {
        $response = $this->put('/api/v4/address/update', [
            'address_id' => 12,
            'consignee' => '发哥999',
            'mobile' => '18217233896',
            'country' => 1,
            'province' => 2,
            'city' => 52,
            'district' => 500,
            'address' => '法哥测试地址'
        ], [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 测试删除
     */
    public function testDestroy()
    {
        $response = $this->delete('/api/v4/address/destroy', [
            'address_id' => 12
        ], [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 设置默认地址
     */
    public function testDefault()
    {
        $response = $this->post('/api/v4/address/default', [
            'address_id' => 1
        ], [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

}
