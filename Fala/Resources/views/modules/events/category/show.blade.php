@php
    /**
     * @var \Themes\Fala\Pages\Events\LandingPage $page
     */
    $image = localeContent($category->translations)->shared_image ?: localeContent($category->translations)->bg_image;
@endphp

@extends('theme::layouts.default')

{{--Website title--}}
@section('title')
    {{ localeContent($page->getContent()['header']['title']) }}
    @parent
@stop

{{--Passing meta information to meta tag's widget--}}
@widget('sharing-meta-tags', [
    'url' => url()->current(),
    'seo' => $seo,
    'info' => [
        'meta_title' => __('theme::news.page_title'),
        'meta_description' => localeContent($category->translations)->description,
        'shared_image' => $image ?: url('/themes/fala/img/logo.png')
    ]
])

@section('content')
    <div class="container my-5">
        @include('theme::modules.events.category.ajax')
    </div>
@endsection
