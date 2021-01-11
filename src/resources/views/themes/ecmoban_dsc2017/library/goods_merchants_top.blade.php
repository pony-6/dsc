
@if($goods['user_id'])

<div class="g-d-store-info">
	<div class="item">
		<a href="{{ $goods['store_url'] }}" class="s-name" target="_blank">{{ $goods['rz_shopName'] }}</a>
		<a id="IM" href="javascript:openWin(this)"  goods_id="{{ $goods['goods_id'] }}" class="s-a-kefu"><i class="icon i-kefu"></i></a>
	</div>
	<div class="item dsc-store-item">
		<div class="s-score">
			<span class="score-icon"><span class="score-icon-bg" style="width:{{ $merch_cmt['cmt']['all_zconments']['allReview'] }}%;"></span></span>
			<span>{{ $merch_cmt['cmt']['all_zconments']['score'] }}</span>
			<i class="iconfont icon-down"></i>
		</div>
		<div class="s-score-info">
			<div class="s-cover"></div>
			<div class="g-s-parts">
				<div class="parts-tit">
					<span class="col1">{{ $lang['seller_score'] }}</span>
					<span class="col2">&nbsp;</span>
					<span class="col3">{{ $lang['industry_compare'] }}</span>
				</div>
				<div class="parts-item parts-goods">
					<span class="col1">{{ $lang['goods'] }}</span>
					<span class="col2
@if($merch_cmt['cmt']['commentRank']['zconments']['is_status'] == 1)
ftx-02
@elseif ($merch_cmt['cmt']['commentRank']['zconments']['is_status'] == 2)
average
@else
ftx-01
@endif
">{{ $merch_cmt['cmt']['commentRank']['zconments']['score'] }}<i class="iconfont icon-arrow-
@if($merch_cmt['cmt']['commentRank']['zconments']['is_status'] == 1)
up
@elseif ($merch_cmt['cmt']['commentRank']['zconments']['is_status'] == 2)
average
@else
down
@endif
"></i></span>
					<span class="col3">{{ $merch_cmt['cmt']['commentRank']['zconments']['up_down'] }}%</span>
				</div>
				<div class="parts-item parts-goods">
					<span class="col1">{{ $lang['service'] }}</span>
					<span class="col2
@if($merch_cmt['cmt']['commentServer']['zconments']['is_status'] == 1)
ftx-02
@elseif ($merch_cmt['cmt']['commentServer']['zconments']['is_status'] == 2)
average
@else
ftx-01
@endif
">{{ $merch_cmt['cmt']['commentServer']['zconments']['score'] }}<i class="iconfont icon-arrow-
@if($merch_cmt['cmt']['commentServer']['zconments']['is_status'] == 1)
up
@elseif ($merch_cmt['cmt']['commentServer']['zconments']['is_status'] == 2)
average
@else
down
@endif
"></i></span>
					<span class="col3">{{ $merch_cmt['cmt']['commentServer']['zconments']['up_down'] }}%</span>
				</div>
				<div class="parts-item parts-goods">
					<span class="col1">{{ $lang['deliver_goods'] }}</span>
					<span class="col2
@if($merch_cmt['cmt']['commentDelivery']['zconments']['is_status'] == 1)
ftx-02
@elseif ($merch_cmt['cmt']['commentDelivery']['zconments']['is_status'] == 2)
average
@else
ftx-01
@endif
">{{ $merch_cmt['cmt']['commentDelivery']['zconments']['score'] }}<i class="iconfont icon-arrow-
@if($merch_cmt['cmt']['commentDelivery']['zconments']['is_status'] == 1)
up
@elseif ($merch_cmt['cmt']['commentDelivery']['zconments']['is_status'] == 2)
average
@else
down
@endif
"></i></span>
					<span class="col3">{{ $merch_cmt['cmt']['commentDelivery']['zconments']['up_down'] }}%</span>
				</div>
			</div>
			<div class="tel">{{ $lang['telephone'] }}：{{ $basic_info['kf_tel'] }}</div>
			<div class="store-href">
				<a href="{{ $goods['store_url'] }}" class="store-home"><i class="iconfont icon-home-store"></i>{{ $lang['Go_to_store'] }}</a>
			</div>
		</div>
	</div>
	<div class="item">
		<a href="javascript:void(0);" ectype="collect_store" data-type='store' data-value='{"userid":{{ $user_id }},"storeid":{{ $goods['user_id'] }}}' data-url="{{ request()->fullUrl() }}" class="gz-store-top s-follow"></a>
	</div>
</div>

@endif


<script type="text/javascript">
$(function(){
	goods_collect_store({{ $goods['user_id'] ?? 0 }});
});
</script>
