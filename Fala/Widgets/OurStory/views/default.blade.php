<?php

/**
 * @var $page array
 * @var $link array
 */
$blockImage = localeContent($page['imgUrl']) ?: 'themes/fala/img/emblem-fala.png';
$hash = '';
if(!empty($page['hash'])){
    $hash = $page['hash'];
}
?>

<div id="{{$hash}}" class="{{$hash !== '' ? 'page-section':''}}" class="{{$hash !== '' ? 'page-section':''}}">
<div class="container-fluid" id="widget-our-story-home">
    <div class="row">
        <img src="{{ url('themes/fala/img/fala-bg-main.png') }}" class="story-img">
        <div class="container">
            <div class="col-12 col-md-6 offset-md-3 text-center">
                <div class="our-story">
                    <div class="emblem">
                        <img src="{{ url($blockImage) }}" class="img-fluid" data-aos="fade-up">
                    </div>
                    <div class="title ">{{localeContent($page['title'])}}</div>
                    <div class="description">{!! localeContent($page['description']) !!}
                    </div>

                    @if(isset($page['link']['url']))
                        <a href="{{ localizedUrl($page['link']['url']) }}" class="btn-link  animatePulse">
                            {{ localeContent($page['subtitle']) }}
                        </a>
                        @else
                        <a href="{{ localizedUrl($page['link']) }}" class="btn-link  animatePulse">
                            {{ localeContent($page['subtitle']) }}
                        </a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
</div>
