<!doctype html>
<html>
<head><meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="{{ $keywords }}" />
<meta name="Description" content="{{ $description }}" />

<title>{{ $page_title }}</title>



<link rel="shortcut icon" href="favicon.ico" />
@include('frontend::library/js_languages_new')
<link rel="stylesheet" type="text/css" href="{{ skin('css/other/presale.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ skin('css/suggest.css') }}" />
</head>

<body>
    @include('frontend::library/page_header_presale')
    <div class="full-main-n">
        <div class="w w1200 relative">
        @include('frontend::library/ur_here')
        </div>
    </div>
    <div class="container">
        <div class="w w1200">
            <div class="product-info mt20">
                @include('frontend::library/goods_gallery')
                <div class="product-wrap
@if($goods['user_id'])
 product-wrap-min
@endif
">
                    <form action="presale.php?act=buy" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY">
                        <div class="name">{{ $presale['goods_name'] }}</div>

@if($goods['goods_brief'])

                        <div class="newp">{{ $goods['goods_brief'] }}</div>

@endif


                        <div class="activity-title">
                            <div class="activity-type"><i class="icon icon-promotion"></i>{{ $lang['presell'] }}</div>
                            <div class="sk-time-cd">
                                <div class="sk-cd-tit">
@if($presale['no_start'] == 1)
{{ $lang['Start_from_presell'] }}
@else
{{ $lang['residual_time'] }}
@endif
</div>
                                <div class="cd-time time" ectype="time" data-time="
@if($presale['no_start'] == 1)
{{ $presale['formated_start_date'] }}
@else
{{ $presale['formated_end_date'] }}
@endif
">
                                    <div class="days">00</div>
                                    <span class="split">:</span>
                                    <div class="hours">00</div>
                                    <span class="split">:</span>
                                    <div class="minutes">00</div>
                                    <span class="split">:</span>
                                    <div class="seconds">00</div>
                                </div>
                            </div>
                            <div class="activity-message-item">
                                <i class="sprite-person"></i><em class="J-count">{{ $pre_num }}</em>{{ $lang['subscribe_p'] }}
                            </div>
                        </div>

                        <div class="summary">
                        	<div class="summary-price-wrap">
                                <div class="s-p-w-wrap">
                                    <div class="summary-item si-shop-price">
                                        <div class="si-tit">{{ $lang['presale_price'] }}</div>
                                        <div class="si-warp">
                                            <strong class="shop-price" id="ECS_SHOPPRICE"></strong>
                                        </div>
                                    </div>
                                    <div class="summary-item si-market-price">
                                        <div class="si-tit">{{ $lang['Deposit_new'] }}</div>
                                        <div class="si-warp"><div class="price">{{ $presale['formated_deposit'] }}</div></div>
                                    </div>
                                    <div class="summary-item si-market-price">
                                        <div class="si-tit">{{ $lang['Retainage_new'] }}</div>
                                        <div class="si-warp"><div class="price">{{ $presale['formated_final_payment'] }}</div></div>
                                    </div>
                                    <div class="si-info">
                                        <dl class="sp-rule">
                                            <dt>{{ $lang['Pre_sale_rules'] }}<i></i></dt>
                                            <dd>
                                                <i></i><em></em><b class="close"></b>
                                                <ul id="presell-rule">
                                                    {{ $lang['presell_desc'] }}{{ $dwt_shop_name }}{{ $lang['presell_desc_one'] }}{{ $dwt_shop_name }}{{ $lang['presell_desc_two'] }}
                                                </ul>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
							<div class="summary-basic-info">
                                <div class="summary-item is-stock">
                                    <div class="si-tit">{{ $lang['Distribution_new'] }}</div>
                                    <div class="si-warp">
                                        <span class="initial-area">

@if($adress['city'])

                                                {{ $adress['city'] }}

@else

                                                {{ $basic_info['city'] }}

@endif

                                        </span>
                                        <span>{{ $lang['zhi'] }}</span>
                                        <div class="store-selector">
                                            <div class="text-select" id="area_address" ectype="areaSelect"></div>
                                        </div>
                                        <div class="store-warehouse">
                                        </div>
                                    </div>
                                </div>

                                <div class="summary-item is-service">
                                    <div class="si-tit">{{ $lang['service'] }}</div>
                                    <div class="si-warp">
                                        <div class="fl">

@if($goods['user_id'] > 0)

                                            {{ $lang['you'] }} <a href="{{ $goods['store_url'] }}" class="link-red" target="_blank">{{ $goods['rz_shopName'] }}</a> {{ $lang['After_sale_service'] }}

@else

                                            {{ $lang['you'] }} <a href="javascript:void(0)" class="link-red">{{ $goods['rz_shopName'] }}</a> {{ $lang['After_sale_service'] }}

@endif

                                        </div>
                                        <div class="fl pl10" id="user_area_shipping"></div>
                                    </div>
                                </div>


