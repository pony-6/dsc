<?php

namespace Tests\Feature;

use Tests\TestCase;

class CrowdTest extends TestCase
{
    /**
     *  众筹 -- 首页
     */
    public function testIndex()
    {
        
    	$response = $this->getJson('/api/v4/crowd_funding');

    	$res = json_decode($response->getContent(), true); 
    	
        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     *  众筹 -- 列表
     */
    public function testGoods()
    {
        $path =[
            'status' => 'id', // 综合排序  id(项目id)  new(最新上线)  amount（金额最多） join_num（支持最多）
            'cat_id' => 0,    // 分类id
            'keyword' => '',  // 想和影子玩拳击么
            'page' => 1,
            'size' => 10 

        ];
        $response = $this->getJson('/api/v4/crowd_funding/goods?' .http_build_query($path));

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }



    /**
     *  众筹  --  详情
     */
    public function testShow()
    {
        $path =[
            'id' => 4
        ];

        $token = [
            'token' => env('USER_TOKEN')
        ];

        $response = $this->getJson('/api/v4/crowd_funding/show?' .http_build_query($path), $token);

        $res = json_decode($response->getContent(), true); 

        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     *  众筹  --  关注
     */
    public function testFocus()
    {
        $path =[
            'id' => 4
        ];    
        $token = [
            'token' => env('USER_TOKEN')
        ];    

        $response = $this->getJson('/api/v4/crowd_funding/focus?' .http_build_query($path), $token);

        $res = json_decode($response->getContent(), true); 

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     *  众筹  --  发布话题
     */
    public function testTopic()
    {
        $path =[
            'id' => 4,
            'topic_id' => 0,
            'content' => '' // 真的很喜欢,物美价廉 
        ];    
        $token = [
            'token' => env('USER_TOKEN')
        ];    

        $response = $this->postJson('/api/v4/crowd_funding/topic', $path, $token);

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }


     /**
     *  众筹  --  选择方案
     */
    public function testProperty()
    {
        $path =[
            'pid' => 4,
            'id' => 2,
            'number' => 1 
        ];        

        $response = $this->getJson('/api/v4/crowd_funding/property?' .http_build_query($path));

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     *  众筹  --  众筹描述
     */
    public function testProperties()
    {
        $path =[
            'id' => 4
        ];        

        $response = $this->getJson('/api/v4/crowd_funding/properties?' .http_build_query($path));

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }
    

    /**
     *  众筹  --  话题
     */
    public function testTopicList()
    {
        $path =[
            'id' => 4,
            'page' => 1,
            'size' => 10 
        ];        

        $response = $this->getJson('/api/v4/crowd_funding/topic_list?' .http_build_query($path));

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     *  众筹  --  订单确认
     */
    public function testCheckout()
    {
        $path =[
            'pid' => 10, // 项目id
            'id' => 14,  // 方案id
            'number' => 1 // 购买数量
        ]; 
        $token = [
            'token' => env('USER_TOKEN')
        ];       

        $response = $this->getJson('/api/v4/crowd_funding/checkout?' .http_build_query($path), $token);

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     *  众筹  --  提交订单
     */
    public function testDone()
    {
        $path =[
            'pid' => 10, // 项目id
            'id' => 14,  // 方案id
            'number' => 1, // 购买数量
            'postscript' => '6666666', // 商家留言
            'pay_id' => 11,
        ]; 

        $token = [
            'token' => env('USER_TOKEN')
        ];       

        $response = $this->getJson('/api/v4/crowd_funding/done?' .http_build_query($path), $token);

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     *  众筹  --  众筹中心
     */
    public function testUser()
    {            
        $token = [
            'token' => env('USER_TOKEN')
        ];    

        $response = $this->getJson('/api/v4/crowd_funding/user', $token);

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }
     
    
    /**
     *  众筹  --  众筹中心项目推荐
     */
    public function testCrowdBest()
    {
        $path =[
            'page' => 1,
            'size' => 10 
        ];        

        $response = $this->getJson('/api/v4/crowd_funding/crowd_best?' .http_build_query($path));

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     *  众筹  --  我的关注
     */
    public function testMyFocus()
    {
        $path =[
            'status' => 0,  // 0全部  1进行中  2已完成
            'page' => 1,
            'size' => 10 
        ];        
        $token = [
            'token' => env('USER_TOKEN')
        ];
        $response = $this->getJson('/api/v4/crowd_funding/my_focus?' .http_build_query($path),$token);

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     *  众筹  --  我的支持
     */
    public function testCrowdBuy()
    {
        $path =[
            'status' => 0,  // 0全部  1进行中  2已完成
            'page' => 1,
            'size' => 10 
        ];        
        $token = [
            'token' => env('USER_TOKEN')
        ];
        $response = $this->getJson('/api/v4/crowd_funding/crowd_buy?' .http_build_query($path),$token);

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }


    /**
     *  众筹  --  我的订单
     */
    public function testOrder()
    {
        $path =[
            'status' => 0,  // 0全部  1待支付  2代发货 3待收货 4已完成
            'page' => 1,
            'size' => 10 
        ];        
        $token = [
            'token' => env('USER_TOKEN')
        ];
        $response = $this->getJson('/api/v4/crowd_funding/order?' .http_build_query($path),$token);

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     *  众筹  --  我的订单详情
     */
    public function testDetail()
    {
        $path = [
            'order_id' => 2,  // 订单id
        ];        
        $token = [
            'token' => env('USER_TOKEN')
        ];
        $response = $this->getJson('/api/v4/crowd_funding/detail?' . http_build_query($path), $token);

        $res = json_decode($response->getContent(), true); 
        
        $this->assertArraySubset(['status' => 'success'], $res);
    }






}
