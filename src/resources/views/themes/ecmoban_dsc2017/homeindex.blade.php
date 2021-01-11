<!doctype html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="Keywords" content="{{ $keywords }}"/>
    <meta name="Description" content="{{ $description }}"/>

    <title>{{ $page_title }}</title>


    <link rel="shortcut icon" href="favicon.ico"/>
    @include('frontend::library/js_languages_new')
    <link rel="stylesheet" type="text/css" href="{{ skin('css/color.css') }}">
</head>

<body class="home_visual_body
@if($pc_page['tem'] == 'backup_festival_1')
        festival_home
@endif
        "
      @if($bg_image['img_file'])
      style="background:url({{ $bg_image['img_file'] }})
      @if($bg_image['bg_color'])
      {{ $bg_image['bg_color'] }}
      @endif
              top {{ $bg_image['align'] }} {{ $bg_image['bgrepeat'] }};"
        @endif
>

@if($pc_page['tem'] == 'backup_festival_1')

    @include('frontend::library/page_header_festival')

@else

    @include('frontend::library/page_header_common')

@endif

<div class="homeindex" ectype="homeWrap">
    {!! $page !!}

    <div class="attached-search-container" ectype="suspColumn">
        <div class="w w1200">
            <div class="categorys site-mast">
                <div class="categorys-type" id="common-cat"><a href="{{ $url_categoryall }}"
                                                               target="_blank">{{ $lang['all_goods_cat'] }}</a></div>
                <div class="categorys-tab-content" id="common-categorys-tab">
                    {!! insert_category_tree_nav(['cat_model' => $nav_cat_model, 'cat_num' => $nav_cat_num]) !!}
                </div>
            </div>
            <div class="mall-search">
                <div class="dsc-search">
                    <div class="form">
                        <form id="searchForm" name="searchForm" method="post" action="search.php"
                              onSubmit="return checkSearchForm(this)" class="search-form">
                            <input autocomplete="off" name="keywords" type="text" id="keyword2" value="
@if($search_keywords)
                            {{ $search_keywords }}
                            @else
                            {!! insert_rand_keyword() !!}
                            @endif
                                    " class="search-text"/>
                            <input type="hidden" name="store_search_cmt" value="{{ $search_type ?? 0 }}">
                            <button type="submit" class="button button-goods"
                                    onclick="checkstore_search_cmt(0)">{{ $lang['serch_goods'] }}</button>
                            <button type="submit" class="button button-store"
                                    onclick="checkstore_search_cmt(1)">{{ $lang['serch_shop'] }}</button>
                            @csrf </form>
                    </div>
                </div>
            </div>
            <div class="suspend-login">
                {{-- DSC 提醒您：动态载入index_suspend_info.lbi，显示首页首页悬浮登录入口 --}}
                {!! insert_index_suspend_info() !!}
            </div>
            <div class="shopCart" id="ECS_CARTINFO">
                {{-- DSC 提醒您：根据用户id来调用cart_info.lbi显示不同的界面  --}}
                {!! insert_cart_info() !!}
            </div>
        </div>
    </div>
    <div class="lift lift-mode-{{ $floor_nav_type ?? one }} lift-hide" ectype="lift"
         data-type="{{ $floor_nav_type ?? one }}" style="z-index:100001">
        <div class="lift-list" ectype="liftList">
        </div>
    </div>

    <input name="warehouse_id" type="hidden" value="{{ $warehouse_id }}">
    <input name="area_id" type="hidden" value="{{ $area_id }}">
    <input name="area_city" type="hidden" value="{{ $area_city }}">
    <input name="temp" type="hidden" value="{{ $pc_page['tem'] }}">


    <div ectype="bonusadv_box"></div>
</div>

{{-- DSC 提醒您：动态载入user_menu_position.lbi，显示首页分类小广告 --}}
{!! insert_user_menu_position() !!}
@include('frontend::library/page_footer')


