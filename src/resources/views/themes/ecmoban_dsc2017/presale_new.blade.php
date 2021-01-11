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
</head>

<body class="show">
@include('frontend::library/page_header_presale')
{{-- DSC 提醒您：动态载入presale_banner_new.lbi，显示首页分类小广告 --}}
{!! insert_get_adv_child(['ad_arr' => $presale_banner_new]) !!}

<div class="preSale-filter">
    <div id="filter">
        <div class="filter-section-wrapper mb-component mt-component w1200 mt20 w">
            <div class="component-filter component-filter-category">
                <div class="filter-label-list">
                    <div class="label">{{ $lang['category'] }}：</div>
                    <div class="filter-quanbu
@if($pager['cat_id'] == 0 )
selected
@endif
"><a href="{{ $pre_status['status_cat'] }}">{{ $lang['all_attribute'] }}</a></div>
                    <ul class="inline-block-list">

@foreach($pre_category as $category)

                        <li
@if($pager['cat_id'] == $category['cat_id'] )
class="selected"
@endif
><a href="{{ $category['url'] }}">{{ $category['cat_name'] }}</a></li>

@endforeach

                    </ul>
                </div>
                <div class="filter-label-list">
                    <div class="label">{{ $lang['au_bid_status'] }}：</div>
                    <div class="filter-quanbu
@if($pager['status'] == 0 )
selected
@endif
"><a href="{{ $pre_status['status_all'] }}">{{ $lang['all_attribute'] }}</a></div>
                    <ul class="inline-block-list">
                        <li
@if($pager['status'] == 1 )
class="selected"
@endif
><a href="{{ $pre_status['status_one'] }}">{{ $lang['begin_minute'] }}</a></li>
                        <li
@if($pager['status'] == 2 )
class="selected"
@endif
><a href="{{ $pre_status['status_two'] }}">{{ $lang['Appointment'] }}</a></li>
                        <li
@if($pager['status'] == 3 )
class="selected"
@endif
><a href="{{ $pre_status['status_three'] }}">{{ $lang['has_ended'] }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="content">
    <div class="preSaleNew-list w1200 pb40 w">

@if($date_result)


@foreach($date_result as $date_result_goods)

        <div class="preSaleNew-item">
            <div class="preSaleNewTime">
                <div class="p-data">
                    <span>{{ $date_result_goods['end_time_y'] }}&nbsp;{{ $lang['year'] }}&nbsp;{{ $date_result_goods['end_time_m'] }}&nbsp;{{ $lang['month'] }}</span>
                    <strong>{{ $date_result_goods['end_time_d'] }}</strong>
                </div>
                <div class="row"></div>
            </div>
            <div class="preSaleNewProduct">
                <ul>

@foreach($date_result_goods['goods'] as $goods)

                    <li>
                        <div class="p-warp">
                            <div class="p-img"><a href="{{ $goods['url'] }}" target="_blank"><img src="{{ $goods['thumb'] }}" width="196" height="196"/></a></div>
                            <div class="p-info">
                                <div class="p-name"><a href="{{ $goods['url'] }}" title="{{ $goods['goods_name'] }}" target="_blank">{{ $goods['goods_name'] }}</a></div>
                                <div class="p-item">
                                    <div class="p-price">{{ $goods['format_shop_price'] }}</div>
                                    <span class="appointment">{{ $lang['existing'] }}<em>{{ $goods['pre_num'] }}</em>{{ $lang['subscribe_p'] }}</span>
                                </div>
                                <div class="p-dibu">

@if($goods['no_start'] == 1)

                                        <div class="time"  ectype="time" data-time="{{ $goods['start_time_date'] }}">
                                            {{ $lang['Start_from'] }}<span class="days">17</span>{{ $lang['day'] }}&nbsp;<span class="hours">18</span>:<span class="minutes">26</span>:<span class="seconds">22</span>
                                        </div>
                                        <a class="btn" href="{{ $goods['url'] }}">{{ $lang['View_details'] }}</a>

@elseif ($goods['already_over'] == 1)

									    <a class="btn" >{{ $lang['presale_end'] }}</a>

@else

                                        <div class="time" ectype="time" data-time="{{ $goods['end_time_date'] }}">
                                            {{ $lang['Count_down'] }}<span class="days">17</span>{{ $lang['day'] }}&nbsp;<span class="hours">18</span>:<span class="minutes">26</span>:<span class="seconds">22</span>
                                        </div>
                                        <a class="btn" href="{{ $goods['url'] }}">{{ $lang['make_appointment_now'] }}</a>

@endif

                                </div>
                            </div>
                        </div>
                    </li>

@endforeach


                </ul>
            </div>
        </div>

@endforeach


@else

		<div class="no_records no_records_tc">
            <i class="no_icon_two"></i>
            <div class="no_info no_info_line">
                <h3>{{ $lang['cat_not_null'] }}</h3>
                <div class="no_btn">
                    <a href="index.php" class="btn sc-redBg-btn">{{ $lang['back_home'] }}</a>
                </div>
            </div>
        </div>

@endif

    </div>
</div>
@include('frontend::library/page_footer')

<script type="text/javascript" src="{{ asset('js/jquery.SuperSlide.2.1.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.yomi.js') }}"></script>
<script type="text/javascript" src="{{ skin('js/dsc-common.js') }}"></script>
<script type="text/javascript" src="{{ skin('js/jquery.purebox.js') }}"></script>
<script type="text/javascript">
	//日期链接竖线长度自定义
	$(".preSaleNew-item").each(function(){
		var height = $(this).height();
		var timeHeight =$(this).find(".p-data").height();
		var rowHeight = height - timeHeight;
		$(this).find(".preSaleNewTime").css("height",height);
		$(this).find(".row").css("height",rowHeight);
	});

	//倒计时JS
	$(".time").each(function(){
		$(this).yomi();
	});

	var length = $(".banner-new .bd ul").find("li").length;
	if(length>1){
		$(".banner-new").slide({titCell:".hd ul",mainCell:".bd ul",effect:"top",interTime:3500,delayTime:500,autoPlay:true,autoPage:true});
	}else{
		$(".banner-new .hd ul").hide();
	}
</script>
</body>
</html>
