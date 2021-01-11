
<div class="order-summary">
    <div class="statistic">
        <div class="list">
            <span><em>{{ $total['total_number'] }}</em> 件商品，总商品金额：</span>
            <em class="price" id="warePriceId">{{ $total['total_price_formatted'] }}</em>
        </div>
        
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

			
@if($total['card_dis'] != '')

            <div class="list">
                <span>储值卡折扣：</span>
                <em class="price" id="cachBackId"> {{ $total['card_dis'] }}折</em>
            </div>
			
@endif

            <div class="list">
                <span>使用储值卡：</span>
                <em class="price" id="cachBackId"> -{{ $total['value_card_formated'] }}</em>
            </div>
            
@endif

        
@endif

        <div class="list">
            <span>应付总额：</span>
            <em class="price-total">{{ $total['total_price_formatted'] }}</em>
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
        <div class="d-address">
            <span id="sendAddr">{{ $lang['Send_to'] }}：{{ $consignee['consignee_address'] }}</span>
            <span id="sendMobile">{{ $lang['Consignee'] }}：{{ $consignee['consignee'] }}&nbsp;&nbsp;{{ $consignee['mobile'] }}</span>
        </div>
    </div>
    <input name="goods_flow_type" value="{{ $goods_flow_type }}" type="hidden">
    <input name="rec_number_str" value="" type="hidden">
	<input name="shipping_prompt_str" value="" type="hidden">
    <input type="hidden" id="store_id" name='store_id' value="{{ $store_id ?? 0 }}"/>
    <input type="hidden" id="store_seller" value="{{ $store_seller }}" name="store_seller">
    <input type="hidden" value="{{ $warehouse_id ?? 0 }}" name="warehouse_id">
    <input type="hidden" value="{{ $area_id ?? 0 }}" name="area_id">
</div>
<script type="text/javascript">
$(function(){
	$(":input[name='order_bonus_sn']").val('');
	
	$("input[name='rec_number']").each(function(index, element) {
        if($(element).val() == 1){
			var store_id = document.getElementById('store_id').value;
			var warehouse_id = $(":input[name='warehouse_id']").val();
			var area_id = $(":input[name='area_id']").val();
			
			(store_id > 0) ? store_id : 0;
			$(".checkout-foot .btn-area").removeClass('no_shipping');
			$(".checkout-foot .btn-area").addClass('no_goods');
			$(".checkout-foot .btn-area").attr('data-url', 'ajax_dialog.php?act=goods_stock_exhausted&warehouse_id=' + warehouse_id + '&area_id=' + area_id + '&store_id=' + store_id + '&store_seller={{ $store_seller }}');
			$(".checkout-foot .btn-area").html('<input type="button" class="submit-btn" value="'+json_languages.submit_order+'"/>');
			return false;
		}
    });
	
	var rec_number = new Array();
	$("input[name='rec_number']").each(function(index, element) {	
		if($(element).val() == 1){
			rec_number.push($(element).attr('id'));
		}
    });
	
	$("input[name='rec_number_str']").val(rec_number);
	
	$("input[name='shipping_prompt']").each(function(index, element) {
		
		var store_id = Number($(".checkout-foot :input[name='store_id']").val());
		
        if($(element).val() == 1 && store_id == 0){
			var store_id = document.getElementById('store_id').value;
			var warehouse_id = $(":input[name='warehouse_id']").val();
			var area_id = $(":input[name='area_id']").val();
			
			(store_id > 0) ? store_id : 0;
			$(".checkout-foot .btn-area").removeClass('no_goods');
			$(".checkout-foot .btn-area").addClass('no_shipping');
			$(".checkout-foot .btn-area").attr('data-url', 'ajax_dialog.php?act=shipping_prompt&warehouse_id=' + warehouse_id + '&area_id=' + area_id + '&store_id=' + store_id + '&store_seller={{ $store_seller }}');
			$(".checkout-foot .btn-area").html('<input type="button" class="submit-btn" value="'+json_languages.submit_order+'"/>');
			return false;			
		}
    });
	
	var shipping_prompt = new Array();
	$("input[name='shipping_prompt']").each(function(index, element) {	
		if($(element).val() == 1){
			shipping_prompt.push($(element).attr('id'));
		}
    });
	
	$("input[name='shipping_prompt_str']").val(shipping_prompt);
	
	
@if($is_exchange_goods == 1 || $total['real_goods_count'] == 0)

	$('.flow_exchange_goods').show();
	
@endif

	
	$(document).on("click","#submit-done",function(){
		
		var user_id = $(":input[name='user_id']").val();
		
		fale = true;
		if(user_id > 0){
			var consignee_radio = $("#consignee-addr input[name='consignee_radio']");
			var input_length = consignee_radio.length;
			var numChecked = 0;
			
			consignee_radio.each(function(index, element) {
				if($(this).is(':checked')){
					numChecked += 1;
				}else{
					numChecked += 0;
				} 
			});
	
			//判断是否具有收货地址
			if(input_length == 0 || numChecked == 0){			
				pbDialog(json_languages.please_checked_address,"",0,'','','',false,function(){
					$(".add-new-address,.dialog_checkout").click();
				},json_languages.add_shipping_address);
				
				fale = false;
			}
		}
		
		if(fale == false){
			return false;
		}else{
			$("form[name='doneTheForm']").submit();
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

			$("form[name='doneTheForm']").submit();
		}
	}
});
</script>