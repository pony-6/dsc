<div class="brand-section">
	<div class="bl-title"><h2>{{ $lang['goods_list'] }}<i></i></h2>
@if($cat_id)
<a href="category.php?id={{ $cat_id }}&brand={{ $brand_id }}" class="more ftx-05">{{ $lang['see_more'] }}></a>
@endif
</div>
	<div class="bl-content">
		<div class="bd">
			<ul>
				
@foreach($goods_list as $goods)

				
@if($loop->iteration <= 100)

				<li>
					<div class="p-img"><a href="{{ $goods['url'] }}" target="_blank"><img src="{{ $goods['goods_thumb'] }}"></a></div>
					<div class="p-price">{{ $goods['shop_price'] }}</div>
					<div class="p-name"><a href="{{ $goods['url'] }}" target="_blank" title="{{ $goods['goods_name'] }}">{{ $goods['goods_name'] }}</a></div>
				</li>								
				
@endif

				
@endforeach

			</ul>
		</div>
	</div>
</div>