<script type="text/javascript" src="{{ asset('js/jquery.SuperSlide.2.1.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.yomi.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cart_common.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cart_quick_links.js') }}"></script>
<script type="text/javascript" src="{{ skin('js/dsc-common.js') }}"></script>
<script type="text/javascript" src="{{ skin('js/asyLoadfloor.js') }}"></script>
<script type="text/javascript" src="{{ skin('js/jquery.purebox.js') }}"></script>
<script type="text/javascript">
    /*首页轮播*/
    var slideType = $("*[data-mode='lunbo']").find("*[data-type='range']").data("slide");
    var length = $(".banner .bd").find("li").length;

    if (slideType == "roll") {
        slideType = "left";
    }

    if (length > 1) {
        $(".banner").slide({
            titCell: ".hd ul",
            mainCell: ".bd ul",
            effect: slideType,
            interTime: 5000,
            delayTime: 500,
            autoPlay: true,
            autoPage: true,
            trigger: "click",
            endFun: function (i, c, s) {
                $(window).resize(function () {
                    var width = $(window).width();
                    if (!$('body').hasClass("festival_home")) {
                        s.find(".bd li").css("width", width);
                    }
                });
            }
        });
    } else {
        $(".banner .hd").hide();
    }

    //楼层二级分类商品切换
    $("*[ectype='floorItem']").slide({
        titCell: ".hd-tags li",
        mainCell: ".floor-tabs-content",
        titOnClassName: "current"
    });

    $("*[ectype='floorItem']").slide({
        titCell: ".floor-nav li",
        mainCell: ".floor-tabs-content",
        titOnClassName: "current"
    });

    //第五套楼层模板
    $(".floor-fd-slide").slide({
        mainCell: ".bd ul",
        effect: "left",
        autoPlay: false,
        autoPage: true,
        vis: 4,
        scroll: 1,
        prevCell: ".ff-prev",
        nextCell: ".ff-next"
    });

    //第六套楼层模板
    $(".floor-brand").slide({
        mainCell: ".fb-bd ul",
        effect: "left",
        pnLoop: true,
        autoPlay: false,
        autoPage: true,
        vis: 3,
        scroll: 1,
        prevCell: ".fs_prev",
        nextCell: ".fs_next"
    });

    //楼层轮播图广告
    $("*[data-purebox='homeFloor']").each(function (index, element) {
        var f_slide_length = $(this).find(".floor-left-slide .bd li").length;
        if (f_slide_length > 1) {
            $(element).find(".floor-left-slide").slide({
                titCell: ".hd ul",
                mainCell: ".bd ul",
                effect: "left",
                interTime: 3500,
                delayTime: 500,
                autoPlay: true,
                autoPage: true
            });
        } else {
            $(element).find(".floor-left-slide .hd").hide();
        }
    });

    //异步加载出首页个人信息、秒杀活动、品牌信息、首页弹出广告
    $(function () {

        var brand_id = $('*[ectype="homeBrand"]').find(".brand-list").data("value");
        var seckillid = $('[data-mode="h-seckill"]').find('[data-type="range"]').data('seckillid');
        var temp = "{{ $pc_page['tem'] }}";

        var where = '';
        if (!brand_id) {
            brand_id = '';
        }

        seckillid = JSON.stringify(seckillid);

        $.ajax({
            url: '{{ url('ajax_user.php') }}',
            data: 'act=getUserInfo' + '&brand_id=' + brand_id + "&seckillid=" + seckillid + "&temp=" + temp,
            type: 'get',
            success: function (data) {
                homeAjax(data);
            }
        });

        function ajax_Homeindex_Bonusadv() {
            var cfg_bonus_adv = "{{ $cfg_bonus_adv }}";//是否开启首页弹出广告
            var suffix = "{{ $pc_page['tem'] }}";

            if (cfg_bonus_adv == 1 && suffix) {
                $.ajax({
                    url: 'ajax_dialog.php',
                    data: 'act=ajax_Homeindex_Bonusadv' + '&suffix=' + suffix,
                    type: 'get',
                    success: function (data) {
                        if (data.error != 1) {
                            $("[ectype='bonusadv_box']").html(data.content);
                        }
                    }
                });
            }
        }

        ajax_Homeindex_Bonusadv();

        function homeAjax(data) {
            $("*[ectype='user_info']").html(data.content);
            $("*[ectype='homeBrand']").html(data.brand_list);
            if (data.seckill_goods) {
                $('[data-mode="h-seckill"]').show().find('[data-type="range"] .box-bd').html(data.seckill_goods);
                var sec_begin_time = $('[data-mode="h-seckill"]').find('[data-type="range"] .box-bd').find('input[name="sec_begin_time"]').val();
                var sec_end_time = $('[data-mode="h-seckill"]').find('[data-type="range"] .box-bd').find('input[name="sec_end_time"]').val();
                if (sec_begin_time) {
                    $('[data-mode="h-seckill"]').find('[data-type="range"] .box-hd [ectype="time"]').attr("data-time", sec_begin_time)
                } else {
                    $('[data-mode="h-seckill"]').find('[data-type="range"] .box-hd [ectype="time"]').attr("data-time", sec_end_time)
                }
                $("*[ectype='time']").each(function () {
                    $(this).yomi();
                });
                //首页秒杀商品滚动
                $(".seckill-channel").slide({
                    mainCell: ".box-bd ul",
                    effect: "leftLoop",
                    autoPlay: true,
                    autoPage: true,
                    interTime: 5000,
                    delayTime: 500,
                    vis: 5,
                    scroll: 1,
                    trigger: "click"
                });
            } else {
                $('[data-mode="h-seckill"]').hide();
            }

            $.catetopLift();

            $(window).scroll(function () {
                var scrollTop = $(document).scrollTop();
                var navTop = $("*[ectype='dscNav']").offset().top;  //by yanxin

                if (scrollTop > navTop) {
                    $("*[ectype='suspColumn']").addClass("show");
                } else {
                    $("*[ectype='suspColumn']").removeClass("show");
                }
            });
        }

        //重新加载商品模块
        $("[data-mode='guessYouLike']").each(function () {
            var _this = $(this);
            var goods_ids = _this.data("goodsid");
            var warehouse_id = $("input[name='warehouse_id']").val();
            var area_id = $("input[name='area_id']").val();
            var area_city = $("input[name='area_city']").val();
            if (goods_ids) {
                $.ajax({
                    url: '{{ url('ajax_dialog.php') }}',
                    data: 'act=getGuessYouLike' + '&goods_ids=' + goods_ids + "&warehouse_id=" + warehouse_id + "&area_id=" + area_id + "&area_city=" + area_city,
                    type: 'get',
                    success: function (data) {
                        if (data.content) {
                            _this.find(".view .lift-channel ul").html(data.content);
                        }
                    }
                });
            }
        });

        $("li[ectype='floor_cat_content'].current").each(function () {
            get_homefloor_cat_content(this);
        });

        $("[ectype='identi_floorgoods'].current").each(function () {
            get_homefloor_cat_content(this);
        });

        function checked_article_cat() {
            var cat_ids = '';

            $('[data-mode="insertVipEdit"] .tit a').each(function () {
                var val = $(this).data('catid');
                if (cat_ids) {
                    cat_ids = cat_ids + "," + val;
                } else {
                    cat_ids = val;
                }
            });

            if (cat_ids) {
                $.ajax({
                    url: 'ajax_article.php',
                    data: 'act=checked_article_cat' + '&cat_ids=' + cat_ids,
                    type: 'get',
                    success: function (data) {
                        $('[data-mode="insertVipEdit"] .vip_article_cat').html(data.content);

                        //首页信息栏 新闻文章切换
                        $(".vip-item").slide({titCell: ".tit a", mainCell: ".con"});
                    }
                });
            }
        }

        checked_article_cat();

        //异步新品排行
        $("[ectype='h-phb3']").each(function () {
            var _this = $(this);
            var activitytype = _this.data('activitytype');
            var goodsids = _this.data('goodsids');
            var warehouse_id = $("input[name='warehouse_id']").val();
            var area_id = $("input[name='area_id']").val();

            Ajax.call('ajax_dialog.php?act=checked_home_rank', 'goodsids=' + goodsids + "&activitytype=" + activitytype + "&warehouse_id=" + warehouse_id + "&area_id=" + area_id, function (data) {
                _this.html(data.content);
            }, 'GET', 'JSON');
        });
    });

    //楼层左侧栏悬浮框
    readyLoad();

    //会员名称*号 by yanxin
    /*var name = $(".suspend-login a.nick_name").text();
    var star = new Array();
    var nameLen = name.length > 2 ? name.length-2:"1";
    for(var i=1;i<=nameLen;i++){
        star.push("*");
    }
    star = star.join("");
    if(name.length > 2){
        var new_name = name[0] + star + name[name.length-1];
    }else{
        var new_name = name[0] + star;
    }
    $(".suspend-login a.nick_name").text(new_name);
    */
    //去掉悬浮框 我的购物车
    $(".attached-search-container .shopCart-con a span").text("");

    /*首页可视化 第八套模板 楼层左侧前后轮播 */
    if ($('.home_visual_body').hasClass('floor_silder')) {
        aroundSilder(".floor_silder")
    }
</script>
</body>
</html>
