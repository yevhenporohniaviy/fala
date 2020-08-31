<div class="container-fluid" id="widget-list-events">
    <div class="row">
        <div class="container">

            <div class="col-12 col-md-12 list-events" id="container-list">

                @foreach($events as $event)

                    <div class="card">
                        <div class="card-img-top">
                            <img src="{{ imgFirstMedia($event->related_media) ?: '/themes/fala/img/no-image-landscape.png' }}"
                                 alt="" style="height:440px;">
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center align-items-center revers-block">
                                <div class="col-3 col-md-1">
                                    <div class="col-12 number-event">
                                        {{ date('d', strtotime($event->start_date)) }}
                                    </div>
                                    <div class="col-12 date-event conference">
                                        {{ date('M', strtotime($event->start_date)) }}
                                        <span>{{ date('Y', strtotime($event->start_date)) }}</span>
                                    </div>
                                </div>
                                <div class="col-9 col-md-8">
                                    <div class="card-title text-transform my-3">
                                        {{ str_limit(localeContent($event->translations)->title, 40) }}
                                    </div>
                                    <div class="card-description text-transform mb-3">
                                        {!!  localeContent($event->translations)->description  !!}
                                    </div>
                                    <div class="info d-flex align-content-center">
                                        @if(isset($event->event_category->id))
                                            <div class="event-type conference"><i
                                                        class="fas fa-tag"></i> <a
                                                        href="{{ url(route('web.events.index'))  }}?category_id={{ $event->event_category->id }}">{{$event->event_category->title}}</a>
                                            </div>
                                        @endif
                                        <div class="location "><i
                                                    class="fas fa-map-marker-alt"></i> {{ $event->location->title }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 link">
                                    <a href="{{ url(localeContent($event->translations)->getSlug()) }}"
                                       class="btn-link animatePulse">
                                        {{ __('theme::event.read_more') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
