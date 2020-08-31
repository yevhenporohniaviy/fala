@php
    /**
     * @var \Themes\Fala\Pages\ContactUs\LandingPage $default_page
     * @var \Illuminate\Support\Collection $locations
     */
    $header = $default_page->getHeader();

    $image = localeContent($header['imgUrl']) ?: url('/themes/fala/img/logo.png');
    $title = localeContent($header['title']);

$location = $locations->first();

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
    {{--Banner--}}
    @widget('page-header', $header)
    @if ($locations)
        {{--        @dd($locations[0])--}}
    @endif

    {{--Contact Form--}}
    <div class="container-fluid" id="widget-contact-form">
        <div class="container">
            <div class="row revers-block">
                <div class="col-12 col-md-6">
                    @widget('contact-form', $default_page->getContactForm())
                </div>
                <div class="col-12 col-md-6">
                    <div class="info-description">
                        <div class="text text-transform align-block">
                            {{ localeContent($location->translations)->title }}
                        </div>

                        <div class="contact-blocks">
                            <div class="col-12 col-md-12">
                                <div class="row justify-content-center revers-block">
                                    <div class="col-12 col-md-4 d-flex my-3">
                                        <div class="vision-mission-box first-line">
                                            <div class="icon">
                                                <img src="{{ url('themes/fala/img/marker-icon.png') }}" class="vision">
                                            </div>
                                            <div class="text">
                                                <div class="title">
                                                    {{ localeContent($location->translations)->title }}
                                                </div>

                                                <a href="http://www.google.com/maps/place/{{ $location->lng }},{{ $location->lat}}" class="link animatePulse">
                                                    show on map
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex my-3">
                                        <div class="vision-mission-box middle-line">
                                            <div class="icon">
                                                <img src="{{ url('themes/fala/img/contact-phone-icon.png') }}" class="vision">
                                            </div>
                                            <div class="text">
                                                <div class="title">
                                                    {!! localeContent($location->translations)->phone !!}

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex my-3">
                                        <div class="vision-mission-box last-line">
                                            <div class="icon">
                                                <img src="{{ url('themes/fala/img/letter-icon.png') }}" class="vision">
                                            </div>
                                            <div class="text">
                                                <div class="title">

                                                    {{ $location->email }}

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="social-links">
                            @widget('social-icons')
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
