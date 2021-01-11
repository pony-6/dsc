<?php

namespace Tests\Feature;

use Tests\TestCase;

class BankTest extends TestCase
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

		$response = $this->get('/api/v4/bank', [
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
		$response = $this->post('/api/v4/user/login', [
				'username' => 'ecmoban',
				'password' => 'admin123'
		]);

		$res = json_decode($response->getContent(), true);

		$response = $this->post('/api/v4/bank/store', [
				'id' => 0,
				'bank_name' => '11111',
				'bank_card' => '6225652522554',
				'bank_region' => '上海工商银行11111',
				'bank_user_name' => 'ecmoban',
		],[
				'token'  => $res['data']
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

		$response = $this->put('/api/v4/bank/update', [
				'id' => 1,
				'bank_name' => '上海工商银行华师大工商',
				'bank_card' => '6225652522554222222',
				'bank_region' => '上海工商银行华师大工商',
				'bank_user_name' => 'ecmoban',
		],[
				'token'  => $res['data']
		]);

		$res = json_decode($response->getContent(), true);

		$this->assertArraySubset(['status' => 'success'], $res);
	}


}
