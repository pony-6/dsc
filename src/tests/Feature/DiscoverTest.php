<?php

namespace Tests\Feature;

use Tests\TestCase;

class DiscoverTest extends TestCase
{

    /**
     * 发帖
     */
    public function testShow()
    {
        $response = $this->postJson('/api/v4/discover/show', [
            'goods_id' => 904,//商品ID

        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 发帖
     */
    public function testCreate()
    {
        $response = $this->postJson('/api/v4/discover/create', [
            'goods_id' => 904,//商品ID
            'dis_type' => 1,//状态
            'title' => 1,//标题
            'content' => 'aefjjalkalksalk',//内容

        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 首页
     */
    public function testIndex()
    {
        $response = $this->postJson('/api/v4/discover/', [

        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 列表
     */
    public function testList()
    {
        $response = $this->postJson('/api/v4/discover/list', [
            'dis_type' => 'all',//状态
            'page' => 1,
            'size' => 10,
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 详情
     */
    public function testDetail()
    {
        $response = $this->postJson('/api/v4/discover/detail', [
            'dis_type' => 1,//状态
            'dis_id' => 8,
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 列表
     */
    public function testCommentList()
    {
        $response = $this->postJson('/api/v4/discover/commentlist', [
            'dis_type' => 1,//状态
            'id' => 8,
            'goods_id' => 0,
            'page' => 1,
            'size' => 10,
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 提交评论
     */
    public function testComment()
    {
        $response = $this->postJson('/api/v4/discover/comment', [
            'dis_type' => 1,//状态
            'parent_id' => 0,
            'quote_id' => 0,//状态
            'dis_text' => '56a4sd5sacad',
            'reply_type' => 1,//状态
            'goods_id' => 0,
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 我的帖子
     */
    public function testMy()
    {
        $response = $this->postJson('/api/v4/discover/my', [
            'dis_type' => 1,//状态
            'page' => 1,
            'size' => 10,
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 回复我的
     */
    public function testReply()
    {
        $response = $this->postJson('/api/v4/discover/reply', [
            'page' => 1,
            'size' => 10,
        ]);

        $this->assertContains('success', $response->getContent());
    }
}