@if($presale['xiangou_num'] && $xiangou == 1)

                                <div class="summary-item is-xiangou">
                                    <div class="si-tit">{{ $lang['gb_limited'] }}</div>
                                    <div class="si-warp">
                                        <em id="restrict_amount" ectype="restrictNumber" data-value="{{ $presale['xiangou_num'] }}">{{ $presale['xiangou_num'] }}</em>
                                        <span>
@if($goods['goods_unit'])
{{ $goods['goods_unit'] }}
@else
{{ $goods['measure_unit'] }}
@endif
</span>
                                        <span>（{{ $lang['js_languages']['Already_buy'] }}：<em id="orderG_number" ectype="orderGNumber">{{ $orderG_number ?? 0 }}</em>
@if($goods['goods_unit'])
{{ $goods['goods_unit'] }}
@else
{{ $goods['measure_unit'] }}
@endif
）</span>
                                    </div>
                                </div>

@endif



@foreach($specification as $spec_key => $spec)


@if($spec['values'])

                                <div class="summary-item is-attr goods_info_attr" ectype="is-attr" data-type="
@if($spec['attr_type'] == 1)
radio
@else
checkeck
@endif
">
                                    <div class="si-tit">{{ $spec['name'] }}</div>

@if($cfg['goodsattr_style'] == 1)

                                    <div class="si-warp">
                                        <ul>

@foreach($spec['values'] as $key => $value)


@if($spec['is_checked'] > 0)

                                        <li class="item
@if($value['checked'] == 1)
 selected
@endif
" date-rev="{{ $value['img_site'] }}" data-name="{{ $value['id'] }}">
                                            <b></b>
                                            <a href="javascript:void(0);">

@if($value['img_flie'])

                                                <img src="{{ $value['img_flie'] }}" width="24" height="24" />

@endif

                                                <i>{{ $value['label'] }}</i>
                                                <input id="spec_value_{{ $value['id'] }}" type="
@if($spec['attr_type'] == 2)
checkbox
@else
radio
@endif
" data-attrtype="
@if($spec['attr_type'] == 2)
2
@else
1
@endif
" name="spec_{{ $spec_key }}" value="{{ $value['id'] }}" autocomplete="off" class="hide" />

@if($value['checked'] == 1)

                                                <script type="text/javascript">
                                                    $(function(){
                                                        $("#spec_value_{{ $value['id'] }}").prop("checked", true);
                                                    });
                                                </script>

@endif

                                            </a>
                                        </li>

@else

                                        <li class="item
@if($key == 0)
 selected
@endif
">
                                            <b></b>
                                            <a href="javascript:void(0);" name="{{ $value['id'] }}" class="noimg">
                                                <i>{{ $value['label'] }}</i>
                                                <input id="spec_value_{{ $value['id'] }}" type="
@if($spec['attr_type'] == 2)
checkbox
@else
radio
@endif
" data-attrtype="
@if($spec['attr_type'] == 2)
2
@else
1
@endif
" name="spec_{{ $spec_key }}" value="{{ $value['id'] }}" autocomplete="off" class="hide" /></a>

@if($key == 0)

                                                <script type="text/javascript">
                                                    $(function(){
                                                        $("#spec_value_{{ $value['id'] }}").prop("checked", true);
                                                    });
                                                </script>

@endif

                                            </a>
                                        </li>

@endif


@endforeach

                                        </ul>
                                    </div>

@else

                                    ...

@endif

                                </div>

@endif


@endforeach


                                <div class="summary-item is-number">
                                    <div class="si-tit">{{ $lang['number_to'] }}</div>
                                    <div class="si-warp">
                                        <div class="amount-warp">
                                            <input class="text buy-num" ectype="quantity" value="1" name="number" defaultnumber="1">
                                            <div class="a-btn">
                                                <a href="javascript:void(0);" class="btn-add" ectype="btnAdd"><i class="iconfont icon-up"></i></a>
                                                <a href="javascript:void(0);" class="btn-reduce btn-disabled" ectype="btnReduce"><i class="iconfont icon-down"></i></a>
                                                <input type="hidden" name="perNumber" id="perNumber" ectype="perNumber" value="0">
                                                <input type="hidden" name="perMinNumber" id="perMinNumber" ectype="perMinNumber" value="1">
                                            </div>
                                            <input name="confirm_type" id="confirm_type" type="hidden" value="3" />
                                        </div>
                                        <span>{{ $lang['goods_inventory'] }}&nbsp;<em id="goods_attr_num" ectype="goods_attr_num"></em>&nbsp;
