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
<div id="{{$hash}}" class="{{$hash !== '' ? 'page-section':''}}">
    <div class="container-fluid" id="widget-what-fa">
    <div class="row">
        <div class="container">
            <div class="col-12">
                <div class="tabs-info">
                    <div class="title mb-4">{{localeContent($page['title'])}}</div>
                    <div class="description text-center">
                        {!! localeContent($page['description']) !!}
                    </div>
                    <div class="tabs">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 text-center ">
                                <nav class="nav-justified">
                                    <div class="nav nav-tabs revers-block" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="tab1" data-toggle="tab"
                                           href="#pop1" role="tab" aria-controls="pop1" aria-selected="true">
                                            {{localeContent($page['title_first'])}}</a>
                                        <a class="nav-item nav-link" id="tab2" data-toggle="tab" href="#pop2"
                                           role="tab" aria-controls="pop2"
                                           aria-selected="false">{{localeContent($page['title_second'])}}</a>
                                        <a class="nav-item nav-link" id="tab3" data-toggle="tab" href="#pop3"
                                           role="tab" aria-controls="pop3" aria-selected="false">
                                            {{localeContent($page['title_third'])}}</a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane my-5 fade show active" id="pop1" role="tabpanel"
                                         aria-labelledby="tab1">
                                        <div class="d-flex justify-content-center align-items-center flex-column">
                                            {!!  localeContent($page['description_first'])!!}
                                            @if(isset($page['link_first']['url']))
                                            <a href="{{localizedUrl($page['link_first']['url'])}}" class="btn-link animatePulse mt-5">
                                                {{localeContent($page['subtitle_first'])}}
                                            </a>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="tab-pane my-5 fade" id="pop2" role="tabpanel"
                                         aria-labelledby="tab2">
                                        <div class="d-flex justify-content-center align-items-center flex-column">
                                        {!! localeContent($page['description_second']) !!}
                                            @if(isset($page['link_second']['url']))

                                            <a href="{{localizedUrl($page['link_second']['url'])}}" class="btn-link animatePulse mt-5">
                                                {{localeContent($page['subtitle_second'])}}
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="tab-pane my-5 fade" id="pop3" role="tabpanel"
                                         aria-labelledby="tab3">
                                        <div class="d-flex justify-content-center align-items-center flex-column">
                                        {!! localeContent($page['description_third'])!!}
                                            @if(isset($page['link_third']['url']))
                                            <a href="{{localizedUrl($page['link_third']['url'])}}" class="btn-link animatePulse mt-5" >
                                                {{localeContent($page['subtitle_third'])}}
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
        </div>
    </div>
</div>
</div>

