<?php

namespace Tests\Feature;

use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * 文章评论列表
     */
    public function testCommentlist()
    {
        $path = [
            'article_id' => 65,  //文章id
            'page' => 1,
            'size' => 10,
        ];

        $response = $this->get('/api/v4/article/commentlist?' .http_build_query($path));

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 点赞
     */
    public function testLike()
    {
        $path = [
            'article_id' => 65
        ];
        $response = $this->get('/api/v4/article/like?' .http_build_query($path));

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 列表
     */
    public function testIndex()
    {
        $response = $this->get('/api/v4/article');

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 详情
     */
    public function testshow()
    {
        $response = $this->get('/api/v4/article/7', [
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 列表信息
     */
    public function testcategory()
    {
        $response = $this->post('/api/v4/article/category', [
            'category_id' => 4
        ]);

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }
}
