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

<body class="bg-ligtGary">
@include('frontend::library/page_header_common')
<div class="article-index">
	<div class="w w1200">

@if($page)

        {{ $page }}
        <input name="warehouse_id" type="hidden" value="{{ $warehouse_id }}">
        <input name="area_id" type="hidden" value="{{ $area_id }}">

@else

        <div class="demo ui-sortable">

            <div class="visual-item lyrow ui-draggable" data-purebox="CMS" data-mode="CMS_ADV">
                <div class="view" data-type="range">
                    <div class="banner-article">
                    	<div class="banner-main">
                        	<div class="bd">
                            	<ul>
                                	<li><a href="#" target="_blank"><img src="{{ skin('/') }}images/article-index/bb.jpg" alt=""><p>{{ $lang['banner_main_li']['0'] }}</p></a></li>
                                </ul>
                            </div>
                            <div class="hd"><ul></ul></div>
                        </div>
                        <div class="banner-second">
                        	<div class="s mb10"><a href="#" target="_blank"><img src="{{ skin('/') }}images/article-index/bs.jpg" alt=""><p>{{ $lang['banner_second'] }}</p></a></div>
                        	<div class="s"><a href="#" target="_blank"><img src="{{ skin('/') }}images/article-index/bs_1.jpg" alt=""><p>{{ $lang['banner_second'] }}</p></a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="visual-item lyrow ui-draggable" data-purebox="CMS_ARTI" data-mode="CMS_TWO_LIE">
                <div class="view" data-type="range">
                    <div class="article-col-2 clearfix">
                        <div class="article-box">
                            <div class="ab-hd"><h2><i class="iconfont icon-icon02"></i>{{ $lang['company_dynamic'] }}</h2><a href="#" class="more" target="_blank">more&gt;</a></div>
                            <div class="ab-bd">
                                <div class="focus">
                                    <a href="http://about.ecmoban.com/article-7760.html" target="_blank" class="img"><img src="{{ skin('/') }}images/article-index/col2.jpg" alt=""></a>
                                    <div class="info">
                                        <div class="info-name"><a href="http://about.ecmoban.com/article-7760.html" target="_blank">{{ $lang['article_box']['info']['0'] }}</a></div>
                                        <div class="info-intro">{{ $lang['article_box']['info']['1'] }}</div>
                                        <div class="info-time">{{ $lang['article_box']['info']['2'] }}</div>
                                    </div>
                                </div>
                                <ul class="list">
                                    <li><a href="http://about.ecmoban.com/article-7737.html" target="_blank">{{ $lang['article_box']['list']['0'] }}</a><span class="time">2017.09.21</span></li>
                                    <li><a href="http://about.ecmoban.com/article-7631.html" target="_blank">{{ $lang['article_box']['list']['1'] }}</a><span class="time">2017.09.12</span></li>
                                    <li><a href="http://about.ecmoban.com/article-7548.html" target="_blank">{{ $lang['article_box']['list']['2'] }}</a><span class="time">2017.08.22</span></li>
                                    <li><a href="http://about.ecmoban.com/article-7464.html" target="_blank">{{ $lang['article_box']['list']['3'] }}</a><span class="time">2017.07.28</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="article-box">
                            <div class="ab-hd"><h2><i class="iconfont icon-icon02"></i>{{ $lang['industry_message'] }}</h2><a href="#" class="more" target="_blank">more&gt;</a></div>
                            <div class="ab-bd">
                                <div class="focus">
                                    <a href="#" target="_blank" class="img"><img src="{{ skin('/') }}images/article-index/col1.jpg" alt=""></a>
                                    <div class="info">
                                        <div class="info-name"><a href="#" target="_blank">{{ $lang['article_box']['info']['3'] }}</a></div>
                                        <div class="info-intro">{{ $lang['article_box']['info']['4'] }}</div>
                                        <div class="info-time">{{ $lang['article_box']['info']['5'] }}</div>
                                    </div>
                                </div>
                                <ul class="list">
                                    <li><a href="http://about.ecmoban.com/article-7526.html" target="_blank">{{ $lang['article_box']['list']['4'] }}</a><span class="time">2017.08.17</span></li>
                                    <li><a href="http://about.ecmoban.com/article-7303.html" target="_blank">{{ $lang['article_box']['list']['5'] }}</a><span class="time">2017.06.15</span></li>
                                    <li><a href="http://about.ecmoban.com/article-7183.html" target="_blank">{{ $lang['article_box']['list']['6'] }}</a><span class="time">2017.05.18</span></li>
                                    <li><a href="http://about.ecmoban.com/article-6950.html" target="_blank">{{ $lang['article_box']['list']['7'] }}</a><span class="time">2017.04.19</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="visual-item lyrow ui-draggable" data-purebox="CMS_THREE_LIE" data-mode="CMS_THREE_LIE">
                <div class="view" data-type="range">
                    <div class="article-col-3 clearfix">
                        <div class="article-box">
                            <div class="ab-hd"><h2><i class="iconfont icon-article"></i>{{ $lang['media_report'] }}</h2><a href="#" class="more" target="_blank">more&gt;</a></div>
                            <div class="ab-bd">
                                <ul class="list">
                                    <li><a href="http://about.ecmoban.com/article-5912.html" target="_blank">{{ $lang['article_box']['list']['8'] }}</a><span class="time">2017.01.18</span></li>
                                    <li><a href="http://about.ecmoban.com/article-2662.html" target="_blank">{{ $lang['article_box']['list']['9'] }}</a><span class="time">2015.08.27</span></li>
                                    <li><a href="http://about.ecmoban.com/article-2081.html" target="_blank">{{ $lang['article_box']['list']['10'] }}</a><span class="time">2014.11.26</span></li>
                                    <li><a href="http://about.ecmoban.com/article-2078.html" target="_blank">{{ $lang['article_box']['list']['11'] }}</a><span class="time">2014.11.05</span></li>
                                    <li><a href="http://about.ecmoban.com/article_cat-51.html" target="_blank">{{ $lang['article_box']['list']['12'] }}</a><span class="time">2014.06.30</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="article-box">
                            <div class="ab-hd"><h2><i class="iconfont icon-article"></i>{{ $lang['development_history'] }}</h2><a href="#" class="more" target="_blank">more&gt;</a></div>
                            <div class="ab-bd">
                                <ul class="list">
                                    <li><a href="http://about.ecmoban.com/history.php" target="_blank">{{ $lang['article_box']['list']['13'] }}</a><span class="time">2017.07.05</span></li>
                                    <li><a href="http://about.ecmoban.com/history.php" target="_blank">{{ $lang['article_box']['list']['14'] }}</a><span class="time">2017.06.29</span></li>
                                    <li><a href="http://about.ecmoban.com/history.php" target="_blank">{{ $lang['article_box']['list']['15'] }}</a><span class="time">2017.06.24</span></li>
                                    <li><a href="http://about.ecmoban.com/history.php" target="_blank">{{ $lang['article_box']['list']['16'] }}</a><span class="time">2017.06.17</span></li>
                                    <li><a href="http://about.ecmoban.com/history.php" target="_blank">{{ $lang['article_box']['list']['17'] }}</a><span class="time">2017.05.26</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="article-box">
                            <div class="ab-hd"><h2><i class="iconfont icon-article"></i>{{ $lang['activity_list'] }}</h2><a href="#" class="more" target="_blank">more&gt;</a></div>
                            <div class="ab-bd">
                                <ul class="list">
                                    <li><a href="http://about.ecmoban.com/article-7772.html" target="_blank">{{ $lang['article_box']['list']['17'] }}</a><span class="time">2017.11.11</span></li>
                                    <li><a href="http://about.ecmoban.com/article_cat-6.html" target="_blank">{{ $lang['article_box']['list']['18'] }}</a><span class="time">2017.06.19</span></li>
                                    <li><a href="http://about.ecmoban.com/article-7069.html" target="_blank">{{ $lang['article_box']['list']['19'] }}</a><span class="time">2017.05.03</span></li>
                                    <li><a href="http://about.ecmoban.com/article-6925.html" target="_blank">{{ $lang['article_box']['list']['20'] }}</a><span class="time">2017.04.18</span></li>
                                    <li><a href="http://about.ecmoban.com/article-6408.html" target="_blank">{{ $lang['article_box']['list']['21'] }}</a><span class="time">2017.03.06</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="visual-item lyrow ui-draggable" data-purebox="CMS_FAST_LIE" data-mode="CMS_FAST_LIE">
                <div class="view" data-type="range">
                    <div class="article-box">
                        <div class="ab-hd"><h2><i class="iconfont icon-article"></i>{{ $lang['station_express'] }}</h2><a href="#" class="more" target="_blank">more&gt;</a></div>
                        <div class="ab-bd">
                            <ul class="quick clearfix">
                                <li>
                                    <div class="q-img"><a href="http://about.ecmoban.com/staffs.php" target="_blank"><img src="{{ skin('/') }}images/article-index/col3.jpg" alt=""></a></div>
                                    <div class="q-name"><a href="http://about.ecmoban.com/staffs.php" target="_blank">{{ $lang['article_box']['station_express']['0'] }}</a></div>
                                    <div class="q-info">{{ $lang['article_box']['station_express']['1'] }}</div>
                                </li>
                                <li>
                                    <div class="q-img"><a href="http://about.ecmoban.com/staffs.php" target="_blank"><img src="{{ skin('/') }}images/article-index/col4.jpg" alt=""></a></div>
                                    <div class="q-name"><a href="http://about.ecmoban.com/staffs.php" target="_blank">{{ $lang['article_box']['station_express']['2'] }}</a></div>
                                    <div class="q-info">{{ $lang['article_box']['station_express']['3'] }}</div>
                                </li>
                                <li>
                                    <div class="q-img"><a href="http://about.ecmoban.com/article-6390.html" target="_blank"><img src="{{ skin('/') }}images/article-index/col5.jpg" alt=""></a></div>
                                    <div class="q-name"><a href="http://about.ecmoban.com/article-6390.html" target="_blank">{{ $lang['article_box']['station_express']['4'] }}</a></div>
                                    <div class="q-info">{{ $lang['article_box']['station_express']['5'] }}</div>
                                </li>
                                <li>
                                    <div class="q-img"><a href="http://about.ecmoban.com/article-7772.html" target="_blank"><img src="{{ skin('/') }}images/article-index/col6.jpg" alt=""></a></div>
                                    <div class="q-name"><a href="http://about.ecmoban.com/article-7772.html" target="_blank">{{ $lang['article_box']['station_express']['6'] }}</a></div>
                                    <div class="q-info">{{ $lang['article_box']['station_express']['7'] }}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
            	</div>
            </div>

            <div class="visual-item lyrow ui-draggable" data-purebox="CMS_HEAT_LIE" data-mode="CMS_HEAT_LIE">
                <div class="view" data-type="range">
                    <div class="article-col-1-2 clearfix">
                        <div class="article-box">
                            <div class="ab-hd"><h2><i class="iconfont icon-article"></i>{{ $lang['recent_hot'] }}</h2><a href="#" class="more" target="_blank">more&gt;</a></div>
                            <div class="ab-bd">
                                <ul class="list">
                                    <li><a href="#" target="_blank">{{ $lang['article_box']['recent_hot']['0'] }}</a><span class="time">2017.11.13</span></li>
                                    <li><a href="http://about.ecmoban.com/article-7772.html" target="_blank">{{ $lang['article_box']['recent_hot']['1'] }}</a><span class="time">2017.11.11</span></li>
                                    <li><a href="http://about.ecmoban.com/article_cat-9.html" target="_blank">{{ $lang['article_box']['recent_hot']['2'] }}</a><span class="time">2017.10.25</span></li>
                                    <li><a href="http://about.ecmoban.com/article-7685.html" target="_blank">{{ $lang['article_box']['recent_hot']['3'] }}</a><span class="time">2017.09.21</span></li>
                                    <li><a href="#" target="_blank">{{ $lang['article_box']['recent_hot']['4'] }}</a><span class="time">2016.03.05</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="article-box">
                            <div class="ab-hd"><h2><i class="iconfont icon-article"></i>{{ $lang['best_recommend'] }}</h2><a href="#" class="more" target="_blank">more&gt;</a></div>
                            <div class="ab-bd">
                                <ul class="g-list clearfix">
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="{{ skin('/') }}images/article-index/test_002.jpg" alt="">
                                            <p>{{ $lang['article_box']['best_recommend']['0'] }}</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="{{ skin('/') }}images/article-index/test_002.jpg" alt="">
                                            <p>{{ $lang['article_box']['best_recommend']['0'] }}</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="{{ skin('/') }}images/article-index/test_002.jpg" alt="">
                                            <p>{{ $lang['article_box']['best_recommend']['0'] }}</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="{{ skin('/') }}images/article-index/test_002.jpg" alt="">
                                            <p>{{ $lang['article_box']['best_recommend']['0'] }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            	</div>
            </div>
        </div>

@endif

    </div>
</div>
@include('frontend::library/page_footer')

<script type="text/javascript" src="{{ asset('js/jquery.SuperSlide.2.1.1.js') }}"></script>
<script type="text/javascript" src="{{ skin('js/dsc-common.js') }}"></script>
<script type="text/javascript">
	var length = $(".banner-main .bd").find("li").length;
	if(length>1){
		$(".banner-main").slide({titCell:".hd ul",mainCell:".bd ul",effect:"left",interTime:3500,delayTime:500,autoPlay:true,autoPage:true});
	}else{
		$(".banner-main .hd").hide();
	}
</script>
</body>
</html>
