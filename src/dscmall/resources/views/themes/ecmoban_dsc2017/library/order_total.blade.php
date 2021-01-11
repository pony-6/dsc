
<div class="order-summary">
    <div class="statistic">
        <div class="list">
            <span><em>{{ $cart_goods_number }}</em> {{ $lang['cart_goods_number'] }}：</span>
            <em class="price" id="warePriceId">
            
@if($is_group_buy && $is_group_deposit == 1)
{{ $lang['gb_deposit'] }}
@endif

            {{ $total['goods_price_formated'] }}
            </em>
        </div>
        
@if($total['presale_price'] > 0)

        <div class="list">
             <span>{{ $lang['presale_deposit'] }}：</span>
             <em class="price" id="presale_price"> +{{ $total['formated_presale_price'] }}</em>
        </div>
        
@endif

        
@if($total['dis_amount'] > 0)

        <div class="list">
            <span>{{ $lang['dis_amount'] }}：</span>
            <em class="price" id="cachBackId"> -{{ $total['dis_amount_formated'] }}</em>
        </div>
        
@endif

        
@if($total['discount'] > 0)

        <div class="list">
            <span>{{ $lang['discount'] }}：</span>
            <em class="price" id="cachBackId"> -{{ $total['discount_formated'] }}</em>
        </div>
        
@endif

        
@if($total['tax'] > 0)

        <div class="list">
            <span>{{ $lang['tax'] }}：</span>
            <em class="price" id="cachBackId"> +{{ $total['tax_formated'] }}</em>
        </div>
        
@endif

		
@if($rate_price > 0)

        <div class="list">
            <span>{{ $lang['general_tax'] }}：</span>
            <em class="price" id="cachBackId"> +¥{{ $rate_price }}</em>
        </div>
        
@endif

        
@if($total['shipping_fee'] > 0 )

        <div class="list">
            <span>{{ $lang['shipping_fee'] }}：</span>
            <em class="price" id="freightPriceId">+{{ $total['shipping_fee_formated'] }}</em>
        </div>
        
@endif

        
@if($total['shipping_insure'] > 0)

        <div class="list">
            <span>{{ $lang['insure_fee'] }}：</span>
            <em class="price" id="cachBackId"> +{{ $total['shipping_insure_formated'] }}</em>
        </div>
        
@endif

        
@if($total['pay_fee'] > 0)

        <div class="list">
            <span>{{ $lang['pay_fee'] }}：</span>
            <em class="price" id="cachBackId"> +{{ $total['pay_fee_formated'] }}</em>
        </div>
        
@endif

        
@if($total['surplus'] > 0 || $total['integral'] > 0 || $total['bonus'] > 0 || $total['coupons']>0 || $total['value_card']>0)

            
@if($total['surplus'] > 0)

            <div class="list">
                <span>{{ $lang['use_surplus'] }}：</span>
                <em class="price" id="cachBackId"> -{{ $total['surplus_formated'] }}</em>
            </div>
            
@endif

            
@if($total['integral'] > 0)

            <div class="list">
                <span>{{ $lang['use_integral'] }}：</span>
                <em class="price" id="cachBackId"> -{{ $total['integral_formated'] }}</em>
            </div>
            
@endif

            
@if($total['bonus'] > 0)

            <div class="list">
                <span>{{ $lang['use_bonus'] }}：</span>
                <em class="price" id="cachBackId"> -{{ $total['bonus_formated'] }}</em>
            </div>
            
@endif

            
@if($total['coupons'] > 0)

            <div class="list">
                <span>{{ $lang['label_coupons'] }}：</span>
                <em class="price" id="cachBackId"> -{{ $total['coupons_formated'] }}</em>
            </div>
            
@endif

            
@if($total['value_card'] > 0)


@if($total['vc_dis_money'] > 0)

            <div class="list">
                <span>{{ $lang['value_card_dis'] }}：</span>
                <em class="price" id="cachBackId"> -{{ $total['card_dis'] }}</em>
            </div>
			
