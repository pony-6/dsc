
<div class="shopCart-con dsc-cm">
	<a href="{{ $urlHtml['flow'] }}">
		<i class="iconfont icon-carts"></i>
		<span>{{ $lang['my_cart'] }}</span>
		<em class="count cart_num"></em>
	</a>
</div>
<div class="dorpdown-layer" ectype="dorpdownLayer">
    
@if($goods)

    <div class="settleup-content">
        <div class="mc">
            <ul>
                
@foreach($goods as $goods)

                <li>		
                    
@if($goods['rec_id'] > 0)

					
@if($goods['extension_code'] == 'package_buy')

                    <div class="p-img"><a href="javascript:void(0);"  target="_blank"><img src="{{ $goods['goods_thumb'] }}" width="50" height="50" /></a></div>
					
@else

					<div class="p-img"><a href="{{ $goods['url'] }}"  target="_blank"><img src="{{ $goods['goods_thumb'] }}" width="50" height="50" /></a></div>
					
@endif

                    
@endif

                    
@if($goods['rec_id'] > 0 && $goods['extension_code'] == 'package_buy')

                    <div class="p-name"><a href="javascript:void(0);">{{ $goods['short_name'] }}<span style="color:#FF0000">（{{ $lang['remark_package'] }}）</span></a></div>
                    
@elseif ($goods['rec_id'] > 0 && $goods['is_gift'] != 0)

                    <div class="p-name"><a href="javascript:void(0);">{{ $goods['short_name'] }}<span style="color:#FF0000">（{{ $lang['largess'] }}）</span></a></div>
                    
@else

                    <div class="p-name"><a href="{{ $goods['url'] }}" target="_blank" title="{{ $goods['short_name'] }}">{{ $goods['short_name'] }}</a></div>
                    
@endif

                    <div class="p-number">
                        <span class="num" id="goods_number_{{ $goods['rec_id'] }}">{{ $goods['goods_number'] ?? 1 }}</span>
                        <div class="count">
                            <a href="javascript:void(0);"  id="min_number" onclick="changenum({{ $goods['rec_id'] }},1, {{ $goods['warehouse_id'] }}, {{ $goods['area_id'] }})" class="count-add"><i class="iconfont icon-up"></i></a>
                            <a href="javascript:void(0);" onclick="changenum({{ $goods['rec_id'] }}, -1, {{ $goods['warehouse_id'] }}, {{ $goods['area_id'] }})" class="count-remove"><i class="iconfont icon-down"></i></a>
                        </div>
                    </div>
                    <div class="p-oper">
                        <div class="price">{{ $goods['goods_price'] }}</div>
                        <a href="javascript:void(0);" onClick="deleteCartGoods({{ $goods['rec_id'] }},0)" class="remove">{{ $lang['drop'] }}</a>
                    </div>
                </li>
                
@endforeach

            </ul>
        </div>
        <div class="mb">
            <input name="cart_value" id="cart_value" value="{{ $cart_value }}" type="hidden" />
            <div class="p-total">共{{ $str }}件商品&nbsp;&nbsp;共计：{{ $cart_info['amount'] }}</div>
            <a href="{{ $urlHtml['flow'] }}" class="btn-cart">{{ $lang['go_to_cart'] }}</a>
        </div>
    </div>
    
@else

    <div class="prompt"><div class="nogoods"><b></b><span>{{ $lang['goods_null_cart'] }}</span></div></div>
    
@endif

</div>

<script type="text/javascript">
$(function (){
    cart_number();
});

