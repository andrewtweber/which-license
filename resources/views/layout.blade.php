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
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ elixir('css/which.css') }}">

    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="/img/touchicon.png">

    @include('blocks.analytics')
</head>

<body>

<div class="container-fluid">

<div class="row">
	<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

@yield('content')

	</div>
	<div class="col-sm-2 col-md-3">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- OSS License Ad -->
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-2597949687258785"
		     data-ad-slot="6091839023"
		     data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
</div>

</div>

<footer class="text-center">
	Made by <a href="http://github.com/andrewtweber">@andrewtweber</a>
</footer>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="{{ elixir('js/which.js') }}"></script>

</body>
</html>
