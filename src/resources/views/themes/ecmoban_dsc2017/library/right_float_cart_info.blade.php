<div class="tbar-panel-main" ectype="tbpl-main">
    <div class="ibar_plugin_content">
        <div class="tbar-panel-content" data-height="128" ectype="tbpl-content">
        <div class="ibar_cart_group ibar_cart_product">
        
@if($cart_info['goods_list_count']>0)

            <ul>
                
@foreach($cart_info['goods_list'] as $goods)

                <li class="cart_item 
@if($loop->last)
last
@endif
">
                    <div class="cart_item_pic">
                        <a href="{{ $goods['url'] }}"><img src="{{ $goods['goods_thumb'] }}"></a>
                    </div>
                    <div class="cart_item_desc">
                        <a class="cart_item_name" href="{{ $goods['url'] }}">{{ $goods['goods_name'] }}</a>
                        <div class="lie">
                            <div class="cart_item_price"><span class="cart_price">{{ $goods['goods_price'] }}</span></div>
                            <div class="delete_cart"><a href="javascript:deleteCartGoods({{ $goods['rec_id'] }},1);">{{ $lang['drop'] }}</a></div>
                        </div>
                        <div class="p-number">
                            <a href="javascript:void(0);" onclick="changenum({{ $goods['rec_id'] }}, -1, {{ $goods['warehouse_id'] }}, {{ $goods['area_id'] }})" class="count-remove"><em class="iconfont icon-reduce"></em></a>
                            <span class="num" ectype="goods_number_{{ $goods['rec_id'] }}">{{ $goods['goods_number'] ?? 1 }}</span>
                            <a href="javascript:void(0);" id="min_number" onclick="changenum({{ $goods['rec_id'] }},1, {{ $goods['warehouse_id'] }}, {{ $goods['area_id'] }})" class="count-add"><em class="iconfont icon-dsc-plus"></em></a>
                        </div>
                    </div>
                </li>
                
@endforeach

            </ul>
        
@else

            <div class="ecs-tbar-tipbox2">
                <div class="tip-inner">
                    <b class="b-face-fd"></b>
                    <div class="tip-text">{{ $lang['cart_empty_to'] }}<br><a href="{{ $urlHtml['index'] }}">{{ $lang['home_see'] }}</a></div>
                </div>
            </div>
        
@endif

        </div>
        </div>
        <div class="cart_handler">
            <div class="cart_handler_header">
                <span class="cart_handler_left">{{ $lang['total'] }}<span class="cart_num red">{{ $cart_info['number'] }}</span>{{ $lang['jian_goods'] }}</span>
                <span class="cart_handler_right" ectype="cart_amount">{{ $cart_info['amount'] }}</span>
            </div>
            <a target="_blank" class="cart_go_btn" href="{{ $urlHtml['flow'] }}">{{ $cart_pay_go }}</a>
        </div>
    </div>
</div>
