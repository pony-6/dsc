<div class="tbar-panel-main" ectype="tbpl-main">
    <div class="follow-tabnav">
        <ul>
            <li class="ui-switchable-item curr">
                <a href="javascript:void(0)">{{ $lang['goods'] }}</a>
                <span></span>
            </li>
            <li class="ui-switchable-item">
                <a href="javascript:void(0)">{{ $lang['seller_store'] }}</a>
            </li>
        </ul>
    </div>
    <div class="tbar-panel-content" ectype="tbpl-content">
        <div class="follow-tabcontents">
            <div class="follow-tab-content follow-product-list">
                <ul>

@foreach($goods_list as $goods)

                    <li class="fpl-item">
                        <a class="img-wrap" href="{{ $goods['url'] }}" target="_blank"><img src="{{ $goods['goods_thumb'] }}" width="100" height="100" /></a>
                        <a class="price" href="{{ $goods['url'] }}" target="_blank">
@if($goods['promote_price'])
{{ $goods['promote_price'] }}
@else
{{ $goods['shop_price'] }}
@endif
</a>
                        <a class="fpl-remove" href="javascript:deleteCollectGoods({{ $goods['rec_id'] }});"><b class="iconfont icon-remove-alt"></b></a>
                    </li>

@endforeach

                </ul>
                <a href="{{ url('/') }}/user_collect.php?act=collection_list" class="follow-bottom-more" target="_blank">{{ $More_attention_goods }} &gt;&gt;</a>
            </div>
            <div class="follow-tab-content follow-shop-list">
                <ul>

@foreach($store_list as $store)

                    <li class="fsl-item">
                        <div class="shop-logo"><a href="{{ $store['url'] }}" target="_blank"><img src="{{ $store['brand_thumb'] }}" /></a></div>
                        <div class="shop-info">
                            <div class="si-name"><a target="_blank" href="{{ $store['url'] }}">{{ $store['store_name'] }}</a></div>
                            <a href="{{ $store['url'] }}" target="_blank" class="si-button">{{ $lang['enter_the_shop'] }}</a>
                        </div>
                    </li>

@endforeach

                </ul>
                <a href="{{ url('/') }}/user_collect.php?act=store_list" class="follow-bottom-more" target="_blank">{{ $enter_shop_more }} &gt;&gt;</a>
            </div>
        </div>
    </div>
</div>
<script>
//商品收藏和店铺收藏切换
$(".tbar-panel-main").slide({titCell:".follow-tabnav li",mainCell:".follow-tabcontents",effect:"left",titOnClassName:"curr"});

function deleteCollectGoods(col_id)
{
    var urlDomain;
    var is_jsonp = $("#is_jsonp").val();
    if (is_jsonp == 1) {
        urlDomain = 'crossDomain?act=get_content';
    } else {
        urlDomain = 'get_ajax_content.php?act=get_content';
    }

    Ajax.call(urlDomain, 'data_type=mpbtn_collection&collection_id='+col_id+'&type=del', return_CollectGoods, 'GET', 'JSON');
}

function return_CollectGoods(result)
{
	$(".pop_panel").html(result.content);
	tbplHeigth();
}
</script>
