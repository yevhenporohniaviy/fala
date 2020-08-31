@php
    /**
     * @var \Themes\Fala\Pages\DynamicPages\LandingPage $default_page
     * @var \Modules\DynamicPages\Entities\Page $page
     * @var \Illuminate\Support\Collection $pages
     * @var \Illuminate\Support\Collection $categories
     */
    $header = $default_page->getHeader();
    $pageTitle = localeContent($page->translations)->title;
    $blockImage = localeContent($header['imgUrl']);
    $image = url(imgFirstMedia($page->related_media) ?: '/themes/fala/img/logo.png');
    $media = $page->related_media;
    $default_page->setFilteredContent(true);
@endphp

@extends('theme::layouts.default')

{{--Website title--}}
@section('title')
    {{ $pageTitle }}
    @parent
@stop

{{--Passing meta information to meta tag's widget--}}
@widget('sharing-meta-tags', [
'url' => url()->current(),
'seo' => $seo,
'info' => [
'meta_title' => $pageTitle,
'meta_description' => localeContent($page->translations)->summary,
'shared_image' => localeContent($page->translations)->shared_image ?: $image
]
])

@section('content')
    @widget('page-header', $default_page->getContent()['header'])
    {{--@if(!empty($media))--}}
    {{--<div class="container-fluid">--}}
    {{--<div class="row">--}}
    {{--<div id="carouselWhatFa" class="carousel slide" data-ride="carousel">--}}
    {{--<ol class="carousel-indicators">--}}
    {{--@foreach($media as $item)--}}
    {{--<li data-target="#carouselWhatFa" data-slide-to="{{ $loop->index }}"--}}
    {{--class="{{$loop->first ? 'active' : ''}}"></li>--}}
    {{--@endforeach--}}
    {{--</ol>--}}
    {{--<div class="carousel-inner">--}}
    {{--@foreach($media as $item)--}}
    {{--<div class="carousel-item carousel-item-video {{$loop->first ? 'active' : ''}}">--}}
    {{--<div class="shadow-video"></div>--}}
    {{--<img class="img-fluid item-img" src="{{ url('themes/fala/img/img-test3.png') }}"--}}
    {{--alt="First slide">--}}
    {{--<div class="carousel-caption">--}}
    {{--<h5 class="title">Become Familiar With<br>--}}
    {{--Friedreich's Ataxia</h5>--}}
    {{--<a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"--}}
    {{--class="btn-play mt-3">--}}
    {{--<img src="{{ url('themes/fala/img/play_btn.png') }}"--}}
    {{--class="img-fluid animatePulse">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--@endforeach--}}
    {{--                    <div class="carousel-item carousel-item-video">--}}
    {{--                        <div class="shadow-video"></div>--}}
    {{--                        <img class="img-fluid item-img" src="{{ url('themes/fala/img/img-test3.png') }}" alt="First slide">--}}
    {{--                        <div class="carousel-caption">--}}
    {{--                            <h5 class="title">Become Familiar With<br>--}}
    {{--                                Friedreich's Ataxia</h5>--}}
    {{--                            <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-play mt-3">--}}
    {{--                                <img src="{{ url('themes/fala/img/play_btn.png') }}" class="img-fluid animatePulse">--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--</div>--}}
    {{--<a class="carousel-control-prev" href="#carouselWhatFa" role="button" data-slide="prev">--}}
    {{--<img src="{{ url('themes/fala/img/arrow-carousel-left.png') }}" class="img-fluid">--}}
    {{--</a>--}}
    {{--<a class="carousel-control-next" href="#carouselWhatFa" role="button" data-slide="next">--}}
    {{--<img src="{{ url('themes/fala/img/arrow-carousel-right.png') }}" class="img-fluid">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--@endif--}}
    @include('theme::modules.dynamic_pages.types.' . $page->type, ['page' => $page])

    @while ($item = $default_page->pullNextWidget())
        @if($item['widget'] == 'summary-block' && $item['active'] == 'half-block')

            <div class="container-fluid {{ $pageTitle === 'Living with FA' || $pageTitle === 'Get Involved' ? '':'page-section' }}" id="widget-mission-vision">
                <div class="row">
                    <div class="container">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                @php
                                    $item['data']['class'] = 'vision-line';
                                @endphp
                                @widget($item['widget'], $item)
                                @php
                                    $item = $default_page->pullNextWidget();
                                    $item['data']['class'] = 'mission-line';
                                @endphp

                                @if($item['widget'] == 'summary-block' && $item['active'] == 'half-block')
                                    @widget($item['widget'], $item)
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            @widget($item['widget'], $item)
        @endif
    @endwhile
@endsection
