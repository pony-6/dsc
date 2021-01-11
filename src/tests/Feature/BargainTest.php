<?php

namespace Tests\Feature;

use Tests\TestCase;

class BargainTest extends TestCase
{
    /**
     *  砍价 -- 首页
     */
    public function testIndex()
    {
    	$response = $this->getJson('/api/v4/bargain');

    	$res = json_decode($response->getContent(), true); 
    	
        $this->assertArraySubset(['status' => 'success'], $res);
    }



    /**
     *  砍价 -- 商品列表
     */
    public function testGoods()
    {
        $path =[
            'page' => 1,
            'size' => 10 
        ];

        $token = [
            'token' => env('USER_TOKEN')
        ];

        $response = $this->getJson('/api/v4/bargain/goods?' .http_build_query($path), $token);

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }

     
    /**
     *  砍价 -- 商品详情
     */
    public function testDetail()
    {
        $path = [
            'id' => 7,      //砍价活动id
            'bs_id' => 0   //参与砍价id
        ];

        $token = [
            'token' => env('USER_TOKEN')
        ];
        $response = $this->getJson('/api/v4/bargain/detail?' .http_build_query($path), $token);

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     *  砍价 -- 改变属性、数量时重新计算商品价格
     */
    public function testProperty()
    {
        $path = [
            'id' => 7,
            'num' => 1,
            'attr_id' => [ 
                729,731
            ],
            'warehouse_id' => 0,
            'area_id' => 0
        ];
        $response = $this->getJson('/api/v4/bargain/property?' .http_build_query($path));

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     *  砍价 -- 记录
     */
    public function testLog()
    {
        $path = [
            'id' => 7,
            'num' => 1,
            'attr_id' => [ 
                729,731
            ],
            'warehouse_id' => 0,
            'area_id' => 0
        ];

        $token = [
            'token' => env('USER_TOKEN')
        ];
        $response = $this->getJson('/api/v4/bargain/log?' .http_build_query($path), $token);

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     *  砍价 -- 砍价
     */
    public function testBid()
    {
        $path = [
            'id' => 7,
            'bs_id' => 1
        ];

        $token = [
            'token' => env('USER_TOKEN')
        ];

        $response = $this->getJson('/api/v4/bargain/bid?' .http_build_query($path), $token);

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     *  砍价 -- 购买
     */
    public function testBuy()
    {
        $path = [
            'id' => 7,
            'bs_id' => 1,
            'num' => 1,
            'goods_id' => 902
        ];

        $token = [
            'token' => env('USER_TOKEN')
        ];
        $response = $this->getJson('/api/v4/bargain/buy?' .http_build_query($path), $token);

        $res = json_decode($response->getContent(), true); 

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     *  砍价 -- 我参与的砍价
     */
    public function testMyBuy()
    {
        $path = [
            'page' => 1,
            'size' => 10 
        ];

        $token = [
            'token' => env('USER_TOKEN')
        ];
        $response = $this->getJson('/api/v4/bargain/my_buy?' .http_build_query($path), $token);

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }







}
