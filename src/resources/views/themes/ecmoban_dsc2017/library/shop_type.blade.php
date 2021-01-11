<div class="panel-body">
    <div class="panel-tit"><span>{{ $title['fields_titles'] }}</span></div>
    <div class="cue">{!! $title['titles_annotation'] !!}</div>
    <div class="list">
    	@include('frontend::library/cententFields')

        <div class="item">
            <div class="label">
                <em>*</em>
                <span>{{ $lang['Expected_store_type'] }}：</span>
            </div>
            <div class="value">
                <div class="imitate_select w120" id="ec_shoprz_type">
                	<div class="cite"><span>
@if($title['parentType']['shoprz_type'] == 1)
{{ $lang['flagship_store'] }}
@elseif ($title['parentType']['shoprz_type'] == 2)
{{ $lang['exclusive_shop'] }}
@elseif ($title['parentType']['shoprz_type'] == 3)
{{ $lang['franchised_store'] }}
@else
{{ $lang['all_option'] }}
@endif
</span><i class="iconfont icon-down"></i></div>
                    <ul>
                    	<li><a href="javascript:void(0);" data-value="0">{{ $lang['all_option'] }}</a></li>
                        <li><a href="javascript:void(0);" data-value="1">{{ $lang['flagship_store'] }}</a></li>
                        <li><a href="javascript:void(0);" data-value="2">{{ $lang['exclusive_shop'] }}</a></li>
                        <li><a href="javascript:void(0);" data-value="3">{{ $lang['franchised_store'] }}</a></li>
                    </ul>
                </div>
                <input type="hidden" name="ec_shoprz_type" value="
@if($title['parentType']['shoprz_type'] == 1)
1
@elseif ($title['parentType']['shoprz_type'] == 2)
2
@elseif ($title['parentType']['shoprz_type'] == 3)
3
@else
0
@endif
" id="ec_shoprz_type_val" />

                <div class="imitate_select w130 ml10" id="ec_subShoprz_type"
@if($title['parentType']['shoprz_type'] == 1)
 style="display:block;"
@else
 style="display:none;"
@endif
>
                	<div class="cite"><span>
@if($title['parentType']['subShoprz_type'] == 1)
{{ $lang['subShoprz_type']['0'] }}
@elseif ($title['parentType']['subShoprz_type'] == 2)
{{ $lang['subShoprz_type']['1'] }}
@elseif ($title['parentType']['subShoprz_type'] == 3)
{{ $lang['subShoprz_type']['2'] }}
@else
{{ $lang['all_option'] }}
@endif
</span><i class="iconfont icon-down"></i></div>
                    <ul>
                    	<li><a href="javascript:void(0);" data-value="0">{{ $lang['all_option'] }}</a></li>
                        <li><a href="javascript:void(0);" data-value="1">{{ $lang['subShoprz_type']['0'] }}</a></li>
                        <li><a href="javascript:void(0);" data-value="2">{{ $lang['subShoprz_type']['1'] }}</a></li>
                        <li><a href="javascript:void(0);" data-value="3">{{ $lang['subShoprz_type']['2'] }}</a></li>
                    </ul>
                </div>
                <input type="hidden" name="ec_subShoprz_type"
@if($title['parentType']['subShoprz_type'] == 1)
 value="1"
@elseif ($title['parentType']['subShoprz_type'] == 2)
 value="2"
@elseif ($title['parentType']['subShoprz_type'] == 3)
 value="3"
@else
 value="0"
@endif
 id="ec_subShoprz_type_val"
@if($title['parentType']['shoprz_type'] != 1)
 class="ignore"
@endif
 />

                <div class="orange" ectype="shopSellerPrompt">
                	<div class="item"
@if($title['parentType']['shoprz_type'] == 1)
 style="display:block;"
@else
 style="display:none;"
@endif
>{{ $lang['subShoprz_type_desc'] }}</div>
                    <div class="item"
@if($title['parentType']['shoprz_type'] == 2)
 style="display:block;"
@else
 style="display:none;"
@endif
>{{ $lang['parentType_shoprz_type'] }}</div>
                    <div class="item"
@if($title['parentType']['shoprz_type'] == 3)
  style="display:block;"
@else
  style="display:none;"
@endif
>{{ $lang['parentType_shoprz_type_one'] }}</div>
                </div>
                <div class="shopType" ectype="shopType" id="shopSellerType1"
@if($title['parentType']['shoprz_type'] == 1)
 style="display:block"
@else
 style="display:none"
@endif
>
                    <div class="item-item"
@if($title['parentType']['subShoprz_type'] == 2)
 style="display:block;"
@else
 style="display:none;"
