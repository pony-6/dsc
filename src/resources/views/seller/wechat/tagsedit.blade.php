@include('admin.wechat.pageheader')
<div class="fancy">
    <div class="title">
@if(isset($taglist['id']) && $taglist['id'])
 {{ $lang['tag_edit'] }}
@else
 {{ $lang['tag_add'] }}
@endif
  </div>
    <div class="flexilist of">
    		<div class="main-info">
				<form action="{{ route('seller/wechat/tags_edit') }}" method="post" class="form-horizontal" role="form" onsubmit="return false;">
                    @csrf
			        <div class="switch_info">
				        <div class="item">
				            <div class="label-t">{{ $lang['tag_name'] }}:</div>
				            <div class="label_value">
				                <input type='text' name='name' maxlength="20" value="{{ $taglist['name'] ?? '' }}" class="text" />
				            </div>
				        </div>
				        <div class="item">
				            <div class="label-t">&nbsp;</div>
				            <div class="label_value info_btn">
				              	<input type="hidden" name="id" value="{{ $taglist['id'] ?? '' }}" />
				              	<input type="hidden" name="tag_id" value="{{ $taglist['tag_id'] ?? '' }}" />
								<input type="submit" value="{{ lang('admin/common.button_submit') }}" class="btn button bg-blue" />
				            </div>
				        </div>
			        </div>
				</form>
			</div>
    </div>
</div>
<script type="text/javascript">
$(function(){
	$(".form-horizontal").submit(function(){
		var ajax_data = $(".form-horizontal").serialize();
		$.post("{{ route('seller/wechat/tags_edit') }}", ajax_data, function(data){
		    if(data.status > 0){
		    	window.parent.location.reload();
			}
		    else{
			    alert(data.msg);
			    return false;
			}
		}, 'json');
	});
})
</script>
@include('admin.wechat.pagefooter')
