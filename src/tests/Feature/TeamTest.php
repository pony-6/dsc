<?php

namespace Tests\Feature;

use Tests\TestCase;

class TeamTest extends TestCase
{
    /**
     * 拼团首页广告位
     */
    public function testList()
    {
    	$response = $this->getJson('/api/v4/team');

    	$res = json_decode($response->getContent(), true); 
    	
        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     * 拼团首页商品列表,频道商品列表
     */
    public function testGoods()
    { 
        $path = [
            'tc_id' => 1,
            'page' => 1,
            'size' => 10 
        ];
    	$response = $this->getJson('/api/v4/team/goods?' .http_build_query($path));
    	
    	$res = json_decode($response->getContent(), true);
    	
        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 拼团频道页面
     */
    public function testCategories()
    {    	 
    	$path = [
            'tc_id' => 1
        ];
    	$response = $this->getJson('/api/v4/team/categories?' .http_build_query($path));
    	
    	$res = json_decode($response->getContent(), true);
    	
        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 下单提示轮播
     */
    public function testVirtualOrder()
    {        
        $token = [
            'token' => env('USER_TOKEN')
        ];
        $response = $this->getJson('/api/v4/team/virtual_order', $token);
        
        $res = json_decode($response->getContent(), true);
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     * 拼团子频道商品列表
     */
    public function testGoodsList()
    {    	 
    	$path = [
            'tc_id' => 7,
            'keyword' => '', //阿迪达斯男鞋
            'sort_key' => 0, //排序方式 0默认，1新品，2销量，3价格
            'sort_value' => 'DESC', //排序 ASC  DESC
            'page' => 1,
            'size' => 10 
        ];
    	$response = $this->getJson('/api/v4/team/goods_list?' .http_build_query($path));
    	$res = json_decode($response->getContent(), true);
    	
        $this->assertArraySubset(['status' => 'success'], $res);
    }



    /**
     * 拼团排行
     */
    public function testTeamRanking()
    {    
        $path = [
            'status' => 0, //0热门，1新品，2优选，3精品
            'page' => 1,
            'size' => 10 
        ];
    	$response = $this->getJson('/api/v4/team/team_ranking?' .http_build_query($path));
    	$res = json_decode($response->getContent(), true);    	
    	
        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     * 拼团商品详情
     */
    public function testDetail()
    {
        $path = [
            'goods_id' => 903,
            'team_id' => 0  
        ];

        $token = [
            'token' => env('USER_TOKEN')
        ];
    	$response = $this->getJson('/api/v4/team/detail?' .http_build_query($path), $token);
    	$res = json_decode($response->getContent(), true);
    	
        $this->assertArraySubset(['status' => 'success'], $res);
    }


     /**
     * 商品改变属性、数量时重新计算商品价格
     */
    public function testProperty()
    {    
        $path = [
            'goods_id' => 903,
            'num' => 1,
            'attr_id' => [ 
                733,735
            ],
            'warehouse_id' => 0,
            'area_id' => 0
        ];
    	$response = $this->getJson('/api/v4/team/property?'.http_build_query($path));
    	$res = json_decode($response->getContent(), true);
    	
        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 加入购物车
     */
    public function testTeamBuy()
    {    
        $path = [
            'goods_id' => 903,
            'num' => 1,
            'attr_id' => [
                733,735
            ],
            't_id' => 3,  
            'team_id' => 0
        ];

        $token = [
            'token' => env('USER_TOKEN')
        ];
    	$response = $this->getJson('/api/v4/team/team_buy?' .http_build_query($path), $token);
    	$res = json_decode($response->getContent(), true);
    	
        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 等待成团
     */
    public function testTeamWait()
    {  
        $path = [
            'team_id' => 1,
            'user_id' => 60
        ];

        $token = [
            'token' => env('USER_TOKEN')
        ];
    	$response = $this->getJson('/api/v4/team/team_wait?' .http_build_query($path), $token);

    	$res = json_decode($response->getContent(), true);
    	
        $this->assertArraySubset(['status' => 'success'], $res);
    }


     /**
     * 拼团成员
     */
    public function testTeamUser()
    {    
        $path = [
            'team_id' => 1
        ];
    	$response = $this->getJson('/api/v4/team/team_user?' .http_build_query($path));
    	$res = json_decode($response->getContent(), true);
    	
        $this->assertArraySubset(['status' => 'success'], $res);
    }

     /**
     * 我的拼团
     */
    public function testTeateamOrder()
    { 
        $path = [
            'status' => 0, // 0 拼团中，1成功团，2失败团 
            'page' => 1,
            'size' => 10 
        ];

        $token = [
            'token' => env('USER_TOKEN')
        ];        
    	$response = $this->getJson('/api/v4/team/team_order?' .http_build_query($path), $token);

    	$res = json_decode($response->getContent(), true);
    	
        $this->assertArraySubset(['status' => 'success'], $res);
    }


}
