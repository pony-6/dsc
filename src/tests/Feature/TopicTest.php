<?php

namespace Tests\Feature;

use Tests\TestCase;

class TopicTest extends TestCase {

	/**
	 * 测试专题列表
	 */
	public function testTopicList() {
		$path = [
			'page' => 1,
			'size' => 10,
		];

		$token = [
			'token' => env('USER_TOKEN')
		];
		$response = $this->getJson('/api/v4/topic/?' . http_build_query($path),$token);		
		$res = json_decode($response->getContent(), true);

		$this->assertArraySubset(['status' => 'success'], $res);

	}

}
