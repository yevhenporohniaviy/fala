@php
    /**
     * @var \Themes\Fala\Pages\Events\LandingPage $page
     */
    $image = localeContent($page->getContent()['header']['imgUrl']) ?: url('/themes/fala/img/logo.png');
    $title = localeContent($page->getContent()['header']['title']);
@endphp

@extends('theme::layouts.default')

{{--Website title--}}
@section('title')
    {{ $title }}
    @parent
@stop

{{--Passing meta information to meta tag's widget--}}
@widget('sharing-meta-tags', [
    'url' => url()->current(),
    'seo' => $seo,
    'info' => [
        'meta_title' => $title,
        'meta_description' => $seo['description'],
        'shared_image' => $image
    ]
])

@section('content')
{{--    @dd($page->getContent()['header'])--}}
    {{--Banner--}}
    @widget('page-header', [
        'page' => $page->getContent()['header'],
        'link' => null
    ])

    {{--List Packages--}}
    @include('theme::modules.events.elements.list')

    {{---Modal--}}
    @include('theme::modules.events.elements.modal', ['summary' => $page->getSummaryInfo()])
@endsection


@section('scripts')
    <script>

      let playVideo = function () {
        let video = $('.video-fluid').get(0);
        if (video.paused) {
          video.play();
          $('.play-video').hide();
        } else {
          video.pause();
          $('.play-video').show();
        }
      }
    </script>
@endsection
