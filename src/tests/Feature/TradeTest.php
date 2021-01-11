<?php

namespace Tests\Feature;

use Tests\TestCase;

class TradeTest extends TestCase {

    /**
     * 订单确认信息
     */
    public function testOrderInfo()
    {
        $response = $this->postJson('/api/v4/trade/orderinfo', [

        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 使用优惠券
     */
    public function testChangeCou()
    {
    	$a = [];//就是total里面的所有数据
    	$a['goods_price'] = 248;
    	$a['shipping_fee'] = 34;
        $response = $this->postJson('/api/v4/trade/changecou', [
        	'uc_id' => 43,
        	'total' => $a
        ]);

        $this->assertContains('success', $response->getContent());
    }

    /**
     * 使用积分
     */
    public function testChangeInt()
    {
    	$a = [];//就是total里面的所有数据
    	$a['goods_price'] = 248;
    	$a['shipping_fee'] = 34;
        $response = $this->postJson('/api/v4/trade/changeint', [
        	'integral' => 43,
        	'total' => $a
        ]);

        $this->assertContains('success', $response->getContent());
    }
}
