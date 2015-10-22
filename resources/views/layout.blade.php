<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />

    <title>{{ $title ? $title . ' - ' : '' }}{{ config('app.site_name') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <meta property="og:title" content="{{ $title ? $title . ' - ' : '' }}{{ config('app.site_name') }}" />
    <meta property="og:site_name" content="{{ config('app.site_name') }}" />
    <meta property="og:url" content="{{ url($og_object->url ?: \Request::path()) }}" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="{{ url($og_object->thumbnail_url ?: 'img/fb.png') }}" />
    <meta property="og:description" content="{{ $og_object->meta_description ?: 'The community for car enthusiasts and owners' }}" />
    <meta property="fb:app_id" content="{{ config('services.facebook.client_id') }}" />

    <link rel="canonical" href="{{ url($og_object->url ?: \Request::path()) }}">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ elixir('css/which.css') }}">

    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="/img/touchicon.png">

    @include('blocks.analytics')
</head>

<body>

@yield('content')

<script type="text/javascript" src="/js/vue.min.js"></script>
<script type="text/javascript" src="{{ elixir('js/which.js') }}"></script>

</body>
</html>
