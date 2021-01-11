<?php

namespace Tests\Feature;

use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * 订单列表
     */
    public function testList()
    {
        $response = $this->postJson('/api/v4/order/list', [
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
    public function testDetail()
    {
        $response = $this->postJson('/api/v4/order/detail', [
            'order_id' => 10,
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 订单确认
     */
    public function testConfirm()
    {
        $response = $this->postJson('/api/v4/order/confirm', [
            'order_id' => 10,
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 延迟收货申请
     */
    public function testDelay()
    {
        $response = $this->postJson('/api/v4/order/delay', [
            'order_id' => 9
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 订单取消
     */
    public function testCancel()
    {
        $response = $this->postJson('/api/v4/order/cancel', [
            'order_id' => 10,
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 订单跟踪
     */
    public function testTrack()
    {
        $response = $this->postJson('/api/v4/order/track', [
            'relname' => 'shunfeng',
            'order_sn' => '2018081414230133334',
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

}