@endif

            <div class="list">
                <span>{{ $lang['use_value_card'] }}：</span>
                <em class="price" id="cachBackId"> -{{ $total['value_card_formated'] }}</em>
            </div>
            
@endif

        
@endif

        <div class="list">
            <span>{{ $lang['total_amount_payable'] }}：</span>
            <em class="price-total">{{ $total['amount_formated'] }}</em>
        </div>
        
@if($total['exchange_integral'] )

            <div class="list">
                <span class="txt flow_exchange_goods">{{ $lang['notice_eg_integral'] }}</span>
                <em class="price" id="payPriceId" class="flow_exchange_goods">{{ $total['exchange_integral'] }}</em>
            </div>
        
@endif

        
@if($is_group_buy)
<div class="amount-sum"><strong>{{ $lang['notice_gb_order_amount'] }}</strong></div>
@endif

    </div>
</div>   

<div class="checkout-foot" ectype="tfoot-toolbar">
    <div class="w w1200">
        <div class="btn-area"><input type="button" id="submit-done" class="submit-btn" value="{{ $lang['submit_order'] }}"></div>
        
@if($consignee['province'] && $seller_store != 'store_seller')

        <div class="d-address">
            <span id="sendAddr">{{ $lang['Send_to'] }}：{!! $consignee['consignee_address'] !!}</span>
            <span id="sendMobile">{{ $lang['Consignee'] }}：{!! $consignee['consignee'] !!}&nbsp;&nbsp;{!! $consignee['mobile'] !!}</span>
        </div>
        
@endif

    </div>
    <input name="goods_flow_type" value="{{ $goods_flow_type }}" type="hidden">
    <input name="rec_number_str" value="" type="hidden">
	<input name="shipping_prompt_str" value="" type="hidden">
    <input type="hidden" id="store_id" name='store_id' value="{{ $store_id ?? 0 }}"/>
    <input type="hidden" id="store_seller" value="{{ $seller_store }}" name="store_seller">
    <input type="hidden" value="{{ $warehouse_id ?? 0 }}" name="warehouse_id">
    <input type="hidden" value="{{ $area_id ?? 0 }}" name="area_id">
    <input name="submit_erorr" value="1" type="hidden" autocomplete="off">
</div>

@if(!empty($is_kj))

    <div class="w w1200">
        <div class="tr mt10">
            <input type="checkbox" class="ui-checkbox" name="remember" id="remember" checked>
            <label for="remember" class="ui-b2b-checkbox-label">{{ $lang['invoice_checkbox'] }}</label>
            
@foreach($cross_border_article_list as $key => $item)

                
@if($key+1 == count($cross_border_article_list))

                    <span><a href="article.php?id={{ $item['article_id'] }}" target="_blank">{{ $item['title'] }}</a></span>
                
@else

                    <span><a href="article.php?id={{ $item['article_id'] }}" target="_blank">{{ $item['title'] }}、</a></span>
                
@endif

            
@endforeach

        </div>
    </div>

@endif