@if($goods['goods_unit'])
{{ $goods['goods_unit'] }}
@else
{{ $goods['measure_unit'] }}
@endif
</span>
                                    </div>
                                </div>
                            	<div class="clear"></div>
                            </div>
                            <div class="choose-btns ml60 clearfix">
                                <input type="hidden" name="presale_id" value="{{ $presale['act_id'] }}" />
                                <input type="hidden" value="" name="goods_attr_id" id="goods_attr_id" />
                                <input type="hidden" value="{{ $user_id }}" id="user_id" name="user_id">
                                <input type="hidden" value="{{ $goods_id }}" id="good_id" name="good_id">


@if($presale['no_start'] == 1)

                                    <a href="javascript:;" class="btn-append btn_disabled">{{ $lang['presale_no_start'] }}</a>

@elseif ($presale['already_over'] == 1)

                                    <a href="javascript:;" class="btn-append btn_disabled">{{ $lang['presale_end'] }}</a>

@else

                                    <a href="javascript:presale_submit()" class="btn-append presale_submit">{{ $lang['Pay_deposit'] }}</a>

@endif

                            </div>
                        </div>
                    @csrf </form>
                </div>

@if(!$goods['user_id'])

                <div class="track" id="look_top">
                </div>

@else

                <div class="seller-pop">
                    <div class="seller-logo">

@if($goods['shopinfo']['brand_thumb'])

                            <a href="{{ $goods['store_url'] }}" target="_blank"><img src="{{ $goods['shopinfo']['brand_thumb'] }}" /></a>

@else

                            <a href="{{ $goods['goods_brand_url'] }}" target="_blank">{{ $goods['goods_brand'] }}</a>

@endif

                    </div>
                    <div class="seller-info">
                    	<a href="{{ $goods['store_url'] }}" title="{{ $goods['rz_shopName'] }}" target="_blank" class="name">{{ $goods['rz_shopName'] }}</a>
                        <a id="IM" href="javascript:openWin(this)" ru_id="{{ $goods['user_id'] }}"><i class="icon i-kefu"></i></a>
                    </div>

@if($goods['shopinfo']['self_run'])

                    <div class="seller-sr" >{{ $lang['platform_self'] }}</div>

@endif

                    <div class="seller-pop-box">
                    	<div class="s-score">
                            <span class="score-icon"><span class="score-icon-bg" style="width:{{ $merch_cmt['cmt']['all_zconments']['allReview'] }}%;"></span></span>
                            <span>{{ $merch_cmt['cmt']['all_zconments']['score'] }}</span>
                            <i class="iconfont icon-down"></i>
                        </div>
                        <div class="g-s-parts">
                            <div class="parts-item parts-goods">
                                <span class="col1">{{ $lang['evaluation_single'] }}</span>
                                <span class="col2
@if($merch_cmt['cmt']['commentRank']['zconments']['is_status'] == 1)
ftx-01
@elseif ($merch_cmt['cmt']['commentRank']['zconments']['is_status'] == 2)
average
@else
ftx-02
@endif
">{{ $merch_cmt['cmt']['commentRank']['zconments']['score'] }}<i class="iconfont icon-arrow-
@if($merch_cmt['cmt']['commentRank']['zconments']['is_status'] == 1)
up
@elseif ($merch_cmt['cmt']['commentRank']['zconments']['is_status'] == 2)
average
@else
down
@endif
"></i></span>
                            </div>
                            <div class="parts-item parts-goods">
                                <span class="col1">{{ $lang['service_attitude'] }}</span>
                                <span class="col2
@if($merch_cmt['cmt']['commentServer']['zconments']['is_status'] == 1)
ftx-01
@elseif ($merch_cmt['cmt']['commentServer']['zconments']['is_status'] == 2)
average
@else
ftx-02
@endif
">{{ $merch_cmt['cmt']['commentServer']['zconments']['score'] }}<i class="iconfont icon-arrow-
@if($merch_cmt['cmt']['commentServer']['zconments']['is_status'] == 1)
up
@elseif ($merch_cmt['cmt']['commentServer']['zconments']['is_status'] == 2)
average
@else
down
@endif
"></i></span>
                            </div>
                            <div class="parts-item parts-goods">
                                <span class="col1">{{ $lang['delivery_speed'] }}</span>
                                <span class="col2
@if($merch_cmt['cmt']['commentDelivery']['zconments']['is_status'] == 1)
ftx-01
@elseif ($merch_cmt['cmt']['commentDelivery']['zconments']['is_status'] == 2)
average
@else
ftx-02
@endif
">{{ $merch_cmt['cmt']['commentDelivery']['zconments']['score'] }}<i class="iconfont icon-arrow-
@if($merch_cmt['cmt']['commentDelivery']['zconments']['is_status'] == 1)
up
@elseif ($merch_cmt['cmt']['commentDelivery']['zconments']['is_status'] == 2)
average
@else
down
@endif
"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="seller-item">
                    	<a href="javascript:void(0);" ectype="collect_store" data-type='goods' data-value='{"userid":{{ $user_id }},"storeid":{{ $goods['user_id'] }}}' class="gz-store" data-url="{{ $goods['goods_url'] }}"></a>
                        <a href="{{ $goods['store_url'] }}" class="store-home"><i class="iconfont icon-home-store"></i>{{ $lang['seller_store'] }}</a>
                        <input type="hidden" name="error" value="{{ $goods['error'] }}" id="error"/>
                    </div>
                    <div class="seller-tel"><i class="iconfont icon-tel"></i>{{ $shop_information['kf_tel'] }}</div>
                </div>

