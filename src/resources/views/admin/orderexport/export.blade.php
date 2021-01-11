@include('admin.base.header')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/main.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/purebox.css') }}"/>
<script src="{{ asset('js/transport_jquery.js') }}"></script>
<script src="{{ asset('js/utils.js') }}"></script>
<script src="{{ asset('js/jquery.cookie.js') }}"></script>
<script src="{{ asset('js/lib_ecmobanFunc.js') }}"></script>
<script src="{{ asset('assets/admin/js/listtable.js') }}"></script>
<script src="{{ asset('assets/admin/js/listtable_pb.js') }}"></script>
<style>
    /*div+js模仿select效果*/
    .imitate_select {
        float: left;
        position: relative;
        border: 1px solid #dbdbdb;
        border-radius: 2px;
        height: 32px;
        line-height: 30px;
        margin-right: 10px;
        font-size: 12px;
    }

    .imitate_select .cite {
        background: #fff url({{ asset('assets/admin/images/xjt.png') }}) right 11px no-repeat;
        padding: 0 10px;
        cursor: pointer;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        text-align: left;
    }

    .imitate_select ul {
        position: absolute;
        top: 28px;
        left: -1px;
        background: #fff;
        width: 100%;
        border: 1px solid #dbdbdb;
        border-radius: 0 0 3px 3px;
        display: none;
        z-index: 199;
        max-height: 280px;
        overflow: auto
    }

    .imitate_select ul li {
        padding: 0 10px;
        cursor: pointer;
    }

    .imitate_select ul li:hover {
        background: #f5faff;
    }

    .imitate_select ul li a {
        display: block;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        text-align: left;
        color: #707070;
    }

    .imitate_select ul li.li_not {
        text-align: center;
        padding: 20px 10px;
    }

    .imitate_select .upward {
        top: inherit;
        bottom: 28px;
        border-radius: 3px 3px 0 0;
    }

    /*div+js模仿select效果end*/
</style>

