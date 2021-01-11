<?php

namespace Tests\Feature;

use Tests\TestCase;

class OfflineStoreTest extends TestCase
{

    /**
     * 测试添加
     */
    public function testIndex()
    {
        $path = [
            'province'=>25,
            'city' => 321,
            'district' => 2709,
            'street' => 0,
            'goods_id' => 903,
            'spec_arr'=> 11,
            'page'=> 1,
            'size'=> 10,
        ];

        $response = $this->getJson('/api/v4/offline-store/list?' . http_build_query($path), [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }


}
