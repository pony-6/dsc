<?php

namespace Tests\Feature;

use Tests\TestCase;

class InvoiceTest extends TestCase
{

    /**
     * 测试添加
     */
    public function testCreate()
    {
        $response = $this->post('/api/v4/user/login', [
            'username' => 'ecmoban',
            'password' => 'admin123'
        ]);
        $res = json_decode($response->getContent(), true);

        $response = $this->post('/api/v4/invoice/store', [
            'company_name' => '上海商创',//公司名称
            'tax_id' => '343625199222565322',//税号
            'company_address' => '中山北路',//公司地址
            'company_telephone' => '20555555252',//公司电话
            'bank_of_deposit' => '华师大支行',//开户行
            'bank_account' => '62266523363236663366',//银行卡号

            'consignee_name' => '301室1234',
            'consignee_mobile_phone' => '123125345',
            'consignee_address' => '撒大黄蜂is大',
            'country' => '520',
            'province' => '1',
            'city' => '522',
            'district' => '范德萨发哈斯蒂芬函数',
        ], [
            'token' => $res['data']
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 测试地址详情
     */
    public function testDetail()
    {
        $response = $this->post('/api/v4/user/login', [
            'username' => 'ecmoban',
            'password' => 'admin123'
        ]);
        $res = json_decode($response->getContent(), true);

        $response = $this->get('/api/v4/invoice', [
            'token' => $res['data']
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

        $response = $this->put('/api/v4/invoice/update', [
            'id' => 6,
            'company_name' => '上海商创11111111111',//公司名称
            'tax_id' => '343625199222565322',//税号
            'company_address' => '中山北路',//公司地址
            'company_telephone' => '20555555252',//公司电话
            'bank_of_deposit' => '华师大支行',//开户行
            'bank_account' => '62266523363236663366',//银行卡号

            'consignee_name' => '301室1234',
            'consignee_mobile_phone' => '123125345',
            'consignee_address' => '撒大黄蜂is大',
            'country' => '520',
            'province' => '1',
            'city' => '522',
            'district' => '范德萨发哈斯蒂芬函数',
        ], [
            'token' => $res['data']
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 测试删除
     */
    public function testDestroy()
    {
        $response = $this->post('/api/v4/user/login', [
            'username' => 'ecmoban',
            'password' => 'admin123'
        ]);
        $res = json_decode($response->getContent(), true);
        $response = $this->delete('/api/v4/invoice/destroy', [
            'id' => 4
        ], [
            'token' => $res['data']
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }


}
