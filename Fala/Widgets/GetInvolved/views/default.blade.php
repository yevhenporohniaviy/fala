@php

/**
 * @var $page array
 * @var $link array
 */
$hash = '';
if(!empty($page['hash'])){
    $hash = $page['hash'];
}

@endphp

@if(isset($page['link_first']['url']))
<div id="{{$hash}}" class="{{$hash !== '' ? 'page-section':''}}">
    <div class="container-fluid" id="widget-involved" >
        <div class="row">
            <div class="container">
                <div class="col-12 col-md-8 offset-md-2">
                    <div class="title text-center">
                        {{localeContent($page['title'])}}
                    </div>
                </div>
                <div class="involved-content text-center " >
                    <div class="row justify-content-center revers-block">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-flex "
                             data-aos="zoom-in-up"
                             data-aos-duration="1000">
                            <div class="involted">
                                <div class="title-involted">
                                    {{localeContent($page['title_first'])}}
                                </div>
                                <div class="description-involted mb-5">
                                    {!! localeContent($page['description_first']) !!}
                                </div>
                                @if(isset($page['link_first']['url']))
                                    <a href="{{localizedUrl($page['link_first']['url']) }}" class="btn-link animatePulse">
                                        {{ localeContent($page['subtitle_first']) }}
                                    </a>
                                    @else
                                    <a href="{{localizedUrl($page['link_first']) }}" class="btn-link animatePulse">
                                        {{ localeContent($page['subtitle_first']) }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-flex"
                             data-aos="zoom-in-up"
                             data-aos-duration="1000">
                            <div class="involted">
                                <div class="title-involted">
                                    {{localeContent($page['title_second'])}}
                                </div>
                                <div class="description-involted mb-5">
                                    {!! localeContent($page['description_second']) !!}
                                </div>
                                @if(isset($page['link_second']['url']))

                                    <a href="{{localizedUrl($page['link_second']['url']) }}" class="btn-link animatePulse">
                                        {{ localeContent($page['subtitle_second']) }}
                                    </a>
                                    @else
                                    <a href="{{localizedUrl($page['link_second']) }}" class="btn-link animatePulse">
                                        {{ localeContent($page['subtitle_second']) }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-flex"
                             data-aos="zoom-in-up"
                             data-aos-duration="1000">
                            <div class="involted">
                                <div class="title-involted">
                                    {{localeContent($page['title_third'])}}
                                </div>
                                <div class="description-involted mb-5">
                                    {!! localeContent($page['description_third']) !!}
                                </div>
                                @if(isset($page['link_third']['url']))

                                    <a href="{{localizedUrl($page['link_third']['url']) }}" class="btn-link animatePulse">
                                        {{ localeContent($page['subtitle_third']) }}
                                    </a>
                                    @else
                                    <a href="{{localizedUrl($page['link_third']) }}" class="btn-link animatePulse">
                                        {{ localeContent($page['subtitle_third']) }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
