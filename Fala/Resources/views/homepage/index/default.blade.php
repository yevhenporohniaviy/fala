@php
    /**
     * @var \Themes\Fala\Pages\Home\LandingPage $homepage
     */
    $image = url('/themes/fala/img/Logo.png');
@endphp

@extends('theme::layouts.default')

{{--Website title--}}
@section('title')
    {{ __('theme::common.homepage_title') }}
    @parent
@stop

{{--Passing meta information to meta tag's widget--}}
@widget('sharing-meta-tags', [
'url' => url()->current(),
'seo' => $seo,
'info' => [
'meta_title' => __('theme::common.homepage_title'),
'meta_description' => $seo['description'],
'shared_image' => $image
]
])

@section('content')
    {{--Main banner--}}
    {{--@if($slider = $homepage->getSlider())--}}
    {{--<div class="container-fluid p-0">--}}
    {{--@widget('homepage-slider', ['data' => ['slider' => $slider]])--}}
    {{--</div>--}}
    {{--@endif--}}


    @if($slider = $homepage->getSlider())
        @widget('homepage-slider', ['data' => $slider])
    @endif


    @if($data = $homepage->getOurStory())
        @widget('our-story', ['data' => $data])
    @endif
{{--    <div class="container-fluid" id="widget-account">--}}
{{--        <div class="row">--}}
{{--            <div class="container">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="row revers-block">--}}
{{--                        <div class="col-12 col-md-3 col-sm-6 my-5">--}}
{{--                            <div class="account">--}}
{{--                                <img src="{{ url('themes/fala/img/Diagnosed-icon.png') }}">--}}
{{--                                <span class="count diagnosed">243</span>--}}
{{--                                <div class="text">Diagnosed with FA</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-md-3 col-sm-6 my-5">--}}
{{--                            <div class="account">--}}
{{--                                <img src="{{ url('themes/fala/img/Family-icon.png') }}">--}}
{{--                                <span class="count families">7</span>--}}
{{--                                <div class="text">Families helped</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-md-3 col-sm-6 my-5">--}}
{{--                            <div class="account">--}}
{{--                                <img src="{{ url('themes/fala/img/Volunteers-icon.png') }}">--}}
{{--                                <span class="count volunteer ">42</span>--}}
{{--                                <div class="text">Volunteer helpers</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-md-3 col-sm-6 my-5">--}}
{{--                            <div class="account">--}}
{{--                                <img src="{{ url('themes/fala/img/Donation-icon.png') }}">--}}
{{--                                <span class="count donat">62871</span>--}}
{{--                                <div class="text">Donated</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    @if($data = $homepage->getWhatIsFa())
        @widget('what-is-fa',['data' => $data])
    @endif

    @if($data = $homepage->getDiagnosedSlider())
        @widget('diagnosed-slider',['data' => $data])
    @endif
    @if($data = $homepage->getTreatments())
        @widget('treatments',['data' => $data])
    @endif
    @if($data = $homepage->getGetInvolved())
        @widget('get-involved',['data' => $data])
    @endif

    @if($data = $homepage->getEventsList())
        @widget('events-list',['events' => $data])
    @endif

    @if($data = $homepage->getSubscribes())
        @widget('subscribes',['data' => $data])
    @endif



@endsection