@endif

            </div>
            <div id="pingou-process" class="pingou-process">
            	<h3>{{ $lang['presale_process'] }}</h3>
                <div class="item">
                    <i class="sprite-step1"></i>
                    <dl>
                        <dt>1.{{ $lang['Pay_deposit'] }}</dt>
                        <dd class="presale-time">{{ $presale['start_time'] }} ~ {{ $presale['end_time'] }}</dd>
                    </dl>
                    <span class="sprite-arrow"></span>
                </div>
                <div class="item">
                    <i class="sprite-step2"></i>
                    <dl>
                        <dt>2.{{ $lang['Payment_tail'] }}<em>（{{ $lang['operationinmy_oreder'] }}）</em></dt>
                        <dd class="balance-time">{{ $presale['pay_start_time'] }} ~ {{ $presale['pay_end_time'] }}</dd>
                    </dl>
                    <span class="sprite-arrow"></span>
                </div>
                <div class="item">
                    <i class="sprite-step3"></i>
                    <dl>
                        <dt>3.{{ $lang['Goods_delivery'] }}</dt>
                        <dd>{{ $lang['presale_Estimate'] }}<span class="" id="shipping_time"></span> {{ $lang['presale_Estimate_two'] }}</dd>
                    </dl>
                </div>
            </div>
            <div class="clear"></div>
            <div class="goods-main-layout">
                <div class="g-m-left">
                    @include('frontend::library/goods_merchants')


@if($basic_info['kf_type'] == 1)


@if($basic_info['kf_ww_all'])

                        <div class="g-main service_list">
                            <div class="mt"><h3>{{ $lang['store_Customer_service'] }}</h3></div>
                            <div class="mc">
                                <ul>

@foreach($basic_info['kf_ww_all'] as $kf_ww)

                                    <li><a href="http://www.taobao.com/webww/ww.php?ver=3&touid={{ $kf_ww['1'] }}&siteid=cntaobao&status=1&charset=utf-8" target="_blank"><i class="icon_service_ww"></i><span>{{ $kf_ww['0'] }}</span></a></li>

@endforeach

                                </ul>
                            </div>
                        </div>

@endif


@else


@if($basic_info['kf_qq_all'])

                        <div class="g-main service_list">
                            <div class="mt"><h3>{{ $lang['store_Customer_service'] }}</h3></div>
                            <div class="mc">
                                <ul>

@foreach($basic_info['kf_qq_all'] as $kf_qq)

                                        <li class="service_qq"><a href="http://wpa.qq.com/msgrd?v=3&uin={{ $kf_qq['1'] }}&site=qq&menu=yes" target="_blank"><i class="icon i-kefu"></i><span>{{ $kf_qq['0'] }}</span></a></li>

@endforeach

                                </ul>
                            </div>
                        </div>

@endif


@endif



@if($goods_store_cat)

                    <div class="g-main g-store-cate">
                    	<div class="mt">
                            <h3>{{ $lang['Store_cat'] }}</h3>
                        </div>
                        <div class="mc">
                            <div class="g-s-cate-warp">

@foreach($goods_store_cat as $key => $cat)

                            	<dl
@if($cat['cat_id'])
 ectype="cateOpen"
@else
 class="hover"
@endif
>
                                    <dt><i class="icon"></i><a href="{{ $cat['url'] }}" target="_blank">{{ $cat['name'] }}</a></dt>

@if($cat['cat_id'])

                                    <dd>

@foreach($cat['cat_id'] as $key => $cat)

                                    	<a href="{{ $cat['url'] }}" class="a-item" target="_blank">&gt; {{ $cat['name'] }}</a>

@endforeach

                                    </dd>

@endif

                                </dl>

@endforeach

                            </div>
                        </div>
                    </div>

@endif



@if($goods_related_cat)

                    <div class="g-main">
                    	<div class="mt">
                            <h3>{{ $lang['relevant_cat'] }}</h3>
                        </div>
                        <div class="mc">
                            <div class="mc-warp">
                            	<div class="items">

@foreach($goods_related_cat as $cat)


@if($loop->iteration < 11)

                                    <div class="item"><a href="{{ $cat['url'] }}" target="_blank">{{ $cat['cat_name'] }}</a></div>

@endif


@endforeach

                                </div>
                            </div>
                        </div>
                    </div>

