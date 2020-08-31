<?php
/**

 */
?>

@if(!empty($buttons))
    <div class="container-fluid " id="widget-scroll-to" data-toggle="affix">
        <div class="row">
            <div class="container">
                <div class="scroll-to-box d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <img src="{{ url('themes/fala/img/logo.png') }}" alt="scroll-logo">
                    </div>
                    <div class="list-to">
                        <ul class="justify-content-center align-items-center mt-1">
                            @foreach($buttons as $item)
                                <li><a href="#{{$item['hash']}}"
                                        class="{{$loop->first ? 'active' : ''}}">
                                        {{ localeContent($item['title']) }}
                                    </a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="open-list-to d-block d-md-none">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif
@section("scripts")


@endsection

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
