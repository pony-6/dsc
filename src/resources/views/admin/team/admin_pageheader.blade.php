<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $lang['cp_home'] }}</title>
        {!! global_assets('css', 'team', 1, 'mobile') !!}
    <script type="text/javascript">var ROOT_URL = '{{ asset('/') }}';</script>
        {!! global_assets('js', 'team', 1, 'mobile') !!}

        @if(config('shop.lang') == 'en')
            <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/en.css') }}" />
        @endif

    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }});
    </script>
</head>
<body>