@endif



                    @include('frontend::library/goods_related')

                </div>
                <div class="g-m-detail">
                	<div class="gm-tabbox" ectype="gm-tabs">
                    	<ul class="gm-tab">
                            <li class="curr" ectype="gm-tab-item">{{ $lang['Product_details'] }}</li>

@if($properties)
<li ectype="gm-tab-item-spec">{{ $lang['specification'] }}</li>
@endif

                            <li ectype="gm-tab-item">{{ $lang['user_comment'] }}（<em class="ReviewsCount">{{ $comment_all['allmen'] }}</em>）</li>
                            <li ectype="gm-tab-item">{{ $lang['discuss_user'] }}</li>
                        </ul>
                        <div class="extra">
                        	<div class="item">

@if($two_code)

                                <div class="si-phone-code">
                                    <div class="qrcode-wrap">
                                        <div class="qrcode_tit">{{ $lang['summary_phone'] }}<i class="iconfont icon-qr-code"></i></div>
                                        <div class="qrcode_pop">
                                            <div class="mobile-qrcode"><img src="{{ $weixin_img_url }}" alt="{{ $lang['two_code'] }}" title="{{ $weixin_img_text }}" width="175"></div>
                                        </div>
                                    </div>
                                </div>

@endif

                            </div>
                        </div>
                        <div class="gm-tab-qp-bort" ectype="qp-bort"></div>
                    </div>
                    <div class="gm-floors" ectype="gm-floors">
                        <div class="gm-f-item gm-f-details" ectype="gm-item">
                            <div class="gm-title">
                                <h3>{{ $lang['Product_details'] }}</h3>
                            </div>
                            <div class="goods-para-list">
                                <dl class="goods-para">
                                    <dd class="column"><span>{{ $lang['goods_name'] }}：{{ $goods['goods_name'] }}</span></dd>
                                    <dd class="column"><span>{{ $lang['Commodity_number'] }}：{{ $goods['goods_sn'] }}</span></dd>
                                    <dd class="column"><span>{{ $lang['seller_store'] }}：<a href="{{ $goods['store_url'] }}" title="{{ $goods['rz_shopName'] }}" target="_blank">{{ $goods['rz_shopName'] }}</a></span></dd>

@if($cfg['show_goodsweight'])

                                    <dd class="column"><span>{{ $lang['weight'] }}：{{ $goods['goods_weight'] }}</span></dd>

@endif


@if($cfg['show_addtime'])

                                    <dd class="column"><span>{{ $lang['add_time'] }}{{ $goods['add_time'] }}</span></dd>

@endif

                                </dl>


@if($properties)

                                <dl class="goods-para">

@foreach($properties as $key => $property_group)


@foreach($property_group as $property)


@if($loop->iteration < 13)

                                    <dd class="column"><span title="{{ $property['value'] }}">{{ $property['name'] }}：{{ $property['value'] }}</span></dd>

@endif


@endforeach


@endforeach

                                </dl>

@endif


@if($extend_info)

                                <dl class="goods-para">

@foreach($extend_info as $key => $info)

                                    <dd class="column"><span title="{{ $info }}">{{ $key }}：{{ $info }}</span></dd>

@endforeach

                                </dl>

@endif


@if($properties)

                                <p class="more-par">
                                    <a href="javascript:void(0);" ectype="product-detail" class="ftx-05">{{ $lang['more_parameters'] }}>></a>
                                </p>

@endif

                            </div>

                            {{ $presale['act_desc'] }}
                        </div>

@if($properties)

                        <div class="gm-f-item gm-f-parameter" ectype="gm-item" id="product-detail" style="display:none;">
                            <div class="gm-title">
                                <h3>{{ $lang['specification'] }}</h3>
                            </div>
                            <div class="Ptable">

@foreach($properties as $key => $property_group)

                                <div class="Ptable-item">
                                    <h3>{{ $key }}</h3>
                                    <dl>

@foreach($property_group as $property)

                                        <dt>{{ $property['name'] }}</dt>
                                        <dd title="{{ $property['value'] }}">{{ $property['value'] }}</dd>

@endforeach

                                    </dl>
                                </div>

@endforeach

                            </div>
                        </div>

@endif

                        <div class="gm-f-item gm-f-comment" ectype="gm-item">
                            <div class="gm-title">
                                <h3>{{ $lang['comment_sunburn'] }}</h3>
                                {{-- DSC 提醒您：动态载入goods_comment_title.lbi，显示首页分类小广告 --}}
{!! insert_goods_comment_title(['goods_id' => $goods['goods_id']]) !!}
                            </div>
                            <div class="gm-warp">
                                <div class="praise-rate-warp">
                                    <div class="rate">
                                        <strong>{{ $comment_all['goodReview'] }}</strong>
                                        <span class="rate-span">
                                            <span class="tit">{{ $lang['Rate_praise'] }}</span>
                                            <span class="bf">%</span>
                                        </span>
                                    </div>
                                    <div class="actor-new">

