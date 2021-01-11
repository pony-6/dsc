<div class="comment-goods">
    <div class="user-items">
        <div class="item item-pf">
            <div class="label"><em>*</em>{{ $lang['score'] }}：</div>
            <div class="value" ectype="rates">
                <div class="commstar" 
@if(!$item['comment']['comment_id'] > 0)
ectype="p_rate"
@endif
>
                    <a href="javascript:;" data-value="1" class="star1
@if($item['comment']['comment_rank'] == 1)
 selected
@endif
">1</a>
                    <a href="javascript:;" data-value="2" class="star2
@if($item['comment']['comment_rank'] == 2)
 selected
@endif
">2</a>
                    <a href="javascript:;" data-value="3" class="star3
@if($item['comment']['comment_rank'] == 3)
 selected
@endif
">3</a>
                    <a href="javascript:;" data-value="4" class="star4
@if($item['comment']['comment_rank'] == 4)
 selected
@endif
">4</a>
                    <a href="javascript:;" data-value="5" class="star5
@if($item['comment']['comment_rank'] == 5)
 selected
@endif
">5</a>
                </div>
                <input type="hidden" name="comment_rank" value="{{ $item['comment']['comment_rank'] }}"/>
                <div class="error" style="display:none;">{{ $lang['Pleas_mark'] }}</div>
            </div>
        </div>
        
@if($item['impression_list'] && !$item['comment']['goods_tag'] && $sign < 2)

        <div class="item">
            <div class="label"><em>*</em>{{ $lang['Buyer_impression'] }}</div>
            <div class="value">
                
@foreach($item['impression_list'] as $impression)

                <div class="item-item
@if($loop->first)
 selected
@endif
" data-val="{{ $impression }}" data-recid="{{ $item['rec_id'] }}" ectype="itemTab">
                    <span>{{ $impression }}</span>
                    <b></b>
                </div>
                
@endforeach

            </div>
        </div>
        
@endif

        
        
@if($item['comment']['content'] == '')

            <div class="item">
                <div class="label"><em>*</em>{{ $lang['Experience'] }}：</div>
                <div class="value">
                    <textarea name="content" class="textarea" id="textarea" cols="30" rows="10" size="10" placeholder="{{ $lang['Experience_one'] }}" onKeyUp="figure()" maxlength="500"></textarea> 
                    <div class="clear"></div>
                    <div class="error">{{ $lang['common_form_textarea'] }}<span id="sp">500</span>{{ $lang['zi_zc'] }}</div>
                </div>
            </div>
        
@else

            
@if($item['comment']['goods_tag'])

            <div class="item">
                <div class="label"><em>*</em>{{ $lang['Buyer_impression'] }}</div>
                <div class="value">
                    
@foreach($item['comment']['goods_tag'] as $tag)

                    <div class="item-item curr"><span>{{ $tag }}</span></div>
                    
@endforeach

                </div>
            </div>
            
@endif

            <div class="item">
                <div class="label"><em>*</em>{{ $lang['Experience'] }}：</div>
                <div class="value"><span class="txt">{{ $item['comment']['content'] }}</span></div>
            </div>
        
@endif

        <div class="item">
            <div class="label">{{ $lang['single_comment'] }}：</div>
            <div class="value">
                <div class="upload-img-box">
                    <div class="img-lists">
                        <ul class="img-list-ul" ectype="imglist">
                            
@foreach($item['comment']['img_list'] as $img)

                            <li><a href="{{ $img['comment_img'] }}" target="_blank"><img width="78" height="78" alt="" src="{{ $img['comment_img'] }}"></a><div class="del hide"><em value="{{ $lang['drop'] }}">X</em></div></li>
                            
@endforeach

                        </ul>
                        
@if(!$item['comment']['img_list'])

                        <div class="upload-btn">
                            <div id="file_upload{{ $loop->iteration }}" class="uploadify">
                                <a href="javascript:void(0);" id="uploadbutton" class="uploadbutton"><i class="iconfont icon-digital"></i></a>
                            </div>
                        </div>
                        
@endif

                        
                        
@if(!$item['comment']['img_list'])

                        <div class="img-utips">{{ $lang['total'] }}<em ectype="num">0</em>{{ $lang['img_number_notic'] }}<span id="img_number" ectype="ima_number">10</span>{{ $lang['zhang'] }}</div>
                        
