@php
    /**
     * @var \Themes\Fala\Pages\DynamicPages\LandingPage $default_page
     */
    $header = $default_page->getHeader();
    $image = localeContent($header['imgUrl']) ?: url('/themes/fala/img/logo.png');
    $default_page->setFilteredContent();
@endphp

@extends('theme::layouts.default')

{{--Website title--}}
@section('title')
    {{ localeContent($header['title']) }}
    @parent
@stop

{{--Passing meta information to meta tag's widget--}}
@widget('sharing-meta-tags', [
'url' => url()->current(),
'seo' => $seo,
'info' => [
'meta_title' => localeContent($header['title']),
'meta_description' => $seo['description'],
'shared_image' => localeContent($header['imgUrl'])
]
])

@section('content')

    @widget('page-header', $header)

{{--    <div class="container-fluid " id="nav-crumbs">--}}
{{--        <div class="row">--}}
{{--            <img src="{{ url('themes/fala/img/gb-crumbs.png') }}" class="bg-crumbs">--}}
{{--            <div class="container">--}}
{{--                <div class="crumb">--}}
{{--                    <div class="page-title">--}}
{{--                        Gallery--}}
{{--                    </div>--}}
{{--                    <div class="page-crumbs">--}}
{{--                        <span><a href="#">Home</a></span><span><a href="#">Gallery</a></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container-fluid " id="widget-gallery-filters">--}}
{{--        <div class="row">--}}
{{--            <div class="container">--}}
{{--                <div class="gallery-filters d-flex justify-content-center align-items-center">--}}
{{--                    <div class="filters">--}}
{{--                        <ul class="justify-content-center align-items-center my-5">--}}
{{--                            <li><a href="#" class="active">All</a></li>--}}
{{--                            <li><a href="#">Images</a></li>--}}
{{--                            <li><a href="#">Functional Training</a></li>--}}
{{--                            <li><a href="#">Physical Therapy</a></li>--}}
{{--                            <li><a href="#">Speech Therapy</a></li>--}}
{{--                            <li><a href="#">Psychotherapy</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="open-filters d-block d-md-none">--}}
{{--                        <i class="fas fa-angle-down"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container-fluid" id="widget-gallery-list">--}}
{{--        <div clsas="row revers-block">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12 col-md-3" data-aos="fade-up">--}}
{{--                        <div class="item-list-gallery">--}}
{{--                            <div class="card animatePulse">--}}
{{--                                <a href="https://picsum.photos/500" data-fancybox="gallery1"--}}
{{--                                   data-caption=" Image caption goes here">--}}
{{--                                    <img class="card-img-top"--}}
{{--                                         src="https://picsum.photos/262/270"--}}
{{--                                         alt="Card image">--}}
{{--                                </a>--}}

{{--                                    <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg"--}}
{{--                                       data-fancybox="gallery1"--}}
{{--                                       data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"--}}
{{--                                       data-caption=" Image caption goes here"></a>--}}
{{--                                    <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg"--}}
{{--                                       data-fancybox="gallery1"--}}
{{--                                       data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"--}}
{{--                                       data-caption=" Image caption goes here"></a>--}}


{{--                                <img class="type-gallery photo" src="{{ url('themes/fala/img/photo-camera.png') }}">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="card-title">--}}
{{--                                        Image caption goes here--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-md-3" data-aos="fade-up">--}}
{{--                        <div class="item-list-gallery">--}}
{{--                            <div class="card animatePulse">--}}
{{--                                <a data-fancybox="gallery2" data-caption=" Image caption goes here"--}}
{{--                                   href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">--}}
{{--                                    <img class="card-img-top" src="https://picsum.photos/260/270" alt="Card image">--}}
{{--                                </a>--}}
{{--                                <div style="display:none;">--}}
{{--                                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"--}}
{{--                                       data-fancybox="gallery2"--}}
{{--                                       data-thumb="https://www.youtube.com/watch?v=_sI_Ps7JSEk"--}}
{{--                                       data-caption=" Image caption goes here"></a>--}}
{{--                                    <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg"--}}
{{--                                       data-fancybox="gallery2"--}}
{{--                                       data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"--}}
{{--                                       data-caption=" Image caption goes here"></a>--}}
{{--                                </div>--}}
{{--                                <img class="type-gallery video" src="{{ url('themes/fala/img/video-camera.png') }}">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="card-title">--}}
{{--                                        Image caption goes here--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-md-3" data-aos="fade-up">--}}
{{--                        <div class="item-list-gallery">--}}
{{--                            <div class="card animatePulse">--}}
{{--                                <a href="https://picsum.photos/500" data-fancybox--}}
{{--                                   data-caption=" Image caption goes here">--}}
{{--                                    <img class="card-img-top"--}}
{{--                                         src="https://picsum.photos/258/270"--}}
{{--                                         alt="Card image">--}}
{{--                                </a>--}}
{{--                                <img class="type-gallery photo" src="{{ url('themes/fala/img/photo-camera.png') }}">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="card-title">--}}
{{--                                        Image caption goes here--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-md-3" data-aos="fade-up">--}}
{{--                        <div class="item-list-gallery">--}}
{{--                            <div class="card animatePulse">--}}
{{--                                <a href="https://picsum.photos/500" data-fancybox--}}
{{--                                   data-caption=" Image caption goes here">--}}
{{--                                    <img class="card-img-top"--}}
{{--                                         src="https://picsum.photos/261/270"--}}
{{--                                         alt="Card image">--}}
{{--                                </a>--}}
{{--                                <img class="type-gallery photo" src="{{ url('themes/fala/img/photo-camera.png') }}">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="card-title">--}}
{{--                                        Image caption goes here--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-md-3" data-aos="fade-up">--}}
{{--                        <div class="item-list-gallery">--}}
{{--                            <div class="card animatePulse">--}}
{{--                                <a data-fancybox data-caption=" Image caption goes here"--}}
{{--                                   href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">--}}
{{--                                    <img class="card-img-top" src="https://picsum.photos/259/270" alt="Card image">--}}
{{--                                </a>--}}
{{--                                <img class="type-gallery video" src="{{ url('themes/fala/img/video-camera.png') }}">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="card-title">--}}
{{--                                        Image caption goes here--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    @while ($item = $default_page->pullNextWidget())
        @widget($item['widget'], $item)
    @endwhile
@endsection
