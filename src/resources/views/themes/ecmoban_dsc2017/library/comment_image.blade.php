

@if($img_list)


@foreach($img_list as $list)

<li><a href="{{ $list['comment_img'] }}" target="_blank"><img width="78" height="78" alt="" src="{{ $list['comment_img'] }}"></a><i class="iconfont icon-cha" ectype="
@if($report == 1)
reimg-remove
@elseif ($report == 2)
compimg-remove
@else
cimg-remove
@endif
" data-imgid="{{ $list['id'] }}"></i></li>

@endforeach


@endif
