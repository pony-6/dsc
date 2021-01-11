<?php

namespace Tests\Feature;

use Tests\TestCase;

class InviteTest extends TestCase {

	/**
	 * 测试邀请信息
	 */
	public function testinvite() {
		$path = [
			'page' => 1,
			'size' => 10,
		];
        $token = [
            'token' => env('USER_TOKEN')
        ];
		$response = $this->getJson('/api/v4/invite?'. http_build_query($path), $token);

		$res = json_decode($response->getContent(), true);
	
		$this->assertArraySubset(['status' => 'success'], $res);

	}
}
