<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ $title ?? env('APP_NAME') }}</title>
<meta content="" name="description">
<meta content="" name="keywords">
<meta content='no-cache' name='turbo-cache-control'/>
<!-- Favicons -->
<link href="{{ asset('img/logo.png') }}" rel="icon">
<link href="{{ asset('img/logo.png') }}" rel="apple-touch-icon">