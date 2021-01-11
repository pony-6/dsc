<!doctype html>
<html>
<head><meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="{{ $keywords }}" />
<meta name="Description" content="{{ $description }}" />

<title>{{ $page_title }}</title>



<link rel="shortcut icon" href="favicon.ico" />
@include('frontend::library/js_languages_new')
</head>

<body class="coudan">
	@include('frontend::library/page_header_category')
    <div class="container">
    	<div class="w w1390">
        	<div class="coudan-title"></div>
            <div class="filter">
            	<div class="filter-wrap">
                    <div class="filter-sort">
						<a href="coudan.php?id={{ $active_id }}&sort=goods_id&order=
@if($pager['search']['sort'] == 'goods_id' && $pager['search']['order'] == 'DESC')
ASC
@else
DESC
@endif
" class="button-strip-item
@if($pager['search']['sort'] == 'goods_id')
curr
@endif
">{{ $lang['default'] }}<i class="iconfont
@if($pager['search']['sort'] == 'goods_id' && $pager['search']['order'] == 'DESC')
icon-arrow-down
@else
icon-arrow-up
@endif
"></i></a>
						<a href="coudan.php?id={{ $active_id }}&sort=shop_price&order=
@if($pager['search']['sort'] == 'shop_price' && $pager['search']['order'] == 'DESC')
ASC
@else
DESC
@endif
" class="button-strip-item
@if($pager['search']['sort'] == 'shop_price')
curr
@endif
">{{ $lang['price'] }}<i class="iconfont
@if($pager['search']['sort'] == 'shop_price' && $pager['search']['order'] == 'DESC')
icon-arrow-down
@else
icon-arrow-up
@endif
"></i></a>
						<a href="coudan.php?id={{ $active_id }}&sort=sales_volume&order=
@if($pager['search']['sort'] == 'sales_volume' && $pager['search']['order'] == 'DESC')
ASC
@else
DESC
@endif
" class="button-strip-item
@if($pager['search']['sort'] == 'sales_volume')
curr
@endif
">{{ $lang['sales_volume'] }}<i class="iconfont
@if($pager['search']['sort'] == 'sales_volume' && $pager['search']['order'] == 'DESC')
icon-arrow-down
@else
icon-arrow-up
@endif
"></i></a>
					</div>
                    <div class="filter-right">
                    	<div class="button-page">
                        	<span class="pageState"><span>{{ $pager['page'] }}</span>/{{ $pager['page_count'] }}</span>
                            <a href="{{ $pager['page_prev'] }}"><i class="iconfont icon-left"></i></a>
                            <a href="{{ $pager['page_next'] }}"><i class="iconfont icon-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="g-view w">
                <div class="goods-list goods-list-w1390" ectype="gMain">
                    <ul class="gl-warp gl-warp-large">

@foreach($favourable_goods as $goods)

                    	<li class="gl-item">
                        	<div class="gl-i-wrap">
                        		<div class="p-img"><a href="{{ $goods['url'] }}" target="_blank"><img src="{{ $goods['goods_thumb'] }}" /></a></div>
                                <div class="p-lie">
                                	<div class="p-price">{{ $goods['format_shop_price'] }}</div>
                                </div>
                                <div class="p-name"><a href="{{ $goods['url'] }}" title="{{ $goods['goods_name'] }}" target="_blank">{{ $goods['goods_name'] }}</a></div>
                            	<div class="p-operate">
                                	<a href="javascript:void(0);" id="{{ $goods['goods_id'] }}" onclick="add_cart({{ $goods['goods_id'] }},{{ $active_id }})" class="addcart"><i class="iconfont icon-carts"></i>{{ $lang['btn_add_to_cart'] }}</a>
                                </div>
                            </div>
                        </li>

@endforeach

                    </ul>
					<input type="hidden" value="{{ $region_id ?? 0 }}" id="region_id" name="region_id">
					<input type="hidden" value="{{ $area_id ?? 0 }}" id="area_id" name="area_id">
                    <input type="hidden" value="{{ $area_city ?? 0 }}" id="area_city" name="area_city">
                    <div class="clear"></div>
                </div>
                <div class="floatbar-cart" id="coudan-top-list">
					@include('frontend::library/coudan_top_list')
                </div>
        	</div>
            <div class="p-panel-main guess-love">
            	<div class="ftit ftit-delr"><h3>{{ $lang['guess_love'] }}</h3></div>
                <div class="gl-list clearfix">
                	<ul class="clearfix">

@foreach($guess_goods as $goods)

                    	<li class="opacity_img">
                        	<div class="p-img"><a href="{{ $goods['url'] }}" target="_blank"><img src="{{ $goods['goods_thumb'] }}" width="190" height="190"></a></div>
                            <div class="p-price">

@if($goods['promote_price'] != '')

                                    {{ $goods['promote_price'] }}

@else

                                    {{ $goods['shop_price'] }}

@endif

                            </div>
                            <div class="p-name"><a href="{{ $goods['url'] }}" title="{{ $goods['goods_name'] }}" target="_blank">{{ $goods['goods_name'] }}</a></div>
                        	<div class="p-num">{{ $lang['Sold'] }}<em>{{ $goods['sales_volume'] }}</em>{{ $lang['jian'] }}</div>
                        </li>

@endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
	@include('frontend::library/page_footer')

<script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
    <script type="text/javascript" src="{{ skin('js/jquery.purebox.js') }}"></script>
    <script type="text/javascript" src="{{ skin('js/dsc-common.js') }}"></script>
    <script type="text/javascript">

		$(function (){
			getCoudan({{ $active_id ?? 0 }});
		});

        function add_cart(goodsId, active_id)
        {
          var goods        = new Object();
          var spec_arr     = new Array();
          var fittings_arr = new Array();
          var number       = 1;
          var formBuy      = document.forms['ECS_FORMBUY'];
          var quick        = 0;

          // 检查是否有商品规格
          if (formBuy)
          {
            spec_arr = getSelectedAttributes(formBuy);

            if (formBuy.elements['number'])
            {
              number = formBuy.elements['number'].value;
            }

            quick = 1;
          }

          //ecmoban模板堂 --zhuo 仓库ID start
          if(document.getElementById('region_id')){
              var warehouse_id = document.getElementById('region_id').value;
              goods.warehouse_id   = warehouse_id;
          }

          //地区ID
          if(document.getElementById('area_id')){
              var area_id = document.getElementById('area_id').value;
              goods.area_id = area_id;
          }

		  //地区ID
          if(document.getElementById('area_city')){
              var area_city = document.getElementById('area_city').value;
              goods.area_city = area_city;
          }
          //ecmoban模板堂 --zhuo 仓库ID end

          goods.active_id = active_id;
          goods.quick    = quick;
          goods.spec     = spec_arr;
          goods.goods_id = goodsId;
          goods.number   = number;
          //goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);

          Ajax.call('coudan.php?act=ajax_update_cart', 'goods=' + $.toJSON(goods), add_cart_response, 'POST', 'JSON');
        }

        function add_cart_response(result){
			if(result.error > 0){
                // 如果需要缺货登记，跳转
                if(result.error == 2){
                    var add_cart_divId = 'flow_add_cart';
                    var content = '<div id="flow_add_cart">' +
                                        '<div class="tip-box icon-box">' +
                                            '<span class="warn-icon m-icon"></span>' +
                                            '<div class="item-fore">' +
                                                '<h3 class="rem ftx-04">' + result.message + '</h3>' +
                                            '</div>' +
                                        '</div>' +
                                    '</div>';
                    pb({
                        id:add_cart_divId,
                        title : json_languages.pb_title,
                        width:455,
                        height:88,
                        ok_title:json_languages.determine,
                        cl_title:json_languages.cancel,
                        content:content,
                        drag:false,
                        foot:true,
                        onOk:function(){
                            location.href = 'user.php?act=add_booking&id=' + result.goods_id + '&spec=' + result.product_spec;
                        }
                    });

                    $('#' + add_cart_divId + ' .tip-box h3').css({
                        'line-height' : '20px',
                        'padding-top' : '5px',
                        'font-size'	  : '14px'
                    });

                    $('#' + add_cart_divId + ' .item-fore').css({
                        'height' : '68px'
                    });

                    $('#' + add_cart_divId + ' .pb-ft .pb-ok').addClass('color_df3134');
                }else if (result.error == 6){
					// 没选规格，弹出属性选择框
                	openCoudanSpeDiv(result.message, result.goods_id, result.parent, result.warehouse_id, result.area_id, result.active_id);
                }else{
                	alert(result.message);
                }
			}else{

				getCoudan(result.active_id);

				// 更新加入购物车的活动商品
				var cartInfo = document.getElementById('coudan-top-list');
				if(cartInfo){
					cartInfo.innerHTML = result.content;
				}

				pbDialog("{{ $lang['goods_join_cart'] }}","",1,"","","",false,function(){});
			}
        }

        //生成属性选择层
        function openCoudanSpeDiv(message, goods_id, parent, warehouse_id, area_id, active_id)
        {
          pb({
                    id:'addCartLog',
                    title:json_languages.Select_attr,
                    width:500,
                    content:message,
                    ok_title:json_languages.determine,
                    cl_title:json_languages.cancel,
                    drag:false,
                    foot:true,
                    onOk:function(){
                        submit_div(goods_id, parent, warehouse_id, area_id,active_id);
                    }
            });
            $('.pb-ok').addClass('color_df3134');
            $(".attr_list .item li").click(function(){
                var type=$(this).find('input').attr("type");
                if(type == "checkbox")
                {
                    var length = 0;
                    if($(this).hasClass("selected"))
                    {
                        $(this).removeClass("selected");
                        $(this).find("input[type='checkbox']").prop("checked",false);
                        length =$(this).parent().find(".selected").length;
                        if(length<1){
                            pbDialog(json_languages.Select_attr,"",0);
                            $(this).addClass("selected");
                            $(this).find("input[type='checkbox']").prop("checked",true);
                        }
                    }
                    else
                    {
                        $(this).addClass("selected");
                        $(this).find("input[type='checkbox']").prop("checked",true);
                    }
                }
                else
                {
                    $(this).addClass("selected").siblings().removeClass("selected");
                    $(this).find("input[type='radio']").prop("checked",true);
                }
            });
        }
    </script>
</body>
</html>