<script type="text/javascript">
$(function(){
    $('#remember').on('click',function () {
        if ($(this).is(':checked')==false) {
            $('#submit-done').attr('disabled',true);
        } else {
            $('#submit-done').attr('disabled',false);
        }
    })

	$(":input[name='order_bonus_sn']").val('');
	
	$("input[name='rec_number']").each(function(index, element) {
        if($(element).val() == 1){
			var store_id = $('#store_id').val();
			var warehouse_id = $(":input[name='warehouse_id']").val();
			var area_id = $(":input[name='area_id']").val();
			var seller_store = {{ $seller_store ?? 0 }};
			
			(store_id > 0) ? store_id : 0;
			$(".checkout-foot .btn-area").removeClass('no_shipping');
			$(".checkout-foot .btn-area").addClass('no_goods');
			$(".checkout-foot .btn-area").attr('data-url', 'ajax_dialog.php?act=goods_stock_exhausted&warehouse_id=' + warehouse_id + '&area_id=' + area_id + '&store_id=' + store_id + '&store_seller=' + seller_store);
			$(".checkout-foot .btn-area").html('<input type="button" class="submit-btn" id="submit-done" value="'+json_languages.common.submit_order+'"/>');
			return false;
		}
    });
	
	var rec_number = new Array();
	$("input[name='rec_number']").each(function(index, element) {	
		if($(element).val() == 1){
			
			var num_recid = $(element).data("id");
			
			rec_number.push(num_recid);
		}
    });
	
	$("input[name='rec_number_str']").val(rec_number);
	
	$("input[name='shipping_prompt']").each(function(index, element) {
		
		var store_id = Number($(".checkout-foot :input[name='store_id']").val());
		var seller_store = {{ $seller_store ?? 0 }};
		
        if($(element).val() == 1 && store_id == 0){
			var store_id = $('#store_id').val();
			var warehouse_id = $(":input[name='warehouse_id']").val();
			var area_id = $(":input[name='area_id']").val();
			
			(store_id > 0) ? store_id : 0;
			$(".checkout-foot .btn-area").removeClass('no_goods');
			$(".checkout-foot .btn-area").addClass('no_shipping');
			
			$(".checkout-foot .btn-area").attr('data-url', 'ajax_dialog.php?act=shipping_prompt&warehouse_id=' + warehouse_id + '&area_id=' + area_id + '&store_id=' + store_id + '&store_seller=' + seller_store);
			
			$(".checkout-foot .btn-area").html('<input type="button" class="submit-btn" id="submit-done" value="'+json_languages.common.submit_order+'"/>');
			return false;			
		}
    });
	
	var shipping_prompt = new Array();
	$("input[name='shipping_prompt']").each(function(index, element) {	

		if($(element).val() == 1){
			var shipping_recid = $(element).data("id");
			shipping_prompt.push(shipping_recid);
		}
    });

	$("input[name='shipping_prompt_str']").val(shipping_prompt);
	
	
@if($is_exchange_goods == 1 || $total['real_goods_count'] == 0)

	$('.flow_exchange_goods').show();
	
@endif

	
	$(document).on("click","#submit-done",function(){
		var value = new Array();
		var rec_id = new Array();
		var shipping_list = $(":input[name='shipping[]']");
		var cart_list = $(":input[name='cart_info[]']");
		var store_id = Number($(".checkout-foot :input[name='store_id']").val());
		var cart_value = $(":input[name='done_cart_value']").val();
		var warehouse_id = $(":input[name='warehouse_id']").val();
		var area_id = $(":input[name='area_id']").val();
		var number_erorr = 0;
		var frm = $("form[name='doneTheForm']");

		
@if($cross_border_version)

		// 跨境多商户
		var is_kj = $("#is_kj").val();
		// 检查身份证信息
		if(is_kj == 1)
		{
			var full_name = $("#rel_name").val();
			if(Utils.isEmpty(full_name))
			{
				alert("姓名不能为空！");
				return false;
			}

			var card = $("#id_num").val();
			card = card.toUpperCase();

			//是否为空
			if(card === '')
			{
				alert('身份证号不能为空！');
				$('input[name=id_num]').focus();
				return false;
			}
			//校验长度，类型
			if(isCardNo(card) === false)
			{
				alert('身份证号格式错误！');
				$('input[name=id_num]').focus();
				return false;
			}
			//检查身份
			if(checkProvince(card) === false)
			{
				alert('身份证号格式错误！');
				$('input[name=id_num]').focus();
				return false;
			}
			//校验生日
			if(checkBirthday(card) === false)
			{
				alert('身份证号信息错误！');
				$('input[name=id_num]').focus();
				return false;
			}
			//检验位的检测
			if(checkParity(card) === false)
			{
				alert('身份证号检测未通过！');
				$('input[name=id_num]').focus();
				return false;
			}
		}
		
@endif

		
		var parents = $(this).parents(".btn-area");
		if(parents.hasClass("no_goods")){
		  var rec_number = $("input[name='rec_number_str']").val();
		  var url = parents.data('url');
		  if(rec_number != ''){
			url = url + "&rec_number=" + rec_number;
		  }
		  
		  Ajax.call(url,'',noGoods, 'POST', 'JSON');
		  function noGoods(result){
			if(result.error == 1){
			  pb({
				id:'noGoods',
				title:json_languages.No_goods,
				width:670,
				ok_title:json_languages.go_up,  //按钮名称
				cl_title:json_languages.back_cart,  //按钮名称
				content:result.content,   //调取内容
				drag:false,
				foot:true,
				onOk:function(){
				  $("form[name='stockFormCart']").submit();
				},
				onCancel:function(){
				  location.href = "flow.php";
				}
			  });
			  $('.pb-ok').addClass('color_df3134');
			  
			  $(".checkout-foot :input[name='submit_erorr']").val(0);
			}else{
			  $("form[name='doneTheForm']").submit();
			}
		  }
		  
		  return false;
		}
		
		var is_virtual = $("form[name='doneTheForm'] :input[name='is_virtual']").val();
		
		if(parents.hasClass("no_shipping") && is_virtual == 0){
		  var shipping_prompt = $("input[name='shipping_prompt_str']").val();
		  var url = parents.data('url');
		  
		  if(shipping_prompt != ''){
			url = url + "&shipping_prompt=" + shipping_prompt;
		  }
		  
		  Ajax.call(url,'',noShipping, 'POST', 'JSON');
		  function noShipping(result){
			if(result.error == 1){
			  pb({
				id:'noGoods',
				title:json_languages.No_shipping,
				width:670,
				ok_title:json_languages.go_up,  //按钮名称
				cl_title:json_languages.back_cart,  //按钮名称
				content:result.content,   //调取内容
				drag:false,
				foot:true,
				onOk:function(){
				  $("form[name='stockFormCart']").submit();
				},
				onCancel:function(){
				  location.href = "flow.php";
				}
			  });
			  $('.pb-ok').addClass('color_df3134');
			  
			  $(".checkout-foot :input[name='submit_erorr']").val(0);
			}else{
			  $("form[name='doneTheForm']").submit();
			}
		  }
		  
		  return false;
		}
		
		var submit_erorr = Number($(".checkout-foot :input[name='submit_erorr']").val());
		
		if(submit_erorr == 1){
			if(checkOrderForm("form[name='doneTheForm']") == false){
				return false;
			}else{
				if(store_id > 0){
					//防止表单重复提交
					if(checkSubmit() == true){
						$("form[name='doneTheForm']").submit();
					}else{
						return false;
					}
				}else{
					shipping_list.each(function(index, element) {
						
						var val = $(this).data("sellerid") + "-" + $(this).val();
						
						value.push(val);
					});
					
					cart_list.each(function(index, element) {
						rec_id.push($(this).val());
					});
					
					var where = '&warehouse_id=' + warehouse_id + '&area_id=' + area_id + '&store_id=' + store_id + '&store_seller={{ $seller_store }}';
					Ajax.call('ajax_dialog.php', 'act=flow_shipping&shipping_list=' + value + '&rec_id=' + rec_id + where, notShippingResponse, 'POST', 'JSON');
				}
				return true;
			}
		}else{
			return false;
		}
	});
	
	function notShippingResponse(result){
		if(result.error == 1){
			pb({
				id:'noGoods',
				title:json_languages.No_shipping,
				width:670,
				ok_title:json_languages.go_up, 	//按钮名称
				cl_title:json_languages.back_cart, 	//按钮名称
				content:result.content, 	//调取内容
				drag:false,
				foot:true,
				onOk:function(){
					$("form[name='stockFormCart']").submit();
				},
				onCancel:function(){
					location.href = "flow.php";
				}
			});
			$('.pb-ok').addClass('color_df3134');
		}else{
			//加载中
			ajaxLoadFunc();
			
			//防止表单重复提交
			if(checkSubmit() == true){
				$("form[name='doneTheForm']").submit();
			}else{
				return false;
			}
		}
	}
});

