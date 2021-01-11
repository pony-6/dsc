 
<div class="preview" if="preview">
	<div class="gallery_wrap">
        <ul>
            
@if($goods['goods_video'] != '')

            <li ectype="video">
                <video id="videoPlay" width="398" height="398" src="{{ $goods['goods_video_path'] }}" preload="auto" poster="">
                    <source src="{{ $goods['goods_video_path'] }}" class="goods_video_js" type="video/mp4"/>
                </video>
                <div class="video_default"></div>
            </li>
            
@endif

            <li ectype="img"
@if($goods['goods_video'] != '')
 style="display: none;"
@endif
>
                <a href="
@if($goods['goods_video'] == '')

@if($pictures['0']['img_url'])
{{ $pictures['0']['img_url'] }}
@else
{{ $goods['goods_img'] }}
@endif

@else
{{ $goods['goods_video_path'] }}
@endif
" class="MagicZoomPlus" id="Zoomer" rel="hint-text: ; selectors-effect: false; selectors-class: img-hover; selectors-change: mouseover; zoom-distance: 10;zoom-width: 400; zoom-height: 474;">
                    <img src="
@if($pictures['0']['img_url'])
{{ $pictures['0']['img_url'] }}
@else
{{ $goods['goods_img'] }}
@endif
" id="J_prodImg" alt="{{ $goods['goods_name'] }}">
                </a>
            </li>
        </ul>
    </div>
	<div class="spec-list">
		<a href="javascript:void(0);" class="spec-prev"><i class="iconfont icon-left"></i></a>
		<div class="spec-items">
			<ul>
                
@if($goods['goods_video'] != '')

                <li data-type="video"><a href="javascript:void(0);" rev="{{ $goods['goods_video_path'] }}" class="img-hover"><img src="{{ $goods['goods_img'] }}" width="58" height="58"></a></li>
                
@endif

                
@if(!$pictures['0']['img_url'] && $goods['goods_img'])

                <li data-type="img">
                    <a href="{{ $goods['goods_img'] }}" rel="zoom-id: Zoomer" rev="{{ $goods['goods_img'] }}">
                        <img src="{{ $goods['goods_img'] }}" alt="{{ $goods['goods_name'] }}" width="58" height="58"/>
                    </a>
                </li>
                
@endif

            	
@if($pictures)
 
                
@foreach($pictures as $picture)

                <li data-type="img">
					<a href="
@if($picture['img_url'])
{{ $picture['img_url'] }}
@else
{{ $picture['thumb_url'] }}
@endif
" rel="zoom-id: Zoomer" rev="
@if($picture['img_url'])
{{ $picture['img_url'] }}
@else
{{ $picture['thumb_url'] }}
@endif
" 
@if($loop->first)
class="img-hover"
@endif
>
						<img src="
@if($picture['thumb_url'])
{{ $picture['thumb_url'] }}
@else
{{ $picture['img_url'] }}
@endif
" alt="{{ $goods['goods_name'] }}" width="58" height="58" />
					</a>
				</li>
                
@endforeach
 
              	
@endif

			</ul>
		</div>
		<a href="javascript:void(0);" class="spec-next"><i class="iconfont icon-right"></i></a>
	</div>
    
@if($filename != 'group_buy' && $filename != 'auction' && $filename != 'snatch'  && $filename != 'exchange')

    <div class="short-share">
        <div class="left-btn">
            <div class="duibi">
                <a href="javascript:void(0);" id="compareLink">
                    <input type="checkbox" name="" class="ui-checkbox" id="{{ $goods['goods_id'] }}" onClick="Compare.add(this, {{ $goods['goods_id'] }},'{{ $goods['goods_name'] }}','{{ $goods['goods_type'] }}', '{{ $goods['goods_thumb'] }}', '{{ $goods['shop_price'] }}', '{{ $goods['market_price'] }}')">
                    <label for="{{ $goods['goods_id'] }}" class="ui-label">{{ $lang['compare'] }}</label>
                </a>
            </div>
            <a href="javascript:void(0);" class="collection choose-btn-coll" data-dialog="goods_collect_dialog" data-divid="goods_collect" data-url="user_collect.php?act=collect" data-goodsid="{{ $goods['goods_id'] }}" data-type="goods"><i class="iconfont choose-btn-icon
@if($goods['is_collect'])
 icon-collection-alt
@else
 icon-collection
@endif
" id="collection_iconfont"></i><em>{{ $lang['collect'] }} (<span id="collect_count"></span>)</em></a>
<!--             
@if($is_http == 2)

            <div class="bdsharebuttonbox" style=" width:50px; height:25px; float:left;">
                <a href="javascript:void(0);" data-cmd="more" class="share bds_more" style=" width:50px; height:25px; background:none; margin:0px 0px 0px 15px; padding:0px;"><i class="iconfont icon-share"></i><em>{{ $lang['share_flow'] }}</em></a>
            </div>
            
@else

            <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" ><a class="share bds_more" href="#none"><i class="iconfont icon-share"></i><em>{{ $lang['share_flow'] }}</em></a></div>
            
@endif
 -->
        </div>
        
@if($cfg['is_illegal'] == 1)

        <a class="report fr ftx-05" href="#none" ectype="report"><em>{{ $lang['report'] }}</em></a>
        
@endif

        
@if($cfg['show_goodssn'])
<div class="short-share-r bar_code hide" style=" margin-right: 10px;">{{ $lang['bar_code'] }}：<em id="bar_code"></em></div>
@endif

    </div>
    
@endif

</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=692785" ></script>
<script type="text/javascript" id="bdshell_js"></script>

@if($is_http == 2)

<script type="text/javascript">
	document.getElementById("bdshell_js").src = "{{ $url }}storage/static/api/js/share.js?v=89860593.js?cdnversion=" + new Date().getHours();
</script>

@else

<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>

@endif


<script type="text/javascript">
$(function(){
	get_collection();

    $(".spec-items li").on("mouseover",function(){
        var type = $(this).data("type");
        if(type == 'img'){
            $(".gallery_wrap").find("*[ectype='img']").show().siblings().hide();
        }else{
            $(".gallery_wrap").find("*[ectype='video']").show().siblings().hide();
        }

        $(this).find("a").addClass("img-hover");
        $(this).siblings().find("a").removeClass("img-hover");
    });

    $(".video_default").on("click",function(){
        $('#videoPlay').click();
        $(this).hide();
    });

});

var video = document.getElementById("videoPlay");
if(video){
    video.onclick=function(){
        if(video.paused){
            video.play();
            $(".video_default").hide();
        }else{
            video.pause();
            $(".video_default").show();
        }
    }

    video.addEventListener("ended",function(){
        video.currentTime = 0;
        $(".video_default").show();
    })
}
function get_collection(){
	Ajax.call('ajax_dialog.php', 'act=goods_collection&goods_id=' + {{ $goods_id ?? 0 }}, goodsCollectionResponse, 'GET', 'JSON');
}

function goodsCollectionResponse(res){
	$("#collect_count").html(res.collect_count);
	
	if(res.is_collect > 0){
		$(".collection").addClass('selected');
		$("#collection_iconfont").addClass("icon-collection-alt");
		$("#collection_iconfont").removeClass('icon-collection');
	}else{
		$(".collection").removeClass('selected');
		$("#collection_iconfont").addClass("icon-collection");
		$("#collection_iconfont").removeClass('icon-collection-alt');
	}
}

</script>