<div class="warpper">
    <div class="title">{{ lang('admin/common.order_word') }} - {{ $ur_here }}</div>
    <div class="content">
        <div class="flexilist margin_top_0">
            <div class="common-content">
                <div class="mian-info">
                    <div class="switch_info export_info">
                        @if($shop_id > 0)
                        <div class="item">
                            <div class="label line_height_28">{{ lang('admin/order.export_shop') }}：</div>
                            <div class="label_value bolang line_height_28">
                                {{ $shop_name }}
                            </div>
                        </div>
                        @endif
                        <input name="store_id" type="hidden" value="{{ $shop_id ?? 0 }}">

                        <div class="item">
                            <div class="label">{{ lang('admin/order.order_status') }}：</div>
                            <div class="label_value">
                                <div class="checkbox_items order_status">
                                    @foreach ($order_status as $key => $status)
                                        <div class="checkbox_item">
                                            <input type="radio" name="order_status" class="ui-radio evnet_shop_closed"
                                                   id="order_status_{{$key}}" value="{{$key}}"
                                                   @if ($key == 0) checked="true" @endif >
                                            <label for="order_status_{{$key}}"
                                                   class="ui-radio-label">{{ lang('admin/order.' . $status) }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="label">{{ lang('admin/order.order_extension') }}：</div>
                            <div class="label_value">
                                <div class="checkbox_items order_type">
                                    @foreach ($extension_code as $key => $extension)
                                        <div class="checkbox_item">
                                            <input type="radio" name="extension_code" class="ui-radio evnet_shop_closed"
                                                   id="extension_code_{{$key}}" value="{{$extension}}"
                                                   @if ($key == 0) checked="true" @endif>
                                            <label for="extension_code_{{$key}}"
                                                   class="ui-radio-label">{{ lang('admin/order.' . $extension) }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="label">{{ lang('admin/order.order_referer') }}：</div>
                            <div class="label_value">
                                <div class="checkbox_items">
                                    <div class="checkbox_item">
                                        <input type="radio" name="order_referer" class="ui-radio evnet_shop_closed"
                                               id="all_referer" value="all_referer" checked="true">
                                        <label for="all_referer"
                                               class="ui-radio-label">{{ lang('admin/order.all_referer') }}</label>
                                    </div>
                                    <div class="checkbox_item">
                                        <input type="radio" name="order_referer" class="ui-radio evnet_shop_closed"
                                               id="PC" value="PC">
                                        <label for="PC" class="ui-radio-label">PC</label>
                                    </div>
                                    <div class="checkbox_item">
                                        <input type="radio" name="order_referer" class="ui-radio evnet_shop_closed"
                                               id="H5" value="H5">
                                        <label for="H5" class="ui-radio-label">H5</label>
                                    </div>
                                    <div class="checkbox_item">
                                        <input type="radio" name="order_referer" class="ui-radio evnet_shop_closed"
                                               id="wxapp" value="wxapp">
                                        <label for="wxapp"
                                               class="ui-radio-label">{{ lang('admin/order.wxapp') }}</label>
                                    </div>
                                    <div class="checkbox_item">
                                        <input type="radio" name="order_referer" class="ui-radio evnet_shop_closed"
                                               id="app" value="app">
                                        <label for="app" class="ui-radio-label">APP</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="label line_height_28">{{ lang('admin/order.export_order_info') }}：</div>
                            <div class="label_value">
                                <input type="text" name="order_sn" class="text" autocomplete="off"
                                       placeholder="{{ lang('admin/order.export_order_info_placeholder') }}"/>
                            </div>
                        </div>

                        <div class="item">
                            <div class="label line_height_28">{{ lang('admin/order.order_user') }}：</div>
                            <div class="label_value">
                                <input type="text" name="user_name" id="tel" class="text" autocomplete="off"/>
                            </div>
                        </div>

                        <div class="item">
                            <div class="label line_height_28">{{ lang('admin/order.consignee') }}：</div>
                            <div class="label_value">
                                <input type="text" name="consignees" id="consignees" class="text" autocomplete="off"/>
                            </div>
                        </div>

                        <div class="item">
                            <div class="label line_height_28">{{ lang('admin/order.order_time') }}：</div>
                            <div class="label_value">
                                <div class="text_time" id="text_time1">
                                    <input type="text" name="start_time" id="start_time" class="text mr0"
                                           autocomplete="off" readonly/>
                                </div>
                                <span class="bolang line_height_28">&nbsp;&nbsp;{{ lang('admin/common.to') }}&nbsp;&nbsp;</span></span>
                                <div class="text_time" id="text_time2">
                                    <input type="text" name="end_time" id="end_time" class="text" autocomplete="off"
                                           value="{{ date('Y-m-d H:i:s') }}" readonly/>
                                </div>
                                <a href="javascript:setStartTime(-7);" class="bolang line_height_28" style="margin-left: 14px">{{ __('admin/order_export.latest_7days') }}</a>
                                <a href="javascript:setStartTime(-30);" class="bolang line_height_28" style="margin-left: 14px">{{ __('admin/order_export.latest_30days') }}</a>
                                <a href="javascript:setStartTime(-90);" class="bolang line_height_28" style="margin-left: 14px">{{ __('admin/order_export.latest_3months') }}</a>
                                <a href="javascript:setStartTime(-365);" class="bolang line_height_28" style="margin-left: 14px">{{ __('admin/order_export.latest_1years') }}</a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="label">{{ lang('admin/order.export_content') }}：</div>
                            <div class="step_value">
                                <div class="checkbox_items export_content">
                                    @foreach ($field_name as $key => $field)
                                        <div class="checkbox_item export_content_item">
                                            <input type="checkbox" name="field_name" class="ui-checkbox"
                                                   data-type="{{$field}}" value="{{$field}}" id="{{$field}}"
                                                   @if ($key == 0) checked="checked" @endif >
                                            <label class="ui-label"
                                                   for="{{$field}}">{{ lang('admin/order.' . $field) }}</label>
                                        </div>
                                    @endforeach
                                    <div class="checkbox_item">
                                        <input type="checkbox" name="" class="ui-checkbox freight" id="checkAll">
                                        <label class="ui-label" for="checkAll">{{ __('admin/order_export.check_all') }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="label">&nbsp;</div>
                            <div class="label_value info_btn export_btn">
                                <input name="query" type="button" class="button" onclick="export_order_list(this)"
                                       value="{{ lang('admin/order.export_download') }}"/>

                                <a href="{{ route('admin/export_history', ['callback' => urlencode(request()->getRequestUri())]) }}" style="float: right; margin-top: 8px;">
                                    {{ __('admin/order_export.view_export_records') }}</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/admin/js/jquery.purebox.js') }}"></script>
<script src="{{ asset('js/jquery.picTip.js') }}"></script>

<script type="text/javascript">

    //div仿select下拉选框 start
    $(document).on("click", ".imitate_select .cite", function () {
        $(".imitate_select ul").hide();
        $(this).parents(".imitate_select").find("ul").show();
        //$(this).siblings("ul").perfectScrollbar("destroy");
        //$(this).siblings("ul").perfectScrollbar();
    });

    $(document).on("click", ".imitate_select li  a", function () {
        var _this = $(this);
        var val = _this.data('value');
        var text = _this.html();
        _this.parents(".imitate_select").find(".cite").html(text);
        _this.parents(".imitate_select").find("input[type=hidden]").val(val);
        _this.parents(".imitate_select").find("ul").hide();
    });
    //div仿select下拉选框 end

    //select下拉默认值赋值
    $('.imitate_select').each(function () {
        var sel_this = $(this)
        var val = sel_this.children('input[type=hidden]').val();
        sel_this.find('a').each(function () {
            if ($(this).attr('data-value') == val) {
                sel_this.children('.cite').html($(this).html());
            }
        })
    });

    $(document).click(function (e) {
        //仿select
        if (e.target.className != 'cite' && !$(e.target).parents("div").is(".imitate_select")) {
            $('.imitate_select ul').hide();
        }

        //分类
        if (e.target.id != 'category_name' && !$(e.target).parents("div").is(".select-container")) {
            $('.categorySelect .select-container').hide();
        }
    });

    // 导出内容  全选事件
    $(function () {
        // 设置默认的起始时间
        $("#start_time").val(getDay(-7) + ' 00:00:00');

        $('#checkAll').on('click', function () {
            $('.export_content_item input').prop('checked', this.checked);
            $('#order_sn').prop('checked', true);
        });
        $('.export_content_item input').on('click', function (event) {
            if ($(this).attr('id') == 'order_sn' && !$(this).prop('checked')) return event.preventDefault();
            var len = $('.export_content_item input:checkbox:checked').length;
            var fieldLen = '{{ count($field_name)}}';
            if (len == fieldLen) {
                $('#checkAll').prop('checked', true);
            } else {
                $('#checkAll').prop('checked', false);
            }
        })
    });

    //导出订单列表
    function export_order_list(e) {
        e.setAttribute('disabled', 'disabled');

        var order_status = $("input[name='order_status']:checked").val();
        var extension_code = $("input[name='extension_code']:checked").val();
        var order_referer = $("input[name='order_referer']:checked").val();
        var order_sn = $("input[name='order_sn']").val();
        var user_name = $("input[name='user_name']").val();
        var consignee = $("input[name='consignees']").val();
        var store_id = $("input[name='store_id']").val();
        var start_time = $("input[name='start_time']").val();
        var end_time = $("input[name='end_time']").val();

        var obj = document.getElementsByName("field_name");
        var field_name = [];
        for (k in obj) {
            if (obj[k].checked)
                field_name.push(obj[k].value);
        }

        var args = "order_status=" + order_status + "&extension_code=" + extension_code + "&order_referer=" + order_referer + "&order_sn=" + order_sn + "&user_name=" + user_name + "&consignee=" + consignee + "&store_id=" + store_id + "&start_time=" + start_time + "&end_time=" + end_time + "&field_name=" + field_name;

        $.post("{{ route('admin/order/export') }}", args, function () {
            window.location.href = "{{ route('admin/export_history', ['callback' => urlencode(request()->getRequestUri())]) }}";
        }, 'json');
    }

    //时间插件
    var opts1 = {
        'targetId': 'start_time',
        'triggerId': ['start_time'],
        'alignId': 'text_time1',
        'format': '-',
        'hms': 'on'
    }, opts2 = {
        'targetId': 'end_time',
        'triggerId': ['end_time'],
        'alignId': 'text_time2',
        'format': '-',
        'hms': 'on'
    }

    xvDate(opts1);
    xvDate(opts2);

    function setStartTime(v) {
        $("#start_time").val(getDay(v) + ' 00:00:00');
    }

    function getDay(day){
        var today = new Date();
        var targetday_milliseconds=today.getTime() + 1000*60*60*24*day;
        today.setTime(targetday_milliseconds); //注意，这行是关键代码
        var tYear = today.getFullYear();
        var tMonth = today.getMonth();
        var tDate = today.getDate();

        tMonth = doHandleMonth(tMonth + 1);
        tDate = doHandleMonth(tDate);
        return tYear+"-"+tMonth+"-"+tDate;
    }

    function doHandleMonth(month){
        var m = month;
        if(month.toString().length == 1){
            m = "0" + month;
        }
        return m;
    }
</script>
@include('admin.base.footer')