var vcity={ 11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",
        	21:"辽宁",22:"吉林",23:"黑龙江",31:"上海",32:"江苏",
        	33:"浙江",34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",
        	42:"湖北",43:"湖南",44:"广东",45:"广西",46:"海南",50:"重庆",
        	51:"四川",52:"贵州",53:"云南",54:"西藏",61:"陕西",62:"甘肃",
        	63:"青海",64:"宁夏",65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外"
           };

//检查号码是否符合规范，包括长度，类型
function isCardNo(card)
{
	//身份证号码为15位或者18位，15位时全为数字，18位前17位为数字，最后一位是校验位，可能为数字或字符X
	var reg = /(^\d{15}$)|(^\d{17}(\d|X)$)/;
	if(reg.test(card) === false)
	{
		return false;
	}

	return true;
};

//取身份证前两位,校验省份
function checkProvince(card)
{
	var province = card.substr(0,2);
	if(vcity[province] == undefined)
	{
		return false;
	}
	return true;
};

//检查生日是否正确
function checkBirthday(card)
{
	var len = card.length;
	//身份证15位时，次序为省（3位）市（3位）年（2位）月（2位）日（2位）校验位（3位），皆为数字
	if(len == '15')
	{
		var re_fifteen = /^(\d{6})(\d{2})(\d{2})(\d{2})(\d{3})$/; 
		var arr_data = card.match(re_fifteen);
		var year = arr_data[2];
		var month = arr_data[3];
		var day = arr_data[4];
		var birthday = new Date('19'+year+'/'+month+'/'+day);
		return verifyBirthday('19'+year,month,day,birthday);
	}
	//身份证18位时，次序为省（3位）市（3位）年（4位）月（2位）日（2位）校验位（4位），校验位末尾可能为X
	if(len == '18')
	{
		var re_eighteen = /^(\d{6})(\d{4})(\d{2})(\d{2})(\d{3})([0-9]|X)$/;
		var arr_data = card.match(re_eighteen);
		var year = arr_data[2];
		var month = arr_data[3];
		var day = arr_data[4];
		var birthday = new Date(year+'/'+month+'/'+day);
		return verifyBirthday(year,month,day,birthday);
	}
	return false;
};

