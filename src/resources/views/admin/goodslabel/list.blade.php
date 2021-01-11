@include('admin.goodslabel.pageheader')

<div class="wrapper">
    <div class="title">{{ lang('admin/goods_label.goods') }}-{{ lang('admin/goods_label.goods_label') }}</div>
    <div class="content_tips">
    <div class="explanation" id="explanation">
        <div class="ex_tit">
            <i class="sc_icon"></i>
                <h4>{{ lang('admin/common.operating_hints') }}</h4>
                <span id="explanationZoom" title="{{ lang('admin/common.fold_tips') }}"></span>
        </div>
        <ul>
            <li>{{ lang('admin/goods_label.label_notice.0') }}</li>
            <li>{{ lang('admin/goods_label.label_notice.1') }}</li>
            <li>{{ lang('admin/goods_label.label_notice.2') }}</li>
            <li>{{ lang('admin/goods_label.label_notice.3') }}</li>
        </ul>
    </div>
        <div class="flexilist">
            <div class="common-head">
                <div class="fl">
                    <a href="{{ route('admin/goodslabel/update') }}"><div class="fbutton"><div class="add " title="{{ lang('admin/goods_label.add_label') }}"><span><i class="fa fa-plus"></i>{{ lang('admin/goods_label.add_label') }}</span></div></div></a>
                </div>
                <div class="search">
                    <form action="{{ route('admin/goodslabel/list') }}" name="searchForm" method="post" role="search">
                        <div class="select fl pr10 pl10">
                            <select class="form-control input-sm font12 " name="status">
                                <option value="-1">{{ lang('admin/goods_label.status') }}</option>
                                <option value="1" >{{ lang('admin/goods_label.use') }}</option>
                                <option value="0" >{{ lang('admin/goods_label.no_use') }}</option>
                            </select>
                        </div>
                        @csrf

                        <div class="input">
                            <input type="text" name="keywords" class="text" placeholder="{{ lang('admin/goods_label.label_name') }}" autocomplete="off">
                            <input type="submit" value="" class="btn search_button">
                        </div>
                    </form>
                </div>
            </div>
            <div class="common-content">
                <div class="list-div" id="listDiv">
                <form action="{{ route('admin/goodslabel/batch') }}" method="post" class="form-inline" role="form">
                    <table cellspacing="0" cellpadding="0" border="0">
                        <tr>
                            <th width="3%" class="sign">
                                <div class="tDiv">
                                    <input type="checkbox" class="checkbox" name="all_list" id="all_list"/>
                                    <label for="all_list" class="checkbox_stars"></label>
                                </div>
                            </th>
                            <th width="7%"><div class="tDiv">{{ lang('admin/goods_label.label_name') }}</div></th>
                            <th width="30%"><div class="tDiv">{{ lang('admin/goods_label.bind_goods_number') }}</div></th>
                            <th width="10%"><div class="tDiv">{{ lang('admin/goods_label.label_image') }}</div></th>
                            <th width="20%"><div class="tDiv">{{ lang('admin/goods_label.merchant_use') }}</div></th>
                            <th width="10%"><div class="tDiv">{{ lang('admin/goods_label.status') }}</div></th>
                            <th width="10%"><div class="tDiv">{{ lang('admin/goods_label.sort') }}</div></th>
                            <th width="10%"><div class="tDiv">{{ lang('admin/common.handler') }}</div></th>
                        </tr>
                        @forelse ($label_list as $key=>$label)
                        <tr>
                            <td class="sign">
                                <div class="tDiv">
                                    <input type="checkbox" class="checkbox" id="checkbox_{{ $label['id'] }}" name="id[]" value="{{ $label['id'] }}" >
                                    <label for="checkbox_{{ $label['id'] }}" class="checkbox_stars"></label>
                                </div>
                            </td>
                            <td>
                                <div class="tDiv">
                                    {{ $label['label_name'] }}
                                </div>
                            </td>
                            <td>
                                <div class="tDiv">
                                    {{ $label['bind_goods_number'] }}
                                </div>
                            </td>
                            <td>
                                <div class="tDiv">
                                    <img src="{{ $label['label_image'] }}" height="20" />
                                </div>
                            </td>
                            <td>
                                <div class="tDiv">
                                    @if($label['merchant_use'] == 1)
                                        <span class="green">{{ lang('admin/common.yes') }}</span>
                                    @else 
                                        <span class="red">{{ lang('admin/common.no') }}</span>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="tDiv">

                                    @if(isset($label['status']) && $label['status'] == 1)
                                        <div class="tDiv">
                                            <div class="switch active" onclick="toggle_is_show('{{ $label['id'] }}', this)" title="{{ lang('admin/goods_label.use') }}" >
                                            <input type="hidden" value="0" name="">
                                            <div class="circle"></div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="tDiv">
                                            <div class="switch" onclick="toggle_is_show('{{ $label['id'] }}', this)" title="{{ lang('admin/goods_label.no_use') }}" >
                                            <input type="hidden" value="1" name="">
                                                <div class="circle"></div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </td>
                            <td>
                                <div class="tDiv">
                                    {{ $label['sort'] }}
                                </div>
                            </td>
                            <td class="handle">
                                <div class="tDiv ht_tdiv" style="padding-bottom:0px;">
                                    <a href="{{ route('admin/goodslabel/update', ['id'=>$label['id']]) }}"><i class="fa fa-edit"></i>{{ lang('admin/common.edit') }}</a>
                                    <a href="javascript:;" ectype="drop" class="btn-trash" data-id="{{ $label['id'] }}"><i class="fa fa-trash"></i>{{ lang('admin/common.drop') }}</a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <tr><td class="no-records" colspan="10">{{ lang('admin/common.no_records') }}</td></tr>
                        </tr>
                        @endforelse
                        <tfoot>
                            <tr>
                                <td colspan="3">
                                    <div class="tDiv of">
                                        <div class="tfoot_btninfo">
                                            @csrf
                                            <input type="submit" name="use" class="btn button btn_disabled" value="{{ lang('admin/goods_label.batch_use') }}" disabled="disabled" ectype='btnSubmit'>
                                            <input type="submit" name="no_use" class="btn button btn_disabled" value="{{ lang('admin/goods_label.batch_no_use') }}" disabled="disabled" ectype='btnSubmit'>
                                            <input type="submit" name="drop" class="confirm btn button btn_disabled" value="{{ lang('admin/goods_label.batch_drop') }}" disabled="disabled" ectype='btnSubmit'>
                                        </div>
                                    </div>
                                </td>
                                <td colspan="8">
                                @include('admin.base.pageview')
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
                </div>
            </div>
        </div>
  </div>
