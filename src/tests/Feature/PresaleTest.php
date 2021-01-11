<?php

namespace Tests\Feature;

use Tests\TestCase;

class PresaleTest extends TestCase
{
    /**
     * 预售聚合页
     */
    public function testIndex()
    {    

        $response = $this->getJson('/api/v4/presale', [
            'token' => env('USER_TOKEN') 
        ]);        

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 预售列表页面
     */
    public function testList()
    {
        $arg = http_build_query([
            'page' => 2,
            'cat_id' => 21,
        ]);

        $response = $this->getJson('/api/v4/presale/list?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);       

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 预售商品详情
     */
    public function testDetail()
    {
        $arg = http_build_query([
            'act_id' => 2,
        ]);

        $response = $this->get('/api/v4/presale/detail?'. $arg, [
            'token' => env('USER_TOKEN') 
        ]);         
        
        $res = json_decode($response->getContent(), true);
         
        $this->assertContains('success', $res);
    }

    /**
     * 价格
     */
    public function testPrice()
    {
        $arg = http_build_query([
            'gid' => 937,
            'number' => 1,
            'act_id' => 2,
            'attr' => '',
            'onload' => 0,
        ]);

        $response = $this->getJson('/api/v4/presale/price?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);        
        
        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }

    /**
     * 商品购买
     */
    public function testBuy()
    {
        $arg = http_build_query([
            'act_id' => 2,
            'number' => 1,
            'uid' => 0,
        ]);

        $response = $this->getJson('/api/v4/presale/buy?'. $arg, [
            'token' => env('USER_TOKEN')
        ]);         

        $res = json_decode($response->getContent(), true);

        $this->assertArraySubset(['status' => 'success'], $res);
    }
}
