
<div class="shopCart-con dsc-cm">
    <a href="wholesale_flow.php">
        <i class="iconfont icon-carts"></i>
        <span>{{ $lang['my_import_bill'] }}</span>
        <em class="count cart_num">{{ $str }}</em>
    </a>
</div>
<div class="dorpdown-layer" ectype="dorpdownLayer">
    
@if($goods)

    <div class="settleup-content">
        <div class="mc">
            <ul>
                
@foreach($goods as $goods)

                <li>		
                    <div class="p-img"><a href="{{ $goods['url'] }}" target="_blank"><img src="{{ $goods['goods_thumb'] }}" width="50" height="50" /></a></div>
                    <div class="p-lie">
                    	<div class="p-name"><a href="{{ $goods['url'] }}" target="_blank" title="{{ $goods['goods_name'] }}">{{ $goods['goods_name'] }}</a></div>
                    	<div class="p-attr">
                            
@foreach($goods['goods_attr'] as $attr)

                            <span class="specItem">{{ $lang['specification'] }}:</span>
                            <span class="specItem lastItem">{{ $attr['attr_value'] }}</span>
                            
@endforeach

                        </div>
                    </div>
                    <div class="p-price">{{ $goods['goods_price'] }}{{ $lang['yuan'] }}&nbsp;×&nbsp;{{ $goods['goods_number'] }}</div>
                    <div class="p-oper">
                        <a href="javascript:void(0);" onClick="deleteCartGoods({{ $goods['rec_id'] }},0)" class="remove">{{ $lang['drop'] }}</a>
                    </div>
                </li>
                
@endforeach

            </ul>
        </div>
        <div class="mb">
            <a href="wholesale_flow.php" class="btn-cart">{{ $lang['view_import_bill'] }}</a>
        </div>
    </div>
    
@else

    <div class="prompt"><div class="nogoods"><b></b><span>{{ $lang['goods_null_cart'] }}</span></div></div>
    
@endif

</div>

<script type="text/javascript">
function deleteCartGoods(rec_id,index)
{
    Ajax.call('delete_wholesale_cart_goods.php', 'id='+rec_id+'&index='+index, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    pbDialog(res.err_msg,"",0);
  }
  else if(res.index==1)
  {
    Ajax.call('get_ajax_content.php?act=get_content', 'data_type=cart_list', return_cart_list, 'POST', 'JSON');
  }
  else
  {
        $("#ECS_WHOLESALE_CARTINFO").html(res.content);
        $(".cart_num").html(res.cart_num);
		location.reload();
  }
}

function return_cart_list(result)
{
    $(".cart_num").html(result.cart_num);
    $(".pop_panel").html(result.content);
	
}
</script>