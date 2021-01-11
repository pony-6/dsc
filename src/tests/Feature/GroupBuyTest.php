<?php

namespace Tests\Feature;

use Tests\TestCase;

class GroupBuy extends TestCase
{
    /**
     * groupbuy 活动
     */
    public function testList()
    {
        $path = [
            'keywords' => '眼镜',
            'page' => 1,
            'size' => 10,
            'sort' => 'act_id',
            'order' => 'DESC',
        ];
        $response = $this->getJson('/api/v4/group_buy?' . http_build_query($path));

        $res = json_decode($response->getContent(), true);
        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * groupbuy 活动
     */
    public function testInfo()
    {
        $response = $this->post('/api/v4/user/login', [
            'username' => 'ecmoban',
            'password' => 'admin123'
        ]);

        $res = json_decode($response->getContent(), true);
        $path = [
            'group_buy_id' => 853,//分类
            'warehouse_id' => 1,
            'area_id' => 2,
        ];
        $response = $this->getJson('/api/v4/group_buy/detail?' . http_build_query($path), [
            'token' => $res['data']
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }


}


