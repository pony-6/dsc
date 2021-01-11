<div class="site-nav" id="site-nav">
    <div class="w w1200">
        <div class="fl">
        	{{-- DSC 提醒您：根据用户id来调用header_region_style.lbi显示不同的界面  --}}
{!! insert_header_region() !!}
            <div class="txt-info" id="ECS_MEMBERZONE">
			{{-- DSC 提醒您：根据用户id来调用member_info.lbi显示不同的界面  --}}
{!! insert_member_info() !!}
            </div>
        </div>
        <ul class="quick-menu fr">

@if($navigator_list['top'])


@foreach($navigator_list['top'] as $key => $nav)


@if($loop->index < 4)

            <li>
                <div class="dt"><a href="{{ $nav['url'] }}"
@if($nav['opennew'])
target="_blank"
@endif
>{{ $nav['name'] }}</a></div>
            </li>
            <li class="spacer"></li>

@endif


@endforeach


@endif


@if($navigator_list['top'])

            <li class="li_dorpdown" data-ectype="dorpdown">
                <div class="dt dsc-cm">{{ $lang['Site_navigation'] }}<i class="iconfont icon-down"></i></div>
                <div class="dd dorpdown-layer">
                    <dl class="fore1">
                        <dt>{{ $lang['characteristic_theme'] }}</dt>
                        <dd>

@foreach($top_cat_list as $key => $topc_cats)


@if($loop->index < 3)

                                    <div class="item"><a href="{{ $topc_cats['url'] }}" target="_blank">{{ $topc_cats['cat_alias_name'] }}</a></div>

@endif


@endforeach

                        </dd>
                    </dl>
                    <dl class="fore2">
                        <dt>{{ $lang['modules_txt_promo'] }}</dt>
                        <dd>

@foreach($navigator_list['top'] as $key => $nav)


@if($loop->index >= 4)

                                    <div class="item"><a href="{{ $nav['url'] }}"
@if($nav['opennew'])
 target="_blank"
@endif
>{{ $nav['name'] }}</a></div>

@endif


@endforeach

                        </dd>
                    </dl>
                </div>
            </li>

@endif

        </ul>
    </div>
</div>
<div class="header">
    <div class="w w1200">
        <div class="logo">
            <div class="logoImg"><a href="{{ $url_index }}"><img src="
@if($shop_logo)
{{ $shop_logo }}
@else
{{ skin('/images/logo.gif') }}
@endif
" /></a></div>

        </div>
        <div class="dsc-search">
            <div class="form">
                <form id="searchForm" name="searchForm" method="post" action="search.php" onSubmit="return checkSearchForm(this)" class="search-form">
                    <input autocomplete="off" onKeyUp="lookup(this.value);" name="keywords" type="text" id="keyword" value="
@if($search_keywords)
{{ $search_keywords }}
@else
{!! insert_rand_keyword() !!}
@endif
" class="search-text"/>
                    <input type="hidden" name="store_search_cmt" value="{{ $search_type ?? 0 }}">
                    <button type="submit" class="button button-goods" onclick="checkstore_search_cmt(0)">{{ $lang['serch_goods'] }}</button>
                    <button type="submit" class="button button-store" onclick="checkstore_search_cmt(1)">{{ $lang['serch_shop'] }}</button>
                @csrf </form>

@if($searchkeywords)

                <ul class="keyword">

@foreach($searchkeywords as $val)

                <li><a href="search.php?keywords={{ $val }}" target="_blank">{{ $val }}</a></li>

@endforeach

                </ul>

@endif


                <div class="suggestions_box" id="suggestions" style="display:none;">
                    <div class="suggestions_list" id="auto_suggestions_list">
                        &nbsp;
                    </div>
                </div>

            </div>
        </div>
        <div class="shopCart" data-ectype="dorpdown" id="ECS_CARTINFO" data-carteveval="0">
        {{-- DSC 提醒您：根据用户id来调用cart_info.lbi显示不同的界面  --}}
{!! insert_cart_info() !!}
        </div>
    </div>
</div>
<div class="nav
@if($filename != 'index')
dsc-zoom
@endif
 presale-css">
    <div class="w w1200 preSale">
        <div class="categorys
@if($filename != 'index')
site-mast
@endif
">
            <div class="categorys-type" id="presale"><a href="{{ $url_categoryall }}" target="_blank">{{ $lang['all_goods_cat'] }}</a></div>
            <div class="categorys-tab-content" id="categorys-presale">
                <div class="categorys-items"  id="cata-nav">

@foreach($pre_nav_list as $nav)

                    <div class="item categorys-item" ectype="cateItem">
                        <div class="item-content">
                        	<i class="pre-icon pre{{ $loop->iteration }}"></i>
                            <div class="categorys-title">
                                <strong>
                                    <a href="{{ $nav['url'] }}">{{ $nav['cat_name'] }}</a>
                                </strong>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

@endforeach

                </div>
            </div>
        </div>
        <div class="nav-main" id="nav">
            <ul class="navitems">
                <li class="channel
@if($pager['act'] == 'index')
channel-now
@endif
"><a href="{{ $url_presale }}">{{ $lang['home'] }}</a></li>
                <li class="channel
@if($pager['act'] == 'new')
channel-now
@endif
"><a href="{{ $url_presale_new }}">{{ $lang['New_product_release'] }}</a></li>
                <li class="channel
@if($pager['act'] == 'advance')
channel-now
@endif
"><a href="{{ $url_presale_advance }}">{{ $lang['First_order'] }}</a></li>
            </ul>
        </div>
    </div>
</div>
