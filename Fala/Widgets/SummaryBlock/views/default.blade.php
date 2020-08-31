@php
    $url = $content['isExternal'] ? url(localeContent($content['externalUrl'])) : localizedUrl(localeContent($content['internalUrl']['url']));
    $img = localeContent($content['imgUrl']) ?: 'https://picsum.photos/1911/100';
    $icon = localeContent($content['icon']) ?: 'https://picsum.photos/1911/100';
$hash = '';
if(!empty($content['hash'])){
    $hash = $content['hash'];
}


@endphp
<div id="{{$hash}}" class="{{$hash !== '' ? 'page-section':''}}">
    <div class="container-fluid " id="widget-in-lebanon">
        <div class="row">
            <img src="{{ $img }}" class="img-in-lebanon">
            <div class="img-in-lebanon-bg"></div>
            <div class="container">
                <div class="col-12 col-md-10 offset-md-1 text-center">
                    <div class="caption" data-aos="fade-up">
                        <div class="title mb-4">
                            {!! localeContent($content['description']) !!}
                        </div>
                        {{--                    <a href="#" class="link animatePulse">www.socialaffairs.gov.lb/en/FA-list</a>--}}
                        @if ($content['useLink'])
                            <a href="{{ $url }}" class="link animatePulse"
                               target="{{ $content['isExternal'] ? '_blank' : '_self' }}">
                                {{ localeContent($content['btnText']) }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<section class="summary-block-widget">--}}
{{--    <div class="d-flex align-items-center">--}}
{{--        <div class="overlay"></div>--}}
{{--        <img src="{{ $img }}?w=1140&h=295&fit=crop" alt="" class="summary-img summary-home-img">--}}
{{--        <div class="info info-default text-center">--}}
{{--            <div class="col-12 title">--}}
{{--                {{ localeContent($content['title']) }}--}}
{{--            </div>--}}
{{--            <div class="col-12 description">--}}
{{--                {!! localeContent($content['description']) !!}--}}
{{--            </div>--}}
{{--            @if ($content['useLink'])--}}
{{--                <a href="{{ $url }}" class="orange-button border-radius"--}}
{{--                   target="{{ $content['isExternal'] ? '_blank' : '_self' }}">--}}
{{--                    {{ localeContent($content['btnText']) }}--}}
{{--                </a>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
