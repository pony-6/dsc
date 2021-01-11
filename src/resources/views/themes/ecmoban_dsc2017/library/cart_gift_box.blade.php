<div class="gift-mt">{{ $lang['Can_receive_up_to'] }}{{ $activity['act_type_ext'] }}{{ $lang['jian_goods'] }}，{{ $lang['checked_in'] }}&nbsp;<em class="num" id="giftNumber_{{ $activity['act_id'] }}_
@if($gift_div)
{{ $ru_id }}
@else
{{ $goods['ru_id'] }}
@endif
">{{ $activity['cart_favourable_gift_num'] }}</em>&nbsp;{{ $lang['jian'] }}<strong class="close" ectype="close">X</strong></div>
<div class="gift-goods" ectype="giftGoods" data-num="{{ $activity['act_type_ext'] }}">

@foreach($activity['act_gift_list'] as $gift_list)

  <div class="item-gift">
    
@if($activity['available'])

      <div class="p-checkbox">
          <input type="checkbox" id="{{ $gift_list['id'] }}_
@if($gift_div)
{{ $ru_id }}
@else
{{ $goods['ru_id'] }}
@endif
_{{ $activity['act_id'] }}" class="ui-checkbox" data-actid="{{ $activity['act_id'] }}" data-ruid="
@if($gift_div)
{{ $ru_id }}
@else
{{ $goods['ru_id'] }}
@endif
" value="{{ $gift_list['id'] }}" data-name="gift" ectype="giftGoodsCheckbox">
          <label for="{{ $gift_list['id'] }}_
@if($gift_div)
{{ $ru_id }}
@else
{{ $goods['ru_id'] }}
@endif
_{{ $activity['act_id'] }}" class="ui-label">&nbsp;</label>
      </div>
    
@endif

      <div class="p-img"><a href="{{ $gift_list['url'] }}" target="_blank"><img src="{{ $gift_list['thumb_img'] }}" width="58" height="58" /></a></div>
      <div class="p-msg">
          <div class="p-name">
              <a href="{{ $gift_list['url'] }}" target="_blank" title="{{ $gift_list['name'] }}">{{ $gift_list['name'] }}</a>
          </div>
          <div class="p-price">
              <strong>
                  <em>{{ $gift_list['formated_price'] }}</em>
              </strong>
          </div>
      </div>
  </div>
  
@endforeach

</div>
<div class="op-btns ac">
  <a data-actid="{{ $activity['act_id'] }}" data-ruid="
@if($gift_div)
{{ $ru_id }}
@else
{{ $goods['ru_id'] }}
@endif
" class="sc-btn sc-redBg-btn btn25" ectype="giftBtn">{{ $lang['assign'] }}</a>
  <a href="javascript:void(0)" class="sc-btn btn25" ectype="close">{{ $lang['is_cancel'] }}</a>
</div>
<i class="gift-icon"></i>
  
