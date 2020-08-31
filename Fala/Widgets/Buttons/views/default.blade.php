@php
    $hash = '';
    if(!empty($page['hash'])){
        $hash = $page['hash'];
    }

@endphp


@if(!empty($buttons))
<div id="{{$hash}}" class="{{$hash !== '' ? 'page-section':''}}">
    <div class="container-fluid" id="widget-contact-living">
        <div class="">
            <div class="container">
                <div class="col-12 text-center text-section mb-3">
                    {{ __('theme::dynamic_pages.contact_more') }}
                </div>
                <div class="col-12 col-md-8 offset-md-2">
                    <div class="row justify-content-center revers-block">
                        @foreach($buttons as $button)

                            <div class="col-12 col-md-6 d-flex my-3">
                                <div class="vision-mission-box @if($loop->index%2 == 0) vision-line @else mission-line @endif"
                                     data-aos="flip-up"
                                     data-aos-duration="1000">
                                    <div class="icon">
                                        <img src="{{ url(localeContent($button['img'])) }}" class="vision">
                                    </div>
                                    <div class="text">
                                        <div class="title">
                                            {{ localeContent($button['title']) }}
                                        </div>
                                        <div class="description">
                                            {!! localeContent($button['summary']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif

{{--@if(!empty($buttons))--}}
{{--    <div class="container contact-widget border-radius mb-5">--}}
{{--        <div class="col-12">--}}
{{--            <div class="row h-100">--}}
{{--                @foreach($buttons as $button)--}}
{{--                    <a href="{{ url($button['isExternal'] ? localeContent($button['externalUrl']) : localizedUrl(localeContent($button['internalUrl']['url']))) }}"--}}
{{--                       target="{{ $button['isExternal'] ? '_blank' : '_self' }}" class="col-12 col-md-4 item">--}}
{{--                        <div>--}}
{{--                            <img src="{{ url(localeContent($button['img'])) }}" alt="" class="img-fluid">--}}
{{--                            <div class="title">--}}
{{--                                {{ localeContent($button['title']) }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endif--}}
