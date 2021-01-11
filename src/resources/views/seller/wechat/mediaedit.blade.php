@include('admin.wechat.pageheader')

<div class="panel panel-default" style="margin:0;">
    <div class="panel-heading">{{ $lang['picture_edit'] }}</div>
    <div class="content of">
        <div class="flexilist of">
            <div class="main-info of">
                <form action="{{ route('seller/wechat/media_edit') }}" method="post" class="form-horizontal" role="form"
                      onsubmit="return false;">
                    @csrf
                    <table id="general-table" class="table table-hover ectouch-table">
                        <div class="item">
                            <div class="label-t">{{ $lang['picture_name']}}:</div>
                            <div class="label_value">
                                <input type='text' name='file_name' value="{{ $pic['file_name'] }}" class="text"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="label-t">&nbsp;</div>
                            <div class="label_value info_btn">
                                <input type="hidden" name="id" value="{{ $pic['id'] ?? '' }}"/>
                                <input type="submit" value="{{ lang('admin/common.button_submit') }}"
                                       class="btn button btn-danger bg-red"/>
                            </div>
                        </div>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        $(".form-horizontal").submit(function () {
            var ajax_data = $(".form-horizontal").serialize();
            $.post("{{ route('seller/wechat/media_edit') }}", ajax_data, function (data) {
                if (data.status > 0) {
                    window.parent.location.reload();
                }
                else {
                    layer.msg(data.error);
                    return false;
                }
            }, 'json');
        });
    })
</script>
@include('admin.wechat.pagefooter')
