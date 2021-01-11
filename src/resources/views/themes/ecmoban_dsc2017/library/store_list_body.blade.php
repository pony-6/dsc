<div class="storeDialog">
    <div class="storeDialog-top">
        <div class="dt">{{ $lang['Selection_region'] }}：</div>
        <div class="dd" ectype="regionLinkage">
        	<dl class="mod-select mod-select-small" ectype="smartdropdown" id="selProvinces">
                <dt>
                    <span class="txt" ectype="txt">
                        
@if(isset($consignee_region['province']['region_name']))

                           {{ $consignee_region['province']['region_name'] }}
                       
@else

                           {{ $lang['please_select'] }}
                       
@endif

                   </span>
                    <input type="hidden" value="{{ $consignee['province'] }}" name="province">
                </dt>
                <dd ectype="layer">
                    <div class="option" data-value="0">{{ $lang['please_select'] }}</div>
                    
@foreach($provinces as $province)

                    <div class="option" data-value="{{ $province['region_id'] }}" data-text="{{ $province['region_name'] }}" data-type="2" ectype="ragionItem">{{ $province['region_name'] }}</div>
                    
@endforeach

                </dd>
            </dl>
            <dl class="mod-select mod-select-small" ectype="smartdropdown" id="selCities">
                <dt>
                    <span class="txt" ectype="txt">
                        
@if(isset($consignee_region['city']['region_name']))

                           {{ $consignee_region['city']['region_name'] }}
                       
@else

                           {{ $lang['please_select'] }}
                       
@endif

                    </span>
                    <input type="hidden" value="{{ $consignee['city'] }}" name="city">
                </dt>
                <dd ectype="layer">
                    <div class="option" data-value="0">{{ $lang['please_select'] }}</div>
                    
@foreach($cities as $city)

                    <div class="option" data-value="{{ $city['region_id'] }}" data-type="3" data-text="{{ $city['region_name'] }}" ectype="ragionItem">{{ $city['region_name'] }}</div>
                    
@endforeach

                </dd>
            </dl>
            <dl class="mod-select mod-select-small" ectype="smartdropdown" data-store="2" id="selDistricts">
                <dt>
                    <span class="txt" ectype="txt">
                        
@if(isset($consignee_region['district']['region_name']))

                           {{ $consignee_region['district']['region_name'] }}
                       
@else

                           {{ $lang['please_select'] }}
                       
@endif

                    </span>
                    <input type="hidden" value="{{ $consignee['district'] }}" name="district">
                </dt>
                <dd ectype="layer">
                    <div class="option" data-value="0">{{ $lang['please_select'] }}</div>
                    
@foreach($city as $district)

                    <div class="option" data-value="{{ $district['region_id'] }}" data-type="4" data-text="{{ $district['region_name'] }}" ectype="ragionItem">{{ $district['region_name'] }}</div>
                    
@endforeach

                </dd>
            </dl>
        </div>
		<a href="javascript:;" onclick="all_stores({{ $goods_id }})" class="fr mr10">{{ $lang['view'] }}{{ $lang['all_store_list'] }}</a>
        <input type="hidden" id="goods_id" value="{{ $goods_id }}"/>
    </div>
    
    <div class="store-content">
        <ul class="store_see" id="store_see">
        
@foreach($store_list as $store_list)

        <li>
            <div class="td s_title" title="{{ $store_list['stores_name'] }}" data-toggle="tooltip"><i></i>{{ $store_list['stores_name'] }}</div>
            <div class="td s_address">{{ $lang['address'] }}：[{{ $store_list['province'] }}&nbsp;{{ $store_list['city'] }}&nbsp;{{ $store_list['district'] }}]&nbsp;{{ $store_list['stores_address'] }}</div>
            <div class="td handle"><a href="javascript:bool=2;addToCart({{ $store_list['goods_id'] }},0,0,'','',{{ $store_list['id'] }})" >{{ $lang['Since_lift_new'] }}</a></div>
        </li>
        
@endforeach

        </ul>
        <div class="notic_store" style="display:none;"></div>
    </div>
</div>
<script type="text/javascript">
    function get_store_list_goods(district){
        var formBuy      = document.forms['ECS_FORMBUY'];
        var goods_id = document.getElementById('goods_id').value;
        var province = $("#selProvinces").find("input[name='province']").val();
        var city = $("#selCities").find("input[name='city']").val();
        var spec_arr = '';
        // 检查是否有商品规格 
        if (formBuy)
        {
            spec_arr = getSelectedAttributes(formBuy);
        }

        if(district > 0){
            Ajax.call('ajax_shop.php?act=get_store_list', 'province=' + province + '&city=' + city + '&district=' + district + '&goods_id=' + goods_id + '&spec_arr=' + spec_arr, get_store_list_goodsResponse, 'GET', 'JSON');
		}
    }
	
    function get_store_list_goodsResponse(result){
        if(result.error > 0){
            $("#store_see").html(result.content);
			$("#store_see").show();
			$(".notic_store").hide();
			$(".store_see").perfectScrollbar();
        }else{
            $("#store_see").html('');
			$("#store_see").hide();
			$(".notic_store").show();
			$(".notic_store").html(json_languages.store_goods_null)
        }
    }

	function all_stores(goodsId){
		
		var formBuy      = document.forms['ECS_FORMBUY'];
		if (formBuy)
		{
			spec_arr = getSelectedAttributes(formBuy);
		}		
		
		Ajax.call('ajax_shop.php?act=all_stores_list', 'goods_id=' + goodsId + '&spec_arr=' + spec_arr , all_store_listResponse, 'GET', 'JSON');
	}
	
	function all_store_listResponse(result){
        if(result.error > 0){
            $("#store_see").html(result.content);
			$("#store_see").show();
			$(".notic_store").hide();
			$(".store_see").perfectScrollbar();
		}
    }
</script>
