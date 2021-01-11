<?php

namespace Tests\Feature;

use Tests\TestCase;

class Activity extends TestCase
{
    /**
     * activity 活动
     */
    public function testList()
{

    $response = $this->get('/api/v4/activity');

    $res = json_decode($response->getContent(), true);

    $this->assertArraySubset(['status' => 'success'], $res);
}


    /**
     * activity 活动详情
     */
    public function testshow()
    {
        $path = [
            'act_id' => 1
        ];
        $response = $this->getJson('/api/v4/activity/show?' .http_build_query($path));

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * activity 活动商品列表
     */
    public function testgoods()
    {
        $path = [
            'act_id' => 47,
            'page' => 1,
            'size' => 10,
            'sort' => 0,  // 排序 0综合， 1价格，2销量
            'order' => 'desc'// 排序方式 desc acs
        ];
        $response = $this->postJson('/api/v4/activity/goods', $path);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     * activity 活动商品凑单
     */
    public function testcoudan()
    {
        $path = [
            'act_id' => 47
        ];
        $response = $this->getJson('/api/v4/activity/coudan?' .http_build_query($path));

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }


}


