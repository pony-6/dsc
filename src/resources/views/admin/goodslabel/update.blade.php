@include('admin.goodslabel.pageheader')
<style>
.article{border:1px solid #ddd;padding:5px 5px 0 5px;}
.cover{height:160px; position:relative;margin-bottom:5px;overflow:hidden;}
.article .cover img{width:100%; height:auto;}
.article span{height:40px; line-height:40px; display:block; z-index:5; position:absolute;width:100%;bottom:0px; color:#FFF; padding:0 10px; background-color:rgba(0,0,0,0.6)}
.article_list{padding:5px;border:1px solid #ddd;border-top:0;overflow:hidden;}
.radio label{width:100%;position:relative;padding:0;}
.radio .news_mask{position:absolute;left:0;top:0;background-color:#000;opacity:0.5;width:100%;height:100%;z-index:10;}
</style>
<div class="wrapper">
	<div class="title"><a href="{{ route('admin/goodslabel/list') }}" class="s-back">{{ lang('admin/common.back') }}</a>{{ lang('admin/goods_label.goods') }} - {{ lang('admin/goods_label.add_label') }}</div>
	<div class="content_tips">
<!-- 	<div class="explanation" id="explanation">
    	<div class="ex_tit">
    		<i class="sc_icon"></i>
    			<h4>{{ lang('admin/common.operating_hints') }}</h4>
    			<span id="explanationZoom" title="{{ lang('admin/common.fold_tips') }}"></span>
    	</div>
        <ul>
        	<li></li>
        </ul>
    </div> -->
	<div class="flexilist">
		<div class="main-info of">
			<form action="{{ route('admin/goodslabel/update') }}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
		        <div class="switch_info of">
			        <div class="item">
			          <div class="label-t"><em class="color-red">*</em>{{ lang('admin/goods_label.label_name') }}:</div>
			          <div class="label_value">
			              <input type="text" id="words" name="data[label_name]" value="{{ $label_info['label_name'] }}" class="text" />
			              <div class="notic">{{ lang('admin/goods_label.label_name_notice') }}</div>
			            </div>
			        </div>
			        <div class="item">
			          	<div class="label-t"><em class="color-red">*</em>{{ lang('admin/goods_label.label_image') }}:</div>
			          	<div class="label_value">
			              	<div class="type-file-box">
                                    <input type="button" id="button" class="type-file-button">
                                    <input type="file" class="type-file-file" name="label_image" size="30" data-state="imgfile" >
                                    <span class="show">
                                        <a href="#inline" class="nyroModal fancybox" title="{{ __('admin/common.preview') }}">
                                            <i class="fa fa-picture-o"></i>
                                        </a>
                                    </span>
                                    <input type="text" name="file_path" class="type-file-text hide" value="{{ $label_info['label_image'] ?? '' }}" id="textfield" style="display:none">
                            </div>
				            <div class="notic">{{ lang('admin/goods_label.label_image_notice') }}</div>
			            </div>
			        </div>
			        <div class="item">
			          <div class="label-t"><em class="color-red">*</em>{{ lang('admin/goods_label.sort') }}:</div>
			          <div class="label_value">
			              <input type="text" id="words" name="data[sort]" value="{{ $label_info['sort'] ?? 50 }}" class="text w100" />
			              <div class="notic">{{ lang('admin/goods_label.sort_notice') }}</div>
			            </div>
			        </div>
			        <div class="item">
			          <div class="label-t">{{ lang('admin/goods_label.merchant_use') }}:</div>
                        <div class="label_value">
                            <div class="checkbox_items">
                                <div class="checkbox_item">
                                    <input type="radio" name="data[merchant_use]" class="ui-radio event_zhuangtai" id="merchant_use_1" value="1" @if($label_info['merchant_use'] == 1) checked @endif>
                                    <label for="merchant_use_1" class="ui-radio-label @if($label_info['merchant_use'] == 1) active @endif">{{ lang('admin/common.yes') }}</label>
                                </div>
                                <div class="checkbox_item">
                                    <input type="radio" name="data[merchant_use]" class="ui-radio event_zhuangtai" id="merchant_use_0" value="0" @if($label_info['merchant_use'] == 0) checked @endif>
                                    <label for="merchant_use_0" class="ui-radio-label @if($label_info['merchant_use'] == 0) active @endif">{{ lang('admin/common.no') }}</label>
                                </div>
                            </div>
                            <div class="notic">{{ lang('admin/goods_label.merchant_use_notice') }}</div>
                        </div>
			        </div>	
			        <div class="item">
			          <div class="label-t">{{ lang('admin/goods_label.status') }}:</div>
                        <div class="label_value">
                            <div class="checkbox_items">
                                <div class="checkbox_item">
                                    <input type="radio" name="data[status]" class="ui-radio event_zhuangtai" id="status_1" value="1" @if($label_info['status'] == 1) checked @endif>
                                    <label for="status_1" class="ui-radio-label @if($label_info['status'] == 1) active @endif">{{ lang('admin/goods_label.use') }}</label>
                                </div>
                                <div class="checkbox_item">
                                    <input type="radio" name="data[status]" class="ui-radio event_zhuangtai" id="status_0" value="0" @if($label_info['status'] == 0) checked @endif>
                                    <label for="status_0" class="ui-radio-label @if($label_info['status'] == 0) active @endif">{{ lang('admin/goods_label.no_use') }}</label>
                                </div>
                            </div>
                            <div class="notic">{{ lang('admin/goods_label.status_notice') }}</div>
                        </div>
			        </div>	
			        <div class="item">
			          <div class="label-t">{{ lang('admin/goods_label.label_url') }}:</div>
			          <div class="label_value">
			              <input type="text" id="words" name="data[label_url]" value="{{ $label_info['label_url'] }}" class="text" />
			              <div class="notic">{{ lang('admin/goods_label.label_url_notice') }}</div>
			            </div>
			        </div>	        
			        <div class="item">
			          <div class="label-t">&nbsp;</div>
			          <div class="label_value info_btn">
			          	@csrf
						<input type="submit" value="{{ lang('admin/common.button_submit') }}" class="button btn-danger bg-red" />
		              	<input type="hidden" name="id" value="{{ $id }}"/>
			          </div>
			        </div>
		        </div>
			</form>
		</div>
	</div>
    <div class="panel panel-default" style="display: none;" id="inline">
        <div class="panel-body">
            <img src="{{ $label_info['fromated_label_image'] ?? '' }}" class="img-responsive"/>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(function () {
    	//file移动上去的js
        $(".type-file-box").hover(function () {
            $(this).addClass("hover");
        }, function () {
            $(this).removeClass("hover");
        });

        // fancybox 弹出框
        $(".fancybox").fancybox({
            width: '60%',
            height: '50%',
            closeBtn: true,
            title: ''
        });

		// 上传图片预览
        $("input[name='label_image']").change(function (event) {
            // 根据这个 id 获取文件的 HTML5 js 对象
            var files = event.target.files, file;
            if (files && files.length > 0) {
                // 获取目前上传的文件
                file = files[0];

                // 那么我们可以做一下诸如文件大小校验的动作
                if (file.size > 1024 * 200) {
                    layer.msg('{{ __('file.file_size_limit') }}');
                    return false;
                }

                // 预览图片
                var reader = new FileReader();
                // 将文件以Data URL形式进行读入页面
                reader.readAsDataURL(file);
                reader.onload = function (e) {
                    $(".img-responsive").attr("src", this.result);
                };
            }
        });

	    $(".form-horizontal").submit(function () {

            var name = $('input[name="data[label_name]"]').val();
            if (!name) {
                layer.msg('{{ __('admin/goods_label.label_name_not_null') }}');
                return false;
            }

            var label_image = $('input[name="label_image"]').val();
            var file_path = $('input[name="file_path"]').val();
            if (!label_image && !file_path) {
                layer.msg('{{ __('admin/goods_label.label_image_not_null') }}');
                return false;
            }

            var url = $('input[name="data[sort]"]').val();
            if (!url) {
                layer.msg('{{ __('admin/goods_label.sort_not_null') }}');
                return false;
            }
        });
    });
</script>
@include('admin.goodslabel.pagefooter')