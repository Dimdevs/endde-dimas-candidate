<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--    Document Title-->
<title>ICAS - {{ isset($meta_title) ? $meta_title : 'MENU' }} - 2024</title>

<!--    Favicons-->
<link rel="apple-touch-icon" sizes="180x180" href="{{ !empty($logos) && !empty($logos->logo_single) ? (Str::startsWith($logos->logo_single, ['http://', 'https://']) ? $logos->logo_single : asset($logos->logo_single)) : asset('template/base-website/assets/img/favicons/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ !empty($logos) && !empty($logos->logo_single) ? (Str::startsWith($logos->logo_single, ['http://', 'https://']) ? $logos->logo_single : asset($logos->logo_single)) : asset('template/base-website/assets/img/favicons/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ !empty($logos) && !empty($logos->logo_single) ? (Str::startsWith($logos->logo_single, ['http://', 'https://']) ? $logos->logo_single : asset($logos->logo_single)) : asset('template/base-website/assets/img/favicons/favicon-16x16.png') }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ !empty($logos) && !empty($logos->logo_single) ? (Str::startsWith($logos->logo_single, ['http://', 'https://']) ? $logos->logo_single : asset($logos->logo_single)) : asset('template/base-website/assets/img/favicons/favicon.ico') }}">
<meta name="msapplication-TileImage" content="{{ !empty($logos) && !empty($logos->logo_single) ? (Str::startsWith($logos->logo_single, ['http://', 'https://']) ? $logos->logo_single : asset($logos->logo_single)) : asset('template/base-website/assets/img/favicons/mstile-150x150.png') }}">

{{-- <link rel="manifest" href="{{ asset('template/base-admin/dist/assets/modules/ionicons/builder/manifest.json') }}"> --}}

<meta name="theme-color" content="#ffffff">

{{-- meta static --}}
<meta name="keywords" content="{{ isset($metas['keywords']) ? $metas['keywords'] : 'ICAS' }}">
<meta name="description" content="{{ isset($metas['description']) ? $metas['description'] : 'ICAS' }}">

<!--    Stylesheets-->
<link href="{{ asset('template/base-website/assets/css/theme.css') }}" rel="stylesheet" />
<link href="{{ asset('template/base-website/assets/css/add.css') }}" rel="stylesheet" />

<link
    href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap"
    rel="stylesheet">

<link rel="stylesheet" href="{{ asset('template/base-admin/dist/assets/modules/fontawesome/css/all.min.css')}}">
