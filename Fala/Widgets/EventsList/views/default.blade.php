<div class="container-fluid" id="widget-events">
    <div class="row">
        <div class="container">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="title text-center">

                </div>
            </div>
            <div class="position-relative mb-5">
                <div class="sliderEvents ">
                    @foreach($events as $event)

                        <div class="slide animatePulse plus-delay">
                            <div  class="card m-2 mb-1">
                                <a href="{{ url(localeContent($event->translations)->getSlug()) }}" >
                                    <img class="card-img-top"
                                         src="{{ imgFirstMedia($event->related_media) ?: '/themes/fala/img/no-image-landscape.png' }}"
                                         alt="Card image">
                                </a>
                                <div class="card-body">
                                    <div class="card-title my-3">
                                        {{ str_limit(localeContent($event->translations)->title, 40) }}
                                    </div>
                                    <div class="card-description mb-3">
                                        {!! str_limit(localeContent($event->translations)->description, 60) !!}
                                    </div>
                                    <div class="info d-flex justify-content-between align-content-center">
                                        @if(isset($event->event_category->id))
                                            <a href="{{ url(route('web.events.index'))  }}?category_id={{ $event->event_category->id }}" style="text-decoration:none;">
                                                <div class="event-type conference">
                                                    <i class="fas fa-tag"></i>

                                                    {{$event->event_category->title}}

                                                </div>

                                            </a>
                                        @endif
                                        <div class="location "><i
                                                    class="fas fa-map-marker-alt"></i> {{ $event->location->title }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="slick-arrow prev-event"><i class="fas fa-chevron-left"></i></div>
                <div class="slick-arrow next-event"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>
    </div>
</div>