//校验日期
function verifyBirthday(year,month,day,birthday)
{
	var now = new Date();
	var now_year = now.getFullYear();
	//年月日是否合理
	if(birthday.getFullYear() == year && (birthday.getMonth() + 1) == month && birthday.getDate() == day)
	{
		//判断年份的范围（3岁到100岁之间)
		var time = now_year - year;
		if(time >= 3 && time <= 100)
		{
			return true;
		}
		return false;
	}
	return false;
};

//校验位的检测
function checkParity(card)
{
	//15位转18位
	card = changeFivteenToEighteen(card);
	var len = card.length;
	if(len == '18')
	{
		var arrInt = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2); 
		var arrCh = new Array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2'); 
		var cardTemp = 0, i, valnum; 
		for(i = 0; i < 17; i ++) 
		{ 
			cardTemp += card.substr(i, 1) * arrInt[i]; 
		} 
		valnum = arrCh[cardTemp % 11]; 
		if (valnum == card.substr(17, 1)) 
		{
			return true;
		}
		return false;
	}
	return false;
};

//15位转18位身份证号
function changeFivteenToEighteen(card)
{
	if(card.length == '15')
	{
		var arrInt = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2); 
		var arrCh = new Array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2'); 
		var cardTemp = 0, i;   
		card = card.substr(0, 6) + '19' + card.substr(6, card.length - 6);
		for(i = 0; i < 17; i ++) 
		{ 
			cardTemp += card.substr(i, 1) * arrInt[i]; 
		} 
		card += arrCh[cardTemp % 11]; 
		return card;
	}
	return card;
};
</script>