@endif
 id="subShoprz_type2">
                        <div class="item-warp"><span>{{ $lang['subShoprz_type_one'] }}：</span><a class="link-blue" href="/storage/images/apply/getQualificationTemplate.action?_t=164" target="_blank" style="display:none">{{ $lang['subShoprz_type_two'] }}</a></div>
                        <div class="item-warp">
                            <div class="word">{{ $lang['License_validity_period'] }}：</div>
                            <div class="text_time">
                                <input id="shop_expireDateStart" class="text text-2 jdate narrow" type="text" size="20" readonly value="{{ $title['parentType']['shop_expireDateStart'] }}" name="ec_shop_expireDateStart">
                                <span>&mdash;</span>
                                <input id="shop_expireDateEnd" class="text text-2 jdate narrow" type="text" size="20" readonly value="{{ $title['parentType']['shop_expireDateEnd'] }}" name="ec_shop_expireDateEnd" >
                                <div class="cart-checkbox fr">
                                    <input type="checkbox" id="authorizeCheckBox" value="1" name="ec_shop_permanent" class="ui-checkbox" onClick="get_shopTime_term(this);"
@if($title['parentType']['shop_permanent'] == 1)
checked
@endif
>
                                    <label for="authorizeCheckBox" class="ui-label">永久</label>
                                </div>
                            </div>
                        </div>
                        <div class="item-warp" id="container2">
                            <div class="word">{{ $lang['upload_file'] }}：</div>
                            <div class="item-con">
                            	<div class="type-file-box">
                                    <input type="button" name="button" class="type-file-button" id="button" value="" />
                                    <input type="file" name="ec_authorizeFile" class="type-file-file" value="{{ $title['parentType']['authorizeFile'] }}" data-state="" hidefocus="true" />

@if($title['parentType']['authorizeFile'])
<a href="{{ $title['parentType']['authorizeFile'] }}" class="chakan" target="_blank">{{ $lang['view'] }}</a>
@endif

                                    <input type="text" name="textfile" class="type-file-text" value="{{ $title['parentType']['authorizeFile'] }}" readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-item"
@if($title['parentType']['subShoprz_type'] == 3)
 style="display: block;"
@else
 style="display: none;"
@endif
 id="subShoprz_type3">
                        <div class="item-warp">
                            <div class="word" style="width:auto;">{{ $lang['ec_shop_hypermarketFile'] }}：</div>
                            <div id="container1" class="item-con">
                                <div class="type-file-box">
                                    <input type="button" name="button" class="type-file-button" id="button" value="" />
                                    <input type="file" name="ec_shop_hypermarketFile" class="type-file-file" value="{{ $title['parentType']['shop_hypermarketFile'] }}" data-state="" hidefocus="true" />

@if($title['parentType']['shop_hypermarketFile'])
<a href="{{ $title['parentType']['shop_hypermarketFile'] }}" class="chakan" target="_blank">{{ $lang['view'] }}</a>
@endif

                                    <input type="text" name="textfile" class="type-file-text" value="{{ $title['parentType']['shop_hypermarketFile'] }}" readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@if($cross_border_version)

        <div class="item">
            <div class="label">
                 <em>*</em>
                  <span>{{ $lang['from_cross_border'] }}：</span>
            </div>
            <div class="value">
                <input type="radio" name="huoyuan" value="{{ $lang['domestic_warehouse'] }}" checked="checked" onclick="check_country('gnck')" />{{ $lang['domestic_warehouse'] }}&nbsp;&nbsp;<input type="radio" name="huoyuan" value="{{ $lang['free_trade_zone'] }}" onclick="check_country('zmq')" />{{ $lang['free_trade_zone'] }}&nbsp;&nbsp;<input type="radio" name="huoyuan" value="hwzy" onclick="check_country('{{ $lang['shipping_from_abroad'] }}')" />{{ $lang['shipping_from_abroad'] }}
            </div>
            <div id="m_country1" class="value" style="display:none;">
                {{ $lang['select_country'] }}
                <select name="m_country">
                <option value='0' >{{ $lang['please_select'] }}</option>

@foreach($list_country as $lc)

                <option value='{{ $lc['id'] }}' >{{ $lc['c_name'] }}</option>

@endforeach

                </select>
            </div>
        </div>

@endif


        <div class="view-sample" style="display:none">
            <div class="img-wrap">
                <img width="180" height="180" alt="" src="/storage/images/common/images/ruzhu/x_1.jpg">
            </div>
            <div class="t-c mt10">
                <a class="link-blue" target="_blank" href="/storage/images/common/images/ruzhu/1.jpg">{{ $lang['View_larger'] }}</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
//时间选择
var opts2 = {
	'targetId':'shop_expireDateStart',
	'triggerId':['shop_expireDateStart'],
	'alignId':'shop_expireDateStart',
	'format':'-'
},opts3 = {
	'targetId':'shop_expireDateEnd',
	'triggerId':['shop_expireDateEnd'],
	'alignId':'shop_expireDateEnd',
	'format':'-'
}
xvDate(opts2);
xvDate(opts3);
</script>



@if($cross_border_version)

<script type="text/javascript">
function check_country(hy)
{
    m_country1=document.getElementById('m_country1');
    if(hy == 'hwzy')
    {
        m_country1.style.display="block";
    }
    else
    {
        m_country1.style.display="none";
    }
}
</script>

@endif

