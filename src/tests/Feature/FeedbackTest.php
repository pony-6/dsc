<?php

namespace Tests\Feature;

use Tests\TestCase;

class FeedbackTest extends TestCase {
	/**
	 * 留言列表
	 */
	public function testIndex() {
	
		$path = [
			'page' => 1,
			'size' => 10,
		];
		$response = $this->get('/api/v4/feedback/?'. http_build_query($path), [
			'token' => env('USER_TOKEN'),
		]
		);

		$res = json_decode($response->getContent(), true);
		
		$this->assertArraySubset(['status' => 'success'], $res);

	}

	/**
	 * 提交留言
	 */
	public function testCreate() {
		$response = $this->post('/api/v4/feedback/create', [
			'msg_title' => '这只是一个留言',
		], [
			'token' => env('USER_TOKEN'),
		]
		);

		$res = json_decode($response->getContent(), true);
		$this->assertArraySubset(['status' => 'success'], $res);

	}

}