@if($goods['impression_list'])

                                        <dl>

@foreach($goods['impression_list'] as $tag)

                                            <dd>{{ $tag['txt'] }}({{ $tag['num'] }})</dd>

@endforeach

                                        </dl>

@else

                                        <div class="not_impression">{{ $lang['not_impression'] }}</div>

@endif

                                    </div>
                                </div>
                                <div class="com-list-main">
                                @include('frontend::library/comments')
                                </div>
                            </div>
                        </div>
                        <div class="gm-f-item gm-f-tiezi" ectype="gm-item">
                            {{-- DSC 提醒您：动态载入goods_discuss_title.lbi，显示首页分类小广告 --}}
{!! insert_goods_discuss_title(['goods_id' => $goods['goods_id']]) !!}
                            <div class="table" id='discuss_list_ECS_COMMENT'>
                                @include('frontend::library/comments_discuss_list1')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>
                <div class="rection" id="guess_goods_love">
                </div>
            </div>
        </div>
    </div>


	@include('frontend::library/duibi')


    @include('frontend::library/page_footer')

    {{-- DSC 提醒您：动态载入user_menu_position.lbi，显示首页分类小广告 --}}
{!! insert_user_menu_position(['ru_id' => $goods['user_id']]) !!}


<script type="text/javascript" src="{{ asset('js/jquery.SuperSlide.2.1.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.yomi.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/compare.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cart_common.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/warehouse_area.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/magiczoomplus.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cart_quick_links.js') }}"></script>
	<script type="text/javascript" src="{{ skin('js/dsc-common.js') }}"></script>
    <script type="text/javascript" src="{{ skin('js/jquery.purebox.js') }}"></script>

    <script type="text/javascript">

		//商品详情
		goods_desc_floor();

		//右侧看了又看上下滚动
		$(".track_warp").slide({mainCell:".track-con ul",effect:"top",pnLoop:false,autoPlay:false,autoPage:true,prevCell:".sprite-up",nextCell:".sprite-down",vis:3});

		function presale_submit()
		{
			var is_ok = 1;
			var status={{ $presale['status'] ?? 0 }};
			var user_id = {{ $user_id }};
			var qty = Number($("#quantity").val());

			if(user_id >0){
				//商品属性组是否有选中
				var attr_list = 0;
				var is_selected = 0;
				$(".goods_info_attr").each(function(index, element) {
					attr_list = index + 1;

					if($(this).find(".item").hasClass("selected")){
						is_selected = is_selected + 1
					}
				});

				//先判断是否选中商品规格
				if($(".goods_info_attr").length > 0){
					if(attr_list != is_selected){
						get_goods_prompt_message(json_languages.Product_spec_prompt);
						is_ok = 0;
					}else{
						is_ok = 1;
					}
				}

				//判断商品限购

@if($xiangou == 1)


@if($presale['is_xiangou']==1 && $presale['xiangou_num'] > 0)

						var xuangou_num = {{ $presale['xiangou_num'] }};
						var xiangou = {{ $xiangou }};
						var total_goods = Number({{ $orderG_number ?? 0 }});

						if(total_goods >= xuangou_num){
							var message = json_languages.Already_buy + total_goods + json_languages.Already_buy_two;
							is_ok = 0;
						}else if(((qty >= total_goods && total_goods > 0) || qty > xuangou_num) && xuangou_num > 0 && xiangou == 1){
							if ((qty >= total_goods && total_goods > 0) || total_goods >= xuangou_num){
								var message = json_languages.Already_buy + '{{ $orderG_number }}' + json_languages.Already_buy_two;
							}else{
								var message = json_languages.Purchase_quantity;
							}

							is_ok = 0;
						}

						if(is_ok == 0){
							pbDialog(message,"",0);
						}


@endif


@endif


				if(is_ok == 1){
					if(status != 1){
						pbDialog(presrll_desc_end,"",0);
					}else{
						document.getElementById("ECS_FORMBUY").submit();
					}
				}
			}else{
				var back_url = "presale.php?act=view&id=" + {{ $presale['act_id'] }};
				$.notLogin("get_ajax_content.php?act=get_login_dialog",back_url);
			}
		}
	</script>
    <script type="text/javascript">
    region.detail = true;

	var seller_id = {{ $goods['user_id'] ?? 0 }};
	var goods_id = {{ $goods_id ?? 0 }};
	var goodsId = {{ $goods_id ?? 0 }};
	var goodsattr_style = {{ $cfg['goodsattr_style'] ?? 1 }};
	var gmt_end_time = {{ $promote_end_time ?? 0 }};
	var now_time = {{ $now_time }};
	var isReturn = false;
	var act_id = {{ $act_id }};
	var add_shop_price = $("*[ectype='add_shop_price']").val();

	$(function(){

		seeMorePresale();

		guessGoodsLove();

		if(add_shop_price == 0){
			$(":input[name='goods_attr_id']").val('');
		}

		if(seller_id > 0){
			goods_collect_store(seller_id);
		}

		//对比默认加载
		Compare.init();
	});

    /* 点击可选属性或改变数量时修改商品价格的函数 */
    function changePrice(type){
       	var qty = $("*[ectype='quantity']").val();
		var goods_attr_id = '';
		var goods_attr = '';
		var attr_id = '';
		var attr = '';
		var region_id = $(":input[name='region_id']").val();
		var area_id = $(":input[name='area_id']").val();

		if(!region_id){
		   region_id = {{ $region_id ?? 0 }};
	   }

	   if(!area_id){
		   area_id = {{ $area_id ?? 0 }};
	   }

		goods_attr_id = getSelectedAttributes(document.forms['ECS_FORMBUY']);

		$("#goods_attr_id").val(goods_attr_id);

		if(type != 1){
			if(add_shop_price == 0){
				attr_id = getSelectedAttributesGroup(document.forms['ECS_FORMBUY']);
				goods_attr = '&goods_attr=' + attr_id;
			}
			Ajax.call('presale.php', 'act=price&id=' + goodsId + '&attr=' + goods_attr_id + goods_attr + '&number=' + qty + '&warehouse_id=' + region_id + '&area_id=' + area_id, changePriceResponse, 'GET', 'JSON');
		}else{
			attr = '&attr=' + goods_attr_id;
			Ajax.call('presale.php', 'act=price&id=' + goodsId + attr + '&number=' + qty + '&warehouse_id=' + region_id + '&area_id=' + area_id + '&type=' + type, changePriceResponse, 'GET', 'JSON');
		}
    }

    /**
     * 接收返回的信息
     */
    function changePriceResponse(res){
		if(res.err_msg.length > 0){
			pbDialog(res.err_msg," ",0,450,80,50);
		}else{
        	//document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

			//更新库存
			if($("*[ectype='goods_attr_num']").length > 0){
				$("*[ectype='goods_attr_num']").html(res.attr_number);
				$("*[ectype='perNumber']").val(res.attr_number);
			}

			//更新已购买数量
			if($("#orderG_number").length > 0){
				$("#orderG_number").html(res.orderG_number);
			}

			if($("#ECS_SHOPPRICE").length > 0){
				//商品价格
				if(res.type == 1){
					$("#ECS_SHOPPRICE").html(res.result);
				}else{
					if(res.show_goods == 1){
						$("#ECS_SHOPPRICE").html(res.spec_price);
					}else{
						$("#ECS_SHOPPRICE").html(res.result);
					}
				}
			}

			if(res.err_no == 2){
				$('#isHas_warehouse_num').html(json_languages.shiping_prompt);
			}else{
				var isHas;
				var is_shipping = Number($("#is_shipping").val());
				if($("#isHas_warehouse_num").length > 0){
					var status = {{ $cfg['add_shop_price'] }};
					if(res.attr_number > 0){
						$("a[ectype='btn-append']").attr('href','javascript:addToCartShowDiv({{ $goods['goods_id'] }})').removeClass('btn_disabled');
                        @if($user_id <= 0 && $one_step_buy)
						$("a[ectype='btn-buynow']").attr('href','#none').removeClass('btn_disabled');
                        @else
						$("a[ectype='btn-buynow']").attr('href','javascript:addToCart({{ $goods['goods_id'] }})').removeClass('btn_disabled');
                        @endif
						$("a[ectype='byStages']").removeClass('btn_disabled');
						$('a').remove('#quehuo');
						isHas = '<strong>'+json_languages.Have_goods+'</strong>，'+json_languages.Deliver_back_order;

						$("a[ectype='btn-buynow']").show();
						$("a[ectype='btn-append']").show();
						$("a[ectype='byStages']").show();
					}else{
						isHas = '<strong>'+json_languages.No_goods+'</strong>，'+json_languages.goods_over;

						$("a[ectype='btn-buynow']").attr('href','javascript:void(0)').addClass('btn_disabled');
						$("a[ectype='btn-append']").attr('href','javascript:void(0)').addClass('btn_disabled');
						$("a[ectype='byStages']").addClass('btn_disabled');
					}

					if(is_shipping == 0){
						isHas = '<strong>'+json_languages.Have_goods+'</strong>，' + json_languages.shiping_prompt;
					}

					$("#isHas_warehouse_num").html(isHas);
				}
			}

			$("#shipping_time").html(res.presale.str_time);
			$('.ECS_fittings_interval').html(res.shop_price);
			//ecmoban模板堂 --zhuo end
		}

		if(res.type == 1){
			quantity();
		}
    }


    region.changedDis_pre = function(district_id,user_id,d_null)
    {
        var province_id = document.getElementById('province_id').value;
        var city_id = document.getElementById('city_id').value;
        var area_div = document.getElementById('area_list');
        var goods_id = document.getElementById('good_id').value;

        if(d_null == 1){
            var d_null = "&d_null=" + d_null;
        }else{
            d_null = '';
        }
        area_div.style.display = 'none';
        Ajax.call('presale.php', 'act=in_stock&gid='+ goods_id + '&act_id='+ act_id + '&province=' + province_id + "&city=" + city_id + "&district=" + district_id + "&user_id=" + user_id + d_null, inStockResponse, "GET", "JSON");

    }

    inStockResponse = function(res)
    {
        if(res.isRegion == 0){

            if (confirm(res.message))
              {
                    var district_id = document.getElementById('district_id');
                    district_id.value = res.district;
                    location.href = 'user_address.php?act=address_list';
              }else{
                    location.href = "presale.php?act=view&id=" + res.act_id + "&t=" + parseInt(Math.random()*1000) + "#areaAddress";
              }

            return false;
        }else{
            location.href = "presale.php?act=view&id=" + res.act_id + "&t=" + parseInt(Math.random()*1000) + "#areaAddress";
        }
    }

    /**
     * 猜你喜欢-换一组
     */
    function change_group(){
		var region_id = $(":input[name='region_id']").val();
		var area_id = $(":input[name='area_id']").val();

		if(!region_id){
		   region_id = {{ $region_id ?? 0 }};
	   }

	   if(!area_id){
		   area_id = {{ $area_id ?? 0 }};
	   }

        var page = 1;
        $(".ecsc-goods-love .ec-huan").click(function(){
                page++;
                if(page == 4){
                        page = 1;
                }
                Ajax.call('ajax_goods.php?act=guess_goods', 'page=' + page + '&warehouse_id=' + region_id + '&area_id=' + area_id , guessGoodsResponse, 'GET', 'JSON');
        });
    }
    function guessGoodsResponse(data){
        $("#goodsLove_content").html(data.result);
    }
    </script>
    <script type="text/javascript">
		$(window).load(function(){
			$("#footer").css({"z-index":666});
		});

        //倒计时
        $(".time").each(function(){
            $(this).yomi();
        });

        $(".choose .attr-radio .item").click(function(){
            $(this).addClass("selected").siblings().removeClass("selected");
            $(this).find("input[type='radio']").prop("checked",true);

        });

        $(".choose .attr-check .item").click(function(){
            var len = $(this).parent().find(".selected").length;
            if($(this).hasClass("selected")){
                if(len<=1)return;
                $(this).removeClass("selected");
                $(this).find("input[type='checkbox']").prop("checked",false);
            }else{
                $(this).addClass("selected");
                $(this).find("input[type='checkbox']").prop("checked",true);
            }
        });

		//店铺分类展开
		$("#sp-category dt").click(function(){
			if($(this).parent().hasClass("open")){
				$(this).parent().removeClass("open");
			}else{
				$(this).parent().addClass("open");
				$(this).parent().siblings().removeClass("open");
			}
		});

		/* 商品看了又看 start */
		function seeMorePresale(){
			Ajax.call('ajax_dialog.php', 'act=see_more_presale&goods_id=' + goodsId + '&cat_id=' + {{ $presale['pa_catid'] ?? 0 }}, seeMorePresaleResponse, 'GET', 'JSON');
		}

		function seeMorePresaleResponse(res){
			$("#look_top").html(res.content);

			//右侧看了又看上下滚动
			$(".track_warp").slide({mainCell:".track-con ul",effect:"top",pnLoop:false,autoPlay:false,autoPage:true,prevCell:".sprite-up",nextCell:".sprite-down",vis:3});
		}
		/* 商品看了又看 end */

		/* 商品猜你喜欢 start */
		function guessGoodsLove(){
			var region_id = $(":input[name='region_id']").val();
			var area_id = $(":input[name='area_id']").val();
			var area_city = $(":input[name='area_city']").val();

			if(!region_id){
			   region_id = {{ $region_id ?? 0 }};
		   }

		   if(!area_id){
			   area_id = {{ $area_id ?? 0 }};
		   }

		   if(!area_city){
               area_city = {{ $area_city ?? 0 }};
           }

			Ajax.call('ajax_goods.php', 'act=guess_goods_love&goods_id=' + goodsId + '&warehouse_id=' + region_id + '&area_id=' + area_id + '&area_city=' + area_city, guessGoodsLoveResponse, 'GET', 'JSON');
		}

		function guessGoodsLoveResponse(res){
			$("#guess_goods_love").html(res.content);
		}
		/* 商品猜你喜欢 end */
    </script>
    {{-- DSC 提醒您：动态载入goods_delivery_area_js.lbi，显示首页分类小广告 --}}
{!! insert_goods_delivery_area_js(['area' => $area]) !!}
</body>
</html>
