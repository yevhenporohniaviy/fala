@php
    $url = $content['isExternal'] ? url(localeContent($content['externalUrl'])) : localizedUrl(localeContent($content['internalUrl']['url']));
    $img = localeContent($content['imgUrl']) ?: 'themes/fala/img/body-symptom.png';
    $icon = localeContent($content['icon']) ?: 'themes/fala/img/body-symptom.png';
$hash = '';
if(!empty($content['hash'])){
    $hash = $content['hash'];
}


@endphp


<div id="{{$hash}}" class="{{$hash !== '' ? 'page-section':''}}">
<div class="container-fluid " id="widget-definition-symptom">
    <div class="row">
        <div class="container">
            <div class="col-12" data-aos="fade-right">
                <div class="row revers-block">
                    <div class="col-12 col-md-9 my-2 ">
                        <div class="description text-transform">
                            {!! localeContent($content['description']) !!}

                        </div>
                    </div>
                    <div class="col-12 col-md-3 my-2 ">
                        <div class="img d-flex justify-content-center align-items-center align-items-center">
                            <img class="img-fluid" src="{{ url($img) }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>