@endif

                    </div>
                </div>
            </div>
        </div>
        
@if(!$item['comment']['img_list'])

        
@if($enabled_captcha)

        <div class="item">
            <div class="label"><em>*</em>{{ $lang['comment_captcha'] }}：</div>
            <div class="value">
                <div class="sm-input">
                    <input type="text" name="captcha" />
                    <img src="captcha_verify.php?captcha=is_user_comment&identify={{ $item['rec_id'] }}&height=28&font_size=14&{{ $rand }}" width="81" height="33" alt="captcha" onClick="this.src='captcha_verify.php?captcha=is_user_comment&identify={{ $item['rec_id'] }}&height=30&font_size=14&'+Math.random()" class="captcha_img">
                </div>
                <div class="mt10 hide captcha-err" style=" width:600px; float:left;">
                    <span class="comt-error"></span>
                </div>
            </div>
        </div>
        
@endif

        
        <input type="hidden" name="impression" id="impression" value="{{ $item['impression_list']['0'] }}" />
        
@if($item['impression_list'] && !$item['comment']['goods_tag'] && $sign < 2)

        <input type="hidden" name="is_impression" id="is_impression" value="1" />
        
@else

        <input type="hidden" name="is_impression" id="is_impression" value="0" />
        
@endif

        <input type="hidden" name="order_id" value="{{ $item['order_id'] }}" />
        <input type="hidden" name="goods_id" value="{{ $item['goods_id'] }}" />
        <input type="hidden" name="rec_id" value="{{ $item['rec_id'] }}" />
        <input type="hidden" name="sign" value="{{ $sign }}" />
        <input type="hidden" name="comment_id" 
@if($item['comment']['comment_id'] == '')
value="0"
@else
value="{{ $item['comment']['comment_id'] }}"
@endif
>
        
@endif

    </div>
</div>
<script type="text/javascript">
	var uploader_gallery = new plupload.Uploader({//创建实例的构造方法
		runtimes: 'html5,flash,silverlight,html4', //上传插件初始化选用那种方式的优先级顺序
		browse_button: 'uploadbutton', // 上传按钮
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		url: "comment.php?act=ajax_return_images&order_id={{ $item['order_id'] }}&rec_id={{ $item['rec_id'] }}&goods_id={{ $item['goods_id'] }}&userId={{ $user_id }}&sessid={{ $sessid }}", //远程上传地址
		filters: {
			max_file_size: '2mb', //最大上传文件大小（格式100b, 10kb, 10mb, 1gb）
			mime_types: [//允许文件上传类型
				{title: "files", extensions: "bmp,gif,jpg,png,jpeg"}
			]
		},
		multi_selection: true, //true:ctrl多文件上传, false 单文件上传
		init: {
		   FilesAdded: function(up, files) { //文件上传前
			   var len = $("*[ectype='imglist'] li").length;
				plupload.each(files, function(file){
					//遍历文件
					len ++;
				});
				if(len > 10){
					pbDialog(json_languages.comment_img_number,"",0);
				}else{
					//开始上传 单张循环上传
					var img_number = 10 - Number(len);
					$("*[ectype='num']").html(len);
					$("*[ectype='ima_number']").html(img_number);
					submitBtn();
				}
			},
			FileUploaded: function(up, file, info) { //文件上传成功的时候触发
				var str_eval = eval;
				var data = str_eval("(" + info.response + ")");
				if(data.error > 0){
					pbDialog(data.msg,"",0);
					return;
				}else{
					$("*[ectype='imglist']").html(data.content);
				}
			},
			UploadComplete:function(up,file){
				//所有文件上传成功时触发	
			},
			Error: function(up, err){
				//上传出错的时候触发
				pbDialog(err.message,"",0);
			}
		}
	});
	
	uploader_gallery.init();
	
	function submitBtn(){
		//设置传参
		uploader_gallery.setOption("multipart_params");
		//开始控件
		uploader_gallery.start();
	};
	
	//心得评价输入字数计算
	function figure(){
		 var textarea=document.getElementById("textarea");
		 var maxlength=500;
		 var length=textarea.value.length;
         var count=maxlength-length;
		 var sp=document.getElementById("sp");
		 sp.innerHTML=count;
		 if(count<=10){
			sp.style.color="red";
		 }else{
			sp.removeAttribute("style");
		 }
	}
</script>