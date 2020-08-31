<?php

/**
 * @var $page array
 * @var $link array
 */
$hash = '';
if(!empty($page['hash'])){
    $hash = $page['hash'];
}
?>
<div id="{{$hash}}" class="{{$hash !== '' ? 'page-section':''}}">


<div class="container-fluid" id="widget-treatments">
    <div class="row">
        <div class="container">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="title text-center">
                    {{localeContent($page['title'])}}
                </div>
                <div class="description text-center">
                    {!!  localeContent($page['description']) !!}
                </div>
            </div>
            <div class="coordinate-content">
                <div class="row revers-block">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 d-flex"
                         data-aos="zoom-in-up"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <a href="#" class="coordinate">
                            <img src="{{ localeContent($page['img_first']) ?: 'themes/fala/img/physical.png' }}" class="img-fluid mb-4">
                            <div class="emblem-title">
                                {{localeContent($page['title_first'])}}
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 d-flex"
                         data-aos="zoom-in-up"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <a href="#" class="coordinate">
                            <img src="{{ localeContent($page['img_first']) ?: 'themes/fala/img/functional.png' }}"
                                 class="img-fluid mb-4">
                            <div class="emblem-title">
                                {{localeContent($page['title_second'])}}
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 d-flex"
                         data-aos="zoom-in-up"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <a href="#" class="coordinate">
                            <img src="{{ localeContent($page['img_first']) ?: 'themes/fala/img/speech.png' }}"
                                class="img-fluid mb-4">
                            <div class="emblem-title">
                                {{localeContent($page['title_third'])}}
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 d-flex"
                         data-aos="zoom-in-up"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <a href="#" class="coordinate">
                            <img src="{{ localeContent($page['img_first']) ?: 'themes/fala/img/therapy.png' }}" class="img-fluid mb-4">
                            <div class="emblem-title">
                                {{localeContent($page['title_fourth'])}}
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>