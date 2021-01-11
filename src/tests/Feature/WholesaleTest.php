<?php

namespace Tests\Feature;

use Tests\TestCase;

class WholesaleTest extends TestCase {

	/**
	 * 测试批发列表
	 */
	public function testWholeSaleList() {

		$path = [
			'page' => 1,
			'size' => 10,
			'search_category' => '',
			'search_keywords' => '',
			'sort' => 'ASC',
			'order' => 'sale_num'			
		];

		$token = [
			'token' => env('USER_TOKEN')
		];
		$response = $this->getJson('/api/v4/wholesale/?' . http_build_query($path),$token);		
		$res = json_decode($response->getContent(), true);

		$this->assertArraySubset(['status' => 'success'], $res);

	}

	
	/**
	 * 测试批发详情
	 */
	public function testWholeSaleDetail() {

		$path = [
			'id' => 113			
		];

		$token = [
			'token' => env('USER_TOKEN')
		];
		$response = $this->getJson('/api/v4/wholesale/detail/?' . http_build_query($path),$token);		
		$res = json_decode($response->getContent(), true);

		$this->assertArraySubset(['status' => 'success'], $res);

	}


	/**
	 * 测试批发加入购物车
	 */
	public function testWholeSaleAddCart() {

		$path = [
			'id' => 113,
			'number' => 40
		];

		$token = [
			'token' => env('USER_TOKEN')
		];
		$response = $this->getJson('/api/v4/wholesale/addcart/?' . http_build_query($path),$token);		
		$res = json_decode($response->getContent(), true);

		$this->assertArraySubset(['status' => 'success'], $res);

	}

	/**
	 * 测试批发购物车
	 */
	public function testWholeSaleCart() {

		$path = [
			'id' => 113,
			'number' => 40
		];

		$token = [
			'token' => env('USER_TOKEN')
		];
		$response = $this->getJson('/api/v4/wholesale/addcart/?' . http_build_query($path),$token);		
		$res = json_decode($response->getContent(), true);

		$this->assertArraySubset(['status' => 'success'], $res);

	}

}
