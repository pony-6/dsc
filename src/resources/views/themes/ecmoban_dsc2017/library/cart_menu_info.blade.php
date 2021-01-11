<div class="ecsc-icon">
    <i class="ecsc-left"></i>
    <i class="ecsc-right">></i>
    <i class="ecsc-count cart_num">{{ $str }}</i>
    <a target="_blank" href="flow.php">{{ $lang['cat_list'] }}</a>
</div>

@if($goods)

<div class="ecscup-content">
    <div class="ecscmc">
        <ul>
        	
@foreach($goods as $goods)

            <li>
                <div class="ecsc-img"><a href="{{ $goods['url'] }}" target="_blank"><img src="{{ $goods['goods_thumb'] }}" /></a></div>
                <div class="ecsc-way">
                    <a href="{{ $goods['url'] }}" target="_blank" class="title">{{ $goods['short_name'] }}</a>
                    <div class="deal">
                        <div class="count">
                            <a href="javascript:void(0);" class="count-subtract ecsc-minusOff"><s></s></a><span class="num">{{ $goods['goods_number'] ?? 1 }}</span><a href="javascript:void(0);" class="count-add"><s></s><b></b></a>
                        </div>
                        <div class="price">{{ $goods['goods_price'] }}</div>
                        <a href="javascript:void(0);" onClick="deleteCartGoods({{ $goods['rec_id'] }})" class="close">{{ $lang['drop'] }}</a>
                    </div>
                </div>
            </li>
            
@endforeach

        </ul>
    </div>
    <div class="ecscmb">
        <div class="total"><span class="total-num cart_num">{{ $str }}</span>{{ $lang['piece_total'] }}：<span class="total-price">{{ $cart_info['amount'] }}</span></div>
        <a href="flow.php" target="_blank" class="ecsc-cart">{{ $lang['go_to_cart'] }} <i class="ecsc-right">></i></a>
    </div>
</div>

@endif


<script type="text/javascript">
function deleteCartGoods(rec_id)
{
    var is_jsonp = $("#is_jsonp").val();

    if (is_jsonp == 1)
    {
        Ajax.call('crossDomain?act=delete_cart', 'id=' + rec_id, deleteCartGoodsResponse, 'GET','JSON');    
    }
    else
    {
        Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'GET', 'JSON');
    }
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
	  $("#ECS_CARTINFO").html(res.content);
	  $(".cart_num").html(res.cart_num);
  }
}
</script>