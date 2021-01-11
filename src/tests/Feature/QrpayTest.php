<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QrpayTest extends TestCase
{

	/**
	 * 首页
	 */
 	public function testIndex()
 	{
 		$path = [
 			'id' => 1,
 		];

 		$token = [
 			'token' => env('USER_TOKEN')
 		];

 		$response = $this->getJson('/api/v4/qrpay?' . http_build_query($path),  $token);

 		$res = json_decode($response->getContent(), true);
 		$this->assertArraySubset(['status' => 'success'], $res);
 	}

	/**
	 * 发起支付
	 */
	public function testPay()
	{
		$response = $this->post('/api/v4/qrpay/pay', [
			'id' => 4,
			'amount' => '4'
		], [
			'token' => env('USER_TOKEN'),
		]);

		$res = json_decode($response->getContent(), true);

		$this->assertArraySubset(['status' => 'success'], $res);
	}


}