function changenum(rec_id, diff, warehouse_id, area_id)
{
	var cValue = $('#cart_value').val();
    var goods_number =Number($('#goods_number_' + rec_id).text()) + Number(diff);
 
	if(goods_number < 1)
	{
		return false;	
	}
	else
	{
		change_goods_number(rec_id,goods_number, warehouse_id, area_id, cValue);
	}
}
function change_goods_number(rec_id, goods_number, warehouse_id, area_id, cValue)
{
	if(cValue != '' || cValue == 'undefined'){
	   var cValue = $('#cart_value').val(); 
	}   

    var domainUrl;
    var is_jsonp = $("#is_jsonp").val();

    if(is_jsonp == 1){
        domainUrl = 'crossDomain?act=ajax_update_cart';
    }else{
        domainUrl = 'ajax_flow_goods.php?step=ajax_update_cart';
    }

	Ajax.call(domainUrl, 'rec_id=' + rec_id +'&goods_number=' + goods_number +'&cValue=' + cValue +'&warehouse_id=' + warehouse_id +'&area_id=' + area_id, change_goods_number_response, 'POST','JSON');                
}
function change_goods_number_response(result)
{    
	var rec_id = result.rec_id;           
    if (result.error == 0)
    {
       $('#goods_number_' +rec_id).val(result.goods_number);//更新数量
       $('*[ectype="goods_number_'+rec_id+'"]').html(result.goods_number);//更新侧边栏数量

       $('#goods_subtotal_' +rec_id).html(result.goods_subtotal);//更新小计
       $('*[ectype="cart_amount"]').html(result.goods_amount_fromated);//更新侧边小计
       if (result.goods_number <= 0)
        {
			//数量为零则隐藏所在行
            $('#tr_goods_' +rec_id).style.display = 'none';
            $('#tr_goods_' +rec_id).innerHTML = '';
        }
        $('#total_desc').html(result.flow_info);//更新合计
        if($('ECS_CARTINFO'))
        {//更新购物车数量
            $('#ECS_CARTINFO').html(result.cart_info);
        }

		if(result.group.length > 0){
			for(var i=0; i<result.group.length; i++){
				$("#" + result.group[i].rec_group).html(result.group[i].rec_group_number);//配件商品数量
				$("#" + result.group[i].rec_group_talId).html(result.group[i].rec_group_subtotal);//配件商品金额
			}
		}

		$("#goods_price_" + rec_id).html(result.goods_price);
		$(".cart_num").html(result.subtotal_number);
	}
	else if (result.message != '')
	{
		$('#goods_number_' +rec_id).val(result.cart_Num);//更新数量
		alert(result.message);
	}                
}

function deleteCartGoods(rec_id,index)
{
    var is_jsonp = $("#is_jsonp").val();

    if (is_jsonp == 1)
    {
        Ajax.call('crossDomain?act=delete_cart', 'id=' + rec_id + '&index='+index, deleteCartGoodsResponse, 'GET','JSON');    
    }
    else
    {
        Ajax.call('delete_cart_goods.php', 'id='+rec_id+'&index='+index, deleteCartGoodsResponse, 'GET', 'JSON');
    }
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error > 0)
  {
    alert(res.err_msg);
  }
  else if(res.index==1)
  {
      var is_jsonp = $("#is_jsonp").val();
      var urlDomain;

      if (is_jsonp == 1) {
          urlDomain = 'crossDomain?act=get_content';
      } else {
          urlDomain = 'get_ajax_content.php?act=get_content';
      }
	  Ajax.call(urlDomain, 'data_type=cart_list', return_cart_list, 'POST', 'JSON');
  }
  else
  {
	  $("#ECS_CARTINFO").html(res.content);
	  $(".cart_num").html(res.cart_num);
  }
}

function return_cart_list(result)
{
	$(".cart_num").html(result.cart_num);
	$(".pop_panel").html(result.content);
	tbplHeigth();
}

function cart_number()
{
    var is_jsonp = $("#is_jsonp").val();

    if (is_jsonp == 1)
    {
        Ajax.call('crossDomain?act=cart_number', '', cartNumberResponse, 'GET','JSON');    
    }
    else
    {
        Ajax.call('ajax_cart.php?act=cart_number', '', cartNumberResponse, 'GET','JSON');        
    }
}

function cartNumberResponse(result){
    $('.cart_num').html(result.number);
}
</script>