@section('meta')
    <meta name="robots" content="index,follow" />
    <meta property="title" content="{{ $title }}"/>
    <meta name="keywords" content="{{ $seo['keywords'] }}">
    <meta name="description" content="{{ str_limit($description, 200) }}"/>
    <meta name="language" content="{{ app()->getLocale() }}">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $title }}">
    <meta itemprop="image" content="{{ $image }}">
    <meta itemprop="description" content="{{ str_limit($description, 200) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:title" content="{{ $title }}">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="{{ $image }}">
    <meta name="twitter:description" content="{{ str_limit($description, 200) }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $title }}"/>
    <meta property="og:url" content="{{ $url }}"/>
    <meta property="og:image" content="{{ $image }}"/>
    <meta property="og:description" content="{{ str_limit($description, 200) }}"/>
    <meta property="og:site_name" content="{{ $seo['company_name'] }}"/>
@stop
