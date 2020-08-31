<?php
/**

 */
$hash = '';
if(!empty($page['hash'])){
    $hash = $page['hash'];
}
?>

@if(!empty($buttons))


    <div id="{{$hash}}" class="{{$hash !== '' ? 'page-section':''}}">
<div class="container-fluid  " id="widget-partners">
    <div class="row">
        <div class="container">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="title text-center" >
                    {{ __('theme::sub_header.title_partners') }}
                </div>
            </div>
            <div class="partners-content">
                <div class="row revers-block justify-content-center">
                    @foreach($buttons as $button)

                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 d-flex animatePulse"
                         data-aos="zoom-in-up"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <a href="{{ url($button['isExternal'] ? localeContent($button['externalUrl']) : localizedUrl(localeContent($button['internalUrl']['url']))) }}"
                           target="{{ $button['isExternal'] ? '_blank' : '_self' }}" class="partner">
                            <img src=" {{ url(localeContent($button['img']) ?: 'themes/fala/img/no-photo-1.png') }}" class="img-fluid mb-5">
                            <div class="partners-title">
                                {{ localeContent($button['title']) }}

                            </div>
                            <div class="partners-type">
                                {{ localeContent($button['subtitle']) }}
                            </div>
                        </a>
                    </div>
                        @endforeach

                </div>
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
