<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentTest extends TestCase
{

    /**
     * 商品评论数量
     */
    public function testTitle()
    {
        $response = $this->postJson('/api/v4/comment/title', [
            'goods_id' => '904'
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 商品评论页
     */
    public function testAddcomment()
    {
        $response = $this->postJson('/api/v4/comment/addcomment', [
            'rec_id' => '6'
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 商品评论
     */
    public function testGoods()
    {
        $response = $this->postJson('/api/v4/comment/goods', [
            'goods_id' => '904',
            'rank' => 'img',
            'page' => 1,
            'size' => 10
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

}
