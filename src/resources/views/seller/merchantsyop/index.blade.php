@include('seller.base.seller_pageheader')

@include('seller.base.seller_nave_header')


<style>

</style>

<div class="ecsc-layout">
    <div class="site wrapper">
        @include('seller.base.seller_menu_left')

        <div class="ecsc-layout-right">
            <div class="main-content" id="mainContent">

                <!-- 当前位置 -->
                <div class="ecsc-path"><span>{{ __('yop.menu') }}</span></div>

                <div class="wrapper-right of">
                    <div class="tabmenu">
                        <ul class="tab">
                            <li class="active"><a href="javascript:;">子商户信息</a></li>
                        </ul>
                    </div>
                    <div class="explanation" id="explanation">
                        <div class="ex_tit"><i class="sc_icon"></i><h4>操作提示</h4></div>
                        <ul>
                            <li>子商户号入网申请，依次填写企业基本信息与资质等，提交到易宝官方，等待审核。</li>
                        </ul>
                    </div>

                    <div class="wrapper-list mt20" >
                        <div class="list-div" id="listDiv">
                            <table class="ecsc-default-table goods-default-table pull-left" >
                                <thead>
                                <tr>
                                    <th width="8%"><div class="tDiv">{{ __('yop.shop_name') }}</div></th>
                                    <th width="15%"><div class="tDiv">{{ __('yop.request_no') }}</div></th>
                                    <th><div class="tDiv">{{ __('yop.merchant_no') }}</div></th>
                                    <th width="15%"><div class="tDiv">{{ __('yop.update_time') }}</div></th>
                                    <th width="10%"><div class="tDiv">{{ __('yop.apply_status') }}</div></th>
                                    <th width="25%" class="handle text-center" >{{ __('yop.handler') }}</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if (isset($info) && !empty($info))

                                    <tr>
                                        <td>
                                            <div class="tDiv">{{ $info->shop_name ?? '' }}</div>
                                        </td>
                                        <td>
                                            <div class="tDiv">{{ $info->request_no ?? 0 }}</div>
                                        </td>
                                        <td>
                                            <div class="tDiv">{{ $info->merchant_no ?? 0 }}</div>
                                        </td>
                                        <td>
                                            <div class="tDiv">{{ $info->update_time ?? 0 }}</div>
                                        </td>
                                        <td>
                                            <div class="tDiv">
                                                @if(isset($info->apply_status) && $info->apply_status == 1)

                                                    <i class="fa fa-toggle-on"></i>{{ __('yop.has_apply') }}

                                                @elseif (isset($info->apply_status) && $info->apply_status == 0)

                                                    <i class="fa fa-toggle-off"></i>{{ __('yop.no_apply') }}

                                                @else

                                                    <i class="fa fa-toggle-off"></i>{{ $info->apply_status_desc ?? '' }}

                                                @endif

                                            </div>
                                        </td>
                                        <td class="handle text-center">
                                            <div class="tDiv a2">
                                                @if(isset($info->merchant_no) && $info->merchant_no != '')
                                                    <a href="javascript:;" class="btn_see query_apply" title=""><i class="sc_icon sc_icon_see"></i>{{ __('yop.see_apply_status') }}</a>
                                                @endif

                                                @if( (isset($info->apply_status) && $info->apply_status != 1) || empty($info->merchant_no))
                                                    <a href="{{ route('seller/yop/apply') }}" class="btn_edit" title=""><i class="fa fa-edit"></i>{{ __('yop.apply_again') }}</a>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>

                                @else

                                    <tr><td class="no-records" colspan="7">没有易宝子商户号？ <a href="{{ route('seller/yop/apply') }}">去申请</a></td></tr>

                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    $(function(){

        // 查询入网状态
        $(".query_apply").click(function(){

            $.post("{{ route('seller/yop/query_apply') }}", '', function(data){

                layer.open({
                    content: data.msg,
                    btn: '确定'
                });

                if (data.error == 0 ) {
                    window.location.reload();
                }
                $.fancybox.close();
                return false;
            }, 'json');

        });

    })
</script>

@include('seller.base.seller_pagefooter')
