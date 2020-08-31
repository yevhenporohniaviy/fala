@php
    $url = $content['isExternal'] ? url(localeContent($content['externalUrl'])) : localizedUrl(localeContent($content['internalUrl']['url']));
    $img = localeContent($content['imgUrl']) ?: '/themes/fala/img/vision-icon.png';
    $icon = localeContent($content['icon']) ?: '/themes/fala/img/vision-icon.png';
$hash = '';
if(!empty($content['hash'])){
    $hash = $content['hash'];
}

@endphp



<div class="col-12 col-md-6 d-flex vision-mission-box-space" id="{{$hash}}" >
    <div class="vision-mission-box w-100 {{ $content['class'] }}"
         data-aos="flip-up"
         data-aos-duration="1000">
        <div class="icon">
            <img src="{{ $icon }}?w=100&h=70" >
        </div>
        <div class="text">
            <div class="title">
                {{ localeContent($content['title']) }}
            </div>
            <div class="description">
                {!! localeContent($content['description']) !!}
            </div>
        </div>
    </div>
</div>

{{--<section class="summary-block-widget">--}}
{{--    <div class="d-flex align-items-center position-relative mb-">--}}
{{--        <div class="overlay"></div>--}}
{{--        <img class="summary-img"--}}
{{--             src="{{ $img }}?w=1140&h=295&fit=crop" alt="">--}}
{{--        <div class="info container">--}}
{{--            <div class="row justify-content-end">--}}
{{--                <div class="col-6">--}}
{{--                        <div class="col-12 title">--}}
{{--                            <img class="title-icon"--}}
{{--                                 src="{{ $icon }}?w=40&h=25&fit=crop" alt="">--}}
{{--                            {{ localeContent($content['title']) }}--}}
{{--                        </div>--}}
{{--                        <div class="col-12 description">--}}
{{--                            {!! localeContent($content['description']) !!}--}}
{{--                        </div>--}}
{{--                        @if ($content['useLink'])--}}
{{--                            <a href="{{ $url }}" class="orange-button border-radius"--}}
{{--                               target="{{ $content['isExternal'] ? '_blank' : '_self' }}">--}}
{{--                                {{ localeContent($content['btnText']) }}--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
