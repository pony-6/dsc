<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="{{ $keywords }}" />
<meta name="Description" content="{{ $description }}" />

@if($auto_redirect)

<meta http-equiv="refresh" content="3;URL={{ $message['back_url'] }}" />

@endif


<title>{{ $page_title }}</title>



<link rel="shortcut icon" href="favicon.ico" />
@include('frontend::library/js_languages_new')
</head>
<body>
@include('frontend::library/page_header_common')
<div class="w w1200">
    <div class="no_records message_records">
        <i class="no_icon_two"></i>
        <div class="no_info no_info_line w500">
            <h3>{!! $message['content'] !!}</h3>
            <div class="no_btn">

@if($message['url_info'])


@foreach($message['url_info'] as $info => $url)

                <a href="{{ $url }}" class="btn sc-redBg-btn">{{ $info }}</a>

@endforeach


@endif

            </div>
        </div>
    </div>
</div>
@include('frontend::library/page_footer')
<script type="text/javascript" src="{{ skin('js/dsc-common.js') }}"></script>
</body>
</html>
