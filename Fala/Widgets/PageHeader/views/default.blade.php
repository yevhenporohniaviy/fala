<?php

/**
 * @var $page array
 * @var $link array
 */
$blockImage = localeContent($page['imgUrl']) ?: 'themes/fala/img/main-banner.png';

?>

{{--<div class="container-fluid">--}}
    {{--<div class="row">--}}
        {{--<div class="top-banner">--}}
            {{--@if(!empty($blockImage))--}}
                {{--<img src="{{ url($blockImage) }}?w=1920&h=415&fit=crop" alt="{{localeContent($page['title'])}}"--}}
                     {{--class="img-fluid w-100">--}}
            {{--@endif--}}
            {{--<div class="container caption">--}}
                {{--@if(!empty($breadcrumbs))--}}
                    {{--<div class="row">--}}
                        {{--<div>--}}
                            {{--@foreach($breadcrumbs as $breadcrumb)--}}
                                {{--<span class="breadcrumb-item">{{ $breadcrumb }}</span>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endif--}}
                {{--<div class="row">--}}
                    {{--<div class="title">--}}
                        {{--{{localeContent($page['title'])}}--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="container-fluid " id="nav-crumbs">
    <div class="row">
        <img src="{{ url('themes/fala/img/gb-crumbs.png') }}" class="bg-crumbs">
        <div class="container">
            <div class="crumb">
                <div class="page-title">
                    {{localeContent($page['title'])}}
                </div>
                <div class="page-crumbs">
                    <span> {{ __('theme::sub_header.title') }}</span>

                    @if(!empty($breadcrumbs))

                        @foreach($breadcrumbs as $breadcrumb)
                            <span>   {{$breadcrumb}}</span>
                        @endforeach


                    @else
                    <span> {{localeContent($page['title'])}}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
