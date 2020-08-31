@php
    $hash = '';
    if(!empty($page['hash'])){
        $hash = $page['hash'];
    }

@endphp


<div id="{{$hash}}" class="{{$hash !== '' ? 'page-section':''}}">
<div class="container-fluid" id="widget-diagnosed">
    <div class="row">
        <div class="container">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="title text-center">
                    {{ localeContent($page['title']) }}
                </div>
                <div class="description text-center">
                    {!! localeContent($page['description']) !!}
                </div>
            </div>
            <div class="position-relative mb-5">
                <div class="sliderResourcesStudies ">
                    @foreach($slides as $item)
                        <div class="slide animatePulse plus-delay">
                            <div class="card mx-2">

                                <img class="card-img-top" src="{{ url(localeContent($item->translations)->image) }}"
                                     alt="Card image">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="mb-1">
                                            {{ localeContent($item->translations)->title }}
                                        </div>
                                        {!! localeContent($item->translations)->description  !!}

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="slick-arrow prev-studies"><i class="fas fa-chevron-left"></i></div>
                <div class="slick-arrow next-studies"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>
    </div>
</div></div>
