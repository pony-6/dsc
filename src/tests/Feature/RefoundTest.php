<?php

namespace Tests\Feature;

use Tests\TestCase;

class RefoundTest extends TestCase
{
    /**
     * 测试添加
     */
    public function testIndex()
    {
        $path = [
            'page' => 1,
            'size' => 10,
        ];

        $response = $this->getJson('/api/v4/refound?' . http_build_query($path), [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     * 测试添加
     */
    public function testApplyReturn()
    {
        $path = [
            'order_id' => 2,
            'recr_id' => 5,
            'warehouse_id' => 2,
            'area_id' => 0,
        ];

        $response = $this->getJson('/api/v4/refound/applyreturn?' . http_build_query($path), [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     * 测试添加
     */
    public function testReturnDetail()
    {
        $path = [
            'ret_id' => 2,
        ];

        $response = $this->getJson('/api/v4/refound/returndetail?' . http_build_query($path), [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }



    public function testSubmitReturn()
    {
        $response = $this->post('/api/v4/refound/submit_return', [
            'rec_id'=>2,
            'last_option'=>'111',
            'return_remark'=>'2222',
            'return_brief'=>'3333',
            'chargeoff_status'=>'44444',
            'return_type'=>2,
            'return_g_number'=>'4654564',
        ], [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);

    }



}
