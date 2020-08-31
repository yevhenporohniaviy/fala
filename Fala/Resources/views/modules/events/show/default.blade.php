@php
    /**
     * @var \Themes\Fala\Pages\Events\LandingPage $page
     */
    $image = url(localeContent($event->translations)->shared_image ?: imgFirstMedia($event->related_media));
    $title = localeContent($event->translations)->title;
    $header = $page->getContent()['header'];
    $header['breadcrumbs'] = $event;
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
'meta_description' => localeContent($event->translations)->description,
'shared_image' => $image ?: url('/themes/fala/img/logo.png')
]
])


@section('content')

    {{--Banner--}}
    @widget('page-header', $header )

    {{--Main content--}}


    <div class="container-fluid mt-4" id="widget-detail">
        <div class="row">
            <div class="container">
                <div class="col-12 col-md-12 list-events" >
                    <div class="card">
                        <div class="card-img-top">
                            @if(!empty($event->related_media))
                                {{--Carousel--}}
                                <div class="position-relative">
                                    <div class="event-slider">
                                        @foreach($event->related_media as $media)
                                            @if($media['type'] == 'image')
                                                <div class="item">
                                                    <img src="{{ $media['thumb'] }}"
                                                         alt="{{ $caption = !empty($media['captions']) ? localeContent($media['captions']) : '' }}"
                                                         title="{{ $caption }}" class="img-fluid image-card-detail">
                                                </div>
                                            @else
                                                <div class="item">
                                                    <div class="video justify-content-center d-flex align-items-center">
                                                        <video class="video-fluid embed-responsive-item " loop>
                                                            <source src="{{ $media['url'] }}" type="video/mp4"/>
                                                        </video>
                                                        <div class="play-video layer" onclick="playVideo()">
                                                            <i class="fa fa-play-circle"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                        @endforeach
                                    </div>
                                    <div class="slick-arrow prev-event-slider"><i class="fas fa-chevron-left"></i></div>
                                    <div class="slick-arrow next-event-slider"><i class="fas fa-chevron-right"></i></div>
                                </div>

                            @endif
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center align-items-center revers-block">
                                <div class="col-3 col-md-1">
                                    <div class="col-12 number-event">
                                        {{ date('d', strtotime($event->start_date)) }}
                                    </div>
                                    <div class="col-12 date-event conference">
                                        {{ date('M', strtotime($event->start_date)) }}
                                        <span>{{ date('Y', strtotime($event->start_date)) }}</span>
                                    </div>
                                </div>
                                <div class="col-9 col-md-8">
                                    <div class="card-title text-transform my-3">
                                        {{ str_limit(localeContent($event->translations)->title, 40) }}
                                    </div>

                                    <div class="info d-flex align-content-center">
                                        <div class="event-type conference"><i class="fas fa-tag"></i> {{$event->event_category?$event->event_category->title:''}}
                                        </div>
                                        <div class="location "><i class="fas fa-map-marker-alt"></i> {{ $event->location->title }}
                                        </div>
                                        <div class="location-show mx-2">
                                            <a href="https://www.google.com/maps/search/?api=1&query={{$event->lat}},{{$event->lng}}" target="_blank">
                                                show on map
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 link">
                                    <a href="{{ route('web.events.ics',['id' =>$event->id]) }}" class="btn-link animatePulse">
                                        add to calendar
                                    </a>
                                </div>
                            </div>
                            <div class="card-description text-transform mb-3 ">
                                {!! localeContent($event->translations)->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- AddEvent script --}}
@section('scripts')
    <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
@endsection
