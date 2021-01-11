<div class="pb_download_common">
    <div class="title red" ectype="prompt_download">{{ lang('admin/common.total_data') }} {{$page_count}} {{ lang('admin/common.page_ye') }}{{ lang('admin/common.data_export_dont_close') }}</div>
    <div class="download_items ps-scrollbar-visible">
    	<div class="download_items_info" ectype="download_content"></div>
    </div>
</div>

<input type="hidden" name='filter' value='{{$filter}}'>
<input type="hidden" name='data' value='{{$field_name}}'>

<script type="text/javascript">
    // js 语言包
    var jl_processing_export_number = "{{ lang('admin/common.js_languages.jl_processing_export_number') }}";
    var jl_page_data = "{{ lang('admin/common.js_languages.jl_page_data') }}";
    var jl_completed = "{{ lang('admin/common.js_languages.jl_completed') }}";
    var jl_completed_close = "{{ lang('admin/common.js_languages.jl_completed_close') }}";

    start(1);

	function start(page_down)
	{

        var filter = $("input[name='filter']").val()

		var page_count = "{{$page_count}}";

		var obj = $("*[ectype='download_content']");
		var html = '<div class="item"><div class="label">'+jl_processing_export_number+page_down+jl_page_data+'</div><div class="value" ectype="complete"></div></div>';
		obj.append(html);

		var args = "page_down=" + page_down + "&page_count=" + page_count + "&filter=" + filter  + get_args();

        $.post("{{ route('admin/ajax_export_download') }}", args, function (result) {
            start_response(result)
        }, 'json');

	}

	function start_response(result){
		//处理已完成文字
		$("*[ectype='complete']").each(function(){
			$(this).html(jl_completed);
		});

		order_download_list_csv(result);  // 下载csv文件

	}

	//导出当前分页订单csv文件
	function order_download_list_csv(result)
	{
		var page_down = result.page
		var page_count = result.page_count
		var args = get_args();
		var data = $("input[name='data']").val();

		var args = "page_down=" + page_down + "&page_count=" + page_count + "&field_name=" + data;
        $.post("{{ route('admin/export_download_list_csv') }}", args, function (result) {
            start_response_csv(result)
        }, 'json');

		if(result.is_stop == 1){
			start(result.next_page);
		}
		var height = $(".download_items_info").height();
		$(".download_items").scrollTop(height);
        // $(".download_items").perfectScrollbar("destroy");
        // $(".download_items").perfectScrollbar();

	}

	// 下载csv文件下载完成
	function start_response_csv(result){
		if(result.is_stop == 0){
			$("[ectype='prompt_download']").html(jl_completed_close);
            // 下载压缩文件
            location.href = "{{ route('admin/export_download_list_csv', ['act' => 'download_zip']) }}";
		}
	}


</script>
