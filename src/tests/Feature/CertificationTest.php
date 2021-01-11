<?php

namespace Tests\Feature;

use Tests\TestCase;

class CertificationTest extends TestCase
{
    /**
     * 测试详情
     */
    public function testList()
    {
        $response = $this->post('/api/v4/user/login', [
            'username' => 'ecmoban',
            'password' => 'admin123'
        ]);

        $res = json_decode($response->getContent(), true);

        $response = $this->get('/api/v4/realname', [
            'token' => $res['data']
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);

    }

    /**
     * 测试更新
     */
    public function testAdd()
    {
        $response = $this->post('/api/v4/realname/store', [
            'real_id' => 0,
            'real_name' => 'ecmoban',
            'bank_mobile' => '13838386969',
            'bank_name' => '上海工商银行',
            'bank_card' => '6225652522554',
            'self_num' => '22222222',
        ],  [
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
        $response = $this->post('/api/v4/user/login', [
            'username' => 'ecmoban',
            'password' => 'admin123'
        ]);

        $res = json_decode($response->getContent(), true);

        $response = $this->put('/api/v4/realname/update', [
            'real_id' => 2,
            'real_name' => 'ecmoban22222222',
            'bank_mobile' => '13838386967',
            'bank_name' => '上海工商银行111',
            'bank_card' => '6225652522554',
            'add_time' => '18655622',
            'review_content' => '测试提交2222222',
            'review_status' => 1,
            'user_type' => 0,
            'front_of_id_card' => 'data/idcard/1525391780728110387.png',
            'reverse_of_id_card' => 'data/idcard/1525391780972957911.png',
        ], [
            'token' => $res['data']
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }


}
