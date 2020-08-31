<?php

$hash = '';
if(!empty($page['hash'])){
    $hash = $page['hash'];
}
?>

 @if(!empty($slides))

     <div id="{{$hash}}" class="{{$hash !== '' ? 'page-section':''}}">
         <div class="container-fluid">
        <div class="row">
            <div id="carouselWhatFa" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($slides as $item)
                        <li data-target="#carouselWhatFa" data-slide-to="{{ $loop->index }}"
                            class="{{$loop->first ? 'active' : ''}}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">

                        @foreach($slides as $slide)
                            @if(!empty(localeContent($slide->translations)->video))

                                <div class="carousel-item  carousel-item-video{{$loop->first ? 'active' : ''}}">
                                    <div class="shadow-video"></div>
                                    <img class="img-fluid item-img" src="{{ localeContent($slide->translations)->image }}?h=680&fit=crop" alt="First slide">
                                    <div class="carousel-caption">
                                        <h5 class="title my-3">{{ str_limit(localeContent($slide->translations)->title, 100) }}</h5>
                                        <p class="description my-2 col-md-8 ">
                                            {{ str_limit(localeContent($slide->translations)->subtitle, 100) }}
                                        </p>
                                        @if($slide->has_link)
                                            @if($slide->is_external)
                                                <a href="{{ localeContent($slide->translations)->external_url }}" target="_blank" class="btn-link mt-5 animatePulse">
                                                    {{ localeContent($slide->translations)->btn_text }}
                                                </a>
                                            @else
                                                <a href="{{ localizedUrl(localeContent($slide->internal_url['url'])) }}" class="btn-link mt-5 animatePulse">
                                                    {{ localeContent($slide->translations)->btn_text }}
                                                </a>
                                            @endif
                                        @endif
                                        <a data-fancybox href="{{ localeContent($slide->translations)->video }}" class="btn-play mt-5">
                                            <img src="{{ url('themes/fala/img/play_btn.png') }}" class="img-fluid animatePulse">
                                        </a>
                                    </div>
                                </div>
                            @else

                                <div class="carousel-item carousel-item-video {{$loop->first ? 'active' : ''}}">
                                    <div class="shadow-video"></div>
                                    <img class="img-fluid item-img" src="{{ localeContent($slide->translations)->image }}?h=680&fit=crop" alt="First slide">
                                    <div class="carousel-caption ">
                                        <h5 class="title my-3 "> {{ str_limit(localeContent($slide->translations)->title, 100) }}</h5>
                                        <p class="description my-2 col-md-8 ">
                                            {{ str_limit(localeContent($slide->translations)->subtitle, 100) }}
                                        </p>

                                        @if($slide->has_link)
                                            @if($slide->is_external)
                                                <a href="{{ localeContent($slide->translations)->external_url }}" target="_blank" class="btn-link mt-5 animatePulse">
                                                    {{ localeContent($slide->translations)->btn_text }}
                                                </a>
                                            @else
                                                <a href="{{ localizedUrl(localeContent($slide->internal_url['url'])) }}" class="btn-link mt-5 animatePulse">
                                                    {{ localeContent($slide->translations)->btn_text }}
                                                </a>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselWhatFa" role="button" data-slide="prev">
                    <img src="{{ url('themes/fala/img/arrow-carousel-left.png') }}" class="img-fluid">
                </a>
                <a class="carousel-control-next" href="#carouselWhatFa" role="button" data-slide="next">
                    <img src="{{ url('themes/fala/img/arrow-carousel-right.png') }}" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
     </div>

@endif

{{--<div class="container-fluid">--}}
{{--    <div class="row">--}}
{{--        <div id="mainCarousel" class="carousel slide" data-ride="carousel">--}}
{{--            <ol class="carousel-indicators">--}}
{{--                @foreach($slides as $slide)--}}
{{--                    <li data-target="#mainCarousel" data-slide-to="{{$loop->iteration}}" class=" {{$loop->first ? 'active' : ''}}"></li>--}}
{{--                @endforeach--}}
{{--            </ol>--}}
{{--            <div class="carousel-inner">--}}

{{--                @foreach($slides as $slide)--}}
{{--                    @if(!empty(localeContent($slide->translations)->video))--}}

{{--                        <div class="carousel-item  {{$loop->first ? 'active' : ''}}">--}}
{{--                            <img class="img-fluid item-img" src="{{ localeContent($slide->translations)->image }}?h=680&fit=crop" alt="First slide">--}}
{{--                            <div class="carousel-caption">--}}
{{--                                <h5 class="title my-3">{{ str_limit(localeContent($slide->translations)->title, 14) }}</h5>--}}
{{--                                <p class="description my-2 col-md-8 ">--}}
{{--                                    {{ str_limit(localeContent($slide->translations)->subtitle, 40) }}--}}
{{--                                </p>--}}
{{--                                @if($slide->has_link)--}}
{{--                                    @if($slide->is_external)--}}
{{--                                        <a href="{{ localeContent($slide->translations)->external_url }}" target="_blank" class="btn-link mt-5 animatePulse">--}}
{{--                                            {{ localeContent($slide->translations)->btn_text }}--}}
{{--                                        </a>--}}
{{--                                    @else--}}
{{--                                        <a href="{{ localizedUrl(localeContent($slide->internal_url['url'])) }}" class="btn-link mt-5 animatePulse">--}}
{{--                                            {{ localeContent($slide->translations)->btn_text }}--}}
{{--                                        </a>--}}
{{--                                    @endif--}}
{{--                                @endif--}}
{{--                                <a data-fancybox href="{{ localeContent($slide->translations)->video }}" class="btn-play mt-5">--}}
{{--                                    <img src="{{ url('themes/fala/img/play_btn.png') }}" class="img-fluid animatePulse">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @else--}}

{{--                        <div class="carousel-item {{$loop->first ? 'active' : ''}}">--}}
{{--                            <img class="img-fluid item-img" src="{{ localeContent($slide->translations)->image }}?h=680&fit=crop" alt="First slide">--}}
{{--                            <div class="carousel-caption ">--}}
{{--                                <h5 class="title my-3 "> {{ str_limit(localeContent($slide->translations)->title, 14) }}</h5>--}}
{{--                                <p class="description my-2 col-md-8 ">--}}
{{--                                    {{ str_limit(localeContent($slide->translations)->subtitle, 40) }}--}}
{{--                                </p>--}}

{{--                                @if($slide->has_link)--}}
{{--                                    @if($slide->is_external)--}}
{{--                                        <a href="{{ localeContent($slide->translations)->external_url }}" target="_blank" class="btn-link mt-5 animatePulse">--}}
{{--                                            {{ localeContent($slide->translations)->btn_text }}--}}
{{--                                        </a>--}}
{{--                                    @else--}}
{{--                                        <a href="{{ localizedUrl(localeContent($slide->internal_url['url'])) }}" class="btn-link mt-5 animatePulse">--}}
{{--                                            {{ localeContent($slide->translations)->btn_text }}--}}
{{--                                        </a>--}}
{{--                                    @endif--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                @endforeach--}}

{{--            </div>--}}
{{--            <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">--}}
{{--                <img src="{{ url('themes/fala/img/arrow-carousel-left.png') }}" class="img-fluid">--}}
{{--            </a>--}}
{{--            <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">--}}
{{--                <img src="{{ url('themes/fala/img/arrow-carousel-right.png') }}" class="img-fluid">--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
