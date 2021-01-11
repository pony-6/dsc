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
    <link rel="stylesheet" type="text/css" href="{{ skin('css/suggest.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ skin('css/select.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('js/perfect-scrollbar/perfect-scrollbar.min.css') }}"/>
</head>

<body>
@include('frontend::library/page_header_category')
@include('frontend::library/category_recommend_hot')
<div class="w w1390">
    @include('frontend::library/ur_here')
</div>
<div class="container">
    <div class="w w1390">
        <div class="selector">
            @include('frontend::library/category_screening')
        </div>
        @include('frontend::library/goods_list')

        <div ectype="getGuessGoods"></div>
    </div>
</div>
{{-- DSC 提醒您：动态载入user_menu_position.lbi，显示首页分类小广告 --}}
{!! insert_user_menu_position() !!}

@include('frontend::library/duibi')

@include('frontend::library/page_footer')


<script type="text/javascript" src="{{ asset('js/jquery.SuperSlide.2.1.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/compare.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cart_common.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/parabola.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/shopping_flow.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cart_quick_links.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jd_choose.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ skin('js/dsc-common.js') }}"></script>
<script type="text/javascript" src="{{ skin('js/jquery.purebox.js') }}"></script>

@if($category_load_type)
    <script type="text/javascript" src="{{ skin('js/asyLoadfloor.js') }}"></script>
@endif

<script type="text/javascript">
    $(function () {

        guess_you_like();

        $(".gl-i-wrap").slide({
            mainCell: ".sider ul",
            effect: "left",
            pnLoop: false,
            autoPlay: false,
            autoPage: true,
            prevCell: ".sider-prev",
            nextCell: ".sider-next",
            vis: 5
        });

        //对比
        Compare.init();


                @if($category_load_type)

        var query_string = '{{ $query_string }}';
        $.itemLoad('.gl-warp-large .goods-list-warp', '.gl-item', '.goods-spread', query_string, 0);

        @endif


        $("*[ectype='fsortTab'] .item").on("click", function () {
            var index = $(this).index();

            @if($category_load_type)

            if (index == 1) {
                $.itemLoad('.gl-warp-samll .goods-list-warp', '.gl-h-item', '.goods-spread', query_string, 1);
            }

            @endif

        });
    });
</script>
</body>
</html>
