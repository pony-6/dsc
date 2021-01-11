<?php

namespace Tests\Feature;

use Tests\TestCase;

class AuctionTest extends TestCase
{
    /**
     * 拍卖--列表
     */
    public function testList()
    {
        $path = [
            'page' => 1,
            'size' => 10,
            'sort' => 'act_id',     // 排序方式（act_id, start_time，end_time）
            'order' => 'desc',    // 排序（ads desc）
            'keyword' => '', // 222  111 大拍卖
        ];
        $token = [
            'token' => env('USER_TOKEN')
        ];
    	$response = $this->getJson('/api/v4/auction?' .http_build_query($path), $token);

    	$res = json_decode($response->getContent(), true); 
    	
        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 拍卖--详情
     */
    public function testDetail()
    {
        $path = [
            'id' => 44           
        ];
        $token = [
            'token' => env('USER_TOKEN')
        ];
        $response = $this->getJson('/api/v4/auction/detail?' .http_build_query($path), $token);

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 拍卖--记录
     */
    public function testLog()
    {
        $path = [
            'id' => 44           
        ];
        $token = [
            'token' => env('USER_TOKEN')
        ];
        $response = $this->getJson('/api/v4/auction/log?' .http_build_query($path), $token);

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     * 拍卖--出价
     */
    public function testBid()
    {
        $path = [
            'id' => 44,
            'price_times' => 2            
        ];
        $token = [
            'token' => env('USER_TOKEN')
        ];
        $response = $this->getJson('/api/v4/auction/bid?' .http_build_query($path), $token);

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }
   
    /**
     * 拍卖--购买
     */
    public function testBuy()
    {
        $path = [
            'id' => 43,                       
        ];
        $token = [
            'token' => env('USER_TOKEN')
        ];
        $response = $this->getJson('/api/v4/auction/buy?' .http_build_query($path), $token);

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }

}
