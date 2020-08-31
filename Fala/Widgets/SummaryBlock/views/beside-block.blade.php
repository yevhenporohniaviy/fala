@php
    $url = $content['isExternal'] ? url(localeContent($content['externalUrl'])) : localizedUrl(localeContent($content['internalUrl']['url']));
    $img = localeContent($content['imgUrl']) ?: 'themes/fala/img/body-symptom.png';
    $icon = localeContent($content['icon']) ?: 'themes/fala/img/body-symptom.png';
$hash = '';
if(!empty($content['hash'])){
    $hash = $content['hash'];
}
@endphp

<div id="{{$hash}}" class="{{$hash !== '' ? 'page-section':''}}" >
    <div class="container-fluid  " id="widget-our-story-about">
        <div class="row">
            <div class="container">
                <div class="col-12">
                    <div class="title text-center">{{ localeContent($content['title']) }}</div>
                    <div class="row revers-block">
                        <div class="col-12 col-md-6 my-2">
                            <div class="description text-transform">
                                {!! localeContent($content['description']) !!}
                            </div>
                        </div>
                        <div class="col-12 col-md-6 my-2">

                            <div class="img">
                                <a href="{{ url($img) }}" data-fancybox="images" data-srcset="{{ url($img) }} 1600w" data-width="1200">
                                    <img src="{{ url($img) }}?h=383&w=570&fit=crop" class="img-fluid"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<section class="container summary-block-widget beside-block">--}}
{{--    <div class="row align-items-center justify-content-center">--}}
{{--        <div class="col-12 col-md-6 col-lg-4 mb-4">--}}
{{--            <div class="info">--}}
{{--                <div class="title">--}}
{{--                    <img class="title-icon"--}}
{{--                         src="{{ $icon }}?w=40&h=25&fit=crop" alt="">--}}
{{--                    {{ localeContent($content['title']) }}--}}
{{--                </div>--}}
{{--                <div class="description">--}}
{{--                    {!! localeContent($content['description']) !!}--}}
{{--                </div>--}}
{{--                @if ($content['useLink'])--}}
{{--                    <a href="{{ $url }}" class="orange-button border-radius"--}}
{{--                       target="{{ $content['isExternal'] ? '_blank' : '_self' }}">--}}
{{--                        {{ localeContent($content['btnText']) }}--}}
{{--                    </a>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-12 col-md-6 col-lg-4 mb-4">--}}
{{--            <img class="summary-img"--}}
{{--                 src="{{ $img }}?w=350&h=295&fit=crop" alt="">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
