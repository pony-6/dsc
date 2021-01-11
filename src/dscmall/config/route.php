<?php

/**
 * 小程序 app 客户端 链接
 */

return [
    // 文章
    'article' => [
		'index' => '/pagesC/article/index',
		'list' => '/pagesC/article/list?id=',
		'detail' => '/pagesC/article/detail/detail?id=',
    ],

    // 分类页
    'catalog' => [
		'index' => '/pages/category/category',
    ],

    // 商品
    'goods' => [
        'list' => '/pages/goodslist/goodslist?id=',
 		'detail' => '/pages/goodsDetail/goodsDetail?id=',
    ],

    // 秒杀
    'seckill' => [
		'index' => '/pagesA/seckill/seckill',
		'detail' => '/pagesA/seckill/detail/detail?seckill_id=',
    ],

    // 购物车
    'cart' => [
		'index' => '/pages/cart/cart',
    ],

    // 会员中心
    'user' => [
		'index' => '/pages/user/user',
        'collect_goods' => '/pagesB/collectionGoods/collectionGoods', // 收藏的商品
        'collect_shop' => '/pagesB/collectionShop/collectionShop', // 关注的店铺
        'history' => '/pagesB/history/history', // 浏览记录
        'affiliate' => '/pagesB/affiliate/affiliate', // 我的分享
    ],

    // 店铺街
    'shop' => [
        'index' => '/pages/integration/integration?type=2',
        'home' => '/pages/shop/shopHome/shopHome?ru_id=',
        'detail' => '/pages/shop/shopDetail/shopDetail?id=',
    ],

    // 品牌:
    'brand' => [
        'index' => '/pagesC/brand/brand',
        'list' => '/pagesC/brand/list/list',
        'detail' => '/pagesC/brand/detail/detail?id=',
    ],

    // 社区圈子:
    'discover' => [
		'index' => '',
        //'index' => '/pages/discover/discover',
    ],

    // 预售:
    'presale' => [
        'index' => '/pagesA/presale/presale',
        'list' => '/pagesA/list/list?cat_id=',
        'detail' => '/pagesA/presale/detail/detail?act_id=',
    ],

    // 团购:
    'groupbuy' => [
		'index' => '/pagesA/groupbuy/groupbuy',
        'detail' => '/pagesA/groupbuy/detail/detail?id=',
    ],

    // 积分商城:
    'exchange' => [
		'index' => '/pagesA/exchange/exchange',
        'detail' => '/pagesA/exchange/detail/detail?id=',
    ],

    // 专题列表:
    'topic' => [
        'index' => '/pagesA/topic/topic',
        'detail' => '/pagesA/topic/detail/detail?id=',
    ],

    // 优惠活动:
    'activity' => [
		'index' => '/pages/integration/integration?type=3',
        'detail' => '/pages/activity/detail/detail?act_id=',
    ],

    // 礼品卡:
    'giftcard' => [
        'index' => '/pagesA/giftcard/giftcard',
        'order' => '/pagesA/giftcard/order/order', // 我的提货
    ],

    // 拍卖活动:
    'auction' => [
		'index' => '/pagesA/auction/auction',
        'detail' => '/pagesA/auction/detail/detail?act_id=',
    ],

    // 超值礼包:
    'package' => [
		'index' => '/pagesA/package/package',
    ],

    // 微筹
    'crowdfunding' => [
        'index' => '/pagesA/crowdfunding/crowd', // 微筹广场
    ],

    // 分销
    'drp' => [
        'index' => '/pagesA/drp/drp',
    ],

    // 拼团:
    'team' => [
		'index' => '/pagesA/team/team',
    ],

    // 砍价:
    'bargain' => [
        'index' => '/pagesA/bargain/bargain',
    ],

    // 店铺入驻
    'merchants' => [
        'index' => '/pagesB/merchants/merchants',
    ],
];
