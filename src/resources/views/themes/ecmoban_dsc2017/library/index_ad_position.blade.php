
<ul>
	
@foreach($ad_child as $ad)

	<li style="background:url({{ $ad['ad_code'] }}) center center no-repeat;"><div class="banner-width"><a href="{{ $ad['ad_link'] }}" target="_blank"></a></div></li>
	
@endforeach

</ul>