</div>
<script type="text/javascript">
    $(function(){
        // 全选切换效果
        $(document).on("click", "input[name='all_list']", function () {
            if ($(this).prop("checked") == true) {
                $(".list-div").find("input[type='checkbox']").prop("checked", true);
                $(".list-div").find("input[type='checkbox']").parents("tr").addClass("tr_bg_org");
            } else {
                $(".list-div").find("input[type='checkbox']").prop("checked", false);
                $(".list-div").find("input[type='checkbox']").parents("tr").removeClass("tr_bg_org");
            }

            btnSubmit();
        });

        // 单选切换效果
        $(document).on("click", ".sign .checkbox", function () {
            if ($(this).is(":checked")) {
                $(this).parents("tr").addClass("tr_bg_org");
            } else {
                $(this).parents("tr").removeClass("tr_bg_org");
            }

            btnSubmit();
        });

        // 禁用启用提交按钮
        function btnSubmit() {
            var length = $(".list-div").find("input[name='id[]']:checked").length;

            if ($("#listDiv *[ectype='btnSubmit']").length > 0) {
                if (length > 0) {
                    $("#listDiv *[ectype='btnSubmit']").removeClass("btn_disabled");
                    $("#listDiv *[ectype='btnSubmit']").attr("disabled", false);
                } else {
                    $("#listDiv *[ectype='btnSubmit']").addClass("btn_disabled");
                    $("#listDiv *[ectype='btnSubmit']").attr("disabled", true);
                }
            }
        }
    });

    // 切换启用状态
    function toggle_is_show(id, obj)
    {
        if (!id) {
            return false;
        }

        var obj = $(obj);
        val = (obj.attr('class').match(/active/i)) ? 0 : 1;

        $.post("{{ route('admin/goodslabel/update_status') }}", {id:id, val:val}, function (data) {
            return false;
        }, 'json');

        if(obj.hasClass('active')) {
            obj.removeClass('active');
        } else {
            obj.addClass('active');
        }
    }

    // 批量删除确认
    $(document).on("click", ".confirm", function () {
        if(!confirm("{{ lang('admin/goods_label.batch_drop_notice') }}"))
        {
            return false;
        }
    });

    $(document).on('click', "a[ectype='drop']", function(){
        if(confirm("{{ lang('admin/goods_label.batch_drop_notice') }}"))
        {
            var id = $(this).data('id');

            $.post("{{ route('admin/goodslabel/drop') }}", {id:id}, function(res){
                if(res.error > 0)
                {
                    alert(res.msg);
                    return false;
                }
                else
                {
                    window.location.href = "{{ route('admin/goodslabel/list') }}";
                }
            }, 'json');
        }
        else
        {
            return false;
        }
    });    
</script>

@include('admin.goodslabel.pagefooter')
