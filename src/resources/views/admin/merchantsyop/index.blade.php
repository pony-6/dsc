@include('admin.base.header')

<script src="{{ asset('assets/mobile/vendor/fancybox/jquery.fancybox.js') }}"></script>

<link rel="stylesheet" type="text/css" href="{{ asset('assets/mobile/vendor/bootstrap/css/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/mobile/vendor/font-awesome/css/font-awesome.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/mobile/vendor/fancybox/jquery.fancybox.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/mobile/css/console_wechat.css') }}" />

<style>
    .list-div .handle .tDiv a, .btn_trash {height: 22px;}
</style>

<div class="wrapper shop_special">
    <div class="title">{{ __('yop.menu') }} - 子商户信息查询</div>
    <div class="content_tips">
        <div class="explanation" id="explanation">
            <div class="ex_tit"><i class="sc_icon"></i><h4>操作提示</h4><span id="explanationZoom" title="收起提示"></span>
            </div>
            <ul>
                <li>一、登录 <a href="http://open.yeepay.com/" target="_blank" />易宝开放平台</a>，申请好主商户号且下载私钥与公钥，填写到易宝支付方式配置项当中。然后申请子商户号入网申请，依次填写企业基本信息与资质等，提交到易宝官方，等待审核。</li>
            </ul>
        </div>
        <div class="flexilist of">
            <div class="common-content">
                <div class="list-div">

                    <table cellspacing="0" cellpadding="0" border="0">
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
                                    <a href="{{ route('admin/yop/apply') }}" class="btn_edit" title=""><i class="fa fa-edit"></i>{{ __('yop.apply_again') }}</a>
                                    @endif
                                </div>
                            </td>
                        </tr>

                        @else

                        <tbody>
                            <tr><td class="no-records" colspan="7">没有易宝子商户号？ <a href="{{ route('admin/yop/apply') }}">去申请</a></td></tr>
                        </tbody>

                        @endif

                    </table>

                </div>

            </div>
        </div>

    </div>
</div>


<script type="text/javascript">
    $(function(){

        // 查询入网状态
        $(".query_apply").click(function(){

            $.post("{{ route('admin/yop/query_apply') }}", '', function(data){

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

@include('admin.wechat.pagefooter')
