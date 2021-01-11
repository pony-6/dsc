<?php

namespace Tests\Feature;

use Tests\TestCase;

class UsersTest extends TestCase
{
    /**
     * 账户概要
     */
    public function testIndex()
    {
        $response = $this->getJson('/api/v4/account', [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);

    }

    /**
     * 申请记录
     */
    public function testReplylog()
    {
        $arg = http_build_query([
            'page' => 2
        ]);

        $response = $this->getJson('/api/v4/account/replylog?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 账户明细
     */
    public function testAccountlog()
    {
        $arg = http_build_query([
            'page' => 2
        ]);

        $response = $this->getJson('/api/v4/account/accountlog?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 资金提现
     */
    public function testReply()
    {
        $response = $this->getJson('/api/v4/account/reply', [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 账户充值
     */
    public function testDeposit()
    {
        $arg = http_build_query([
            'id' => 1
        ]);

        $response = $this->getJson('/api/v4/account/deposit?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 账户充值
     */
    public function testAccount()
    {
        $response = $this->post('/api/v4/account/account', [
            'amount' => '100',//金额
            'user_note' => '备注',//备注
            'payment_id' => '9',//支付宝
            'rec_id' => '10',
            'surplus_type' => 1// 0、充值 1、提现
        ],[
            'token' => env('USER_TOKEN')
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }
}
