<?php

namespace Tests\Feature;

use Tests\TestCase;

class CollectTest extends TestCase {

	/**
	 * 测试收藏店铺列表
	 */
	public function testshoplist() {
		$path = [
			'page' => 1,
			'size' => 10,
		];

        $token = [
            'token' => env('USER_TOKEN')
        ];
		$response = $this->getJson('/api/v4/collect/shop?' . http_build_query($path), $token);

		$res = json_decode($response->getContent(), true);

		$this->assertArraySubset(['status' => 'success'], $res);

	}

	/**
	 * 测试收藏店铺
	 */
	public function testcollectshop() {
		$response = $this->post('/api/v4/collect/collectshop', [
			'ru_id' => 4,
		], [
			'token' => env('USER_TOKEN'),
		]
		);

		$res = json_decode($response->getContent(), true);
		$this->assertArraySubset(['status' => 'success'], $res);

	}
	/**
	 * 测试关注商品列表
	 */
	public function testGoodsList() {
		$path = [
			'page' => 1,
			'size' => 10,
		];

        $token = [
            'token' => env('USER_TOKEN')
        ];
		$response = $this->getJson('/api/v4/collect/goods?' . http_build_query($path), $token);
		
		$res = json_decode($response->getContent(), true);
		$this->assertArraySubset(['status' => 'success'], $res);

	}

	/**
	 * 测试关注商品/取消关注商品
	 */
	public function testCollectGoods() {
		$response = $this->post('/api/v4/collect/collectgoods', [
			'goods_id' => 719,
		], [
			'token' => env('USER_TOKEN'),
		]
		);
		$res = json_decode($response->getContent(), true);

		$this->assertArraySubset(['status' => 'success'], $res);

	}

}
