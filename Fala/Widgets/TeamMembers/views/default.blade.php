@php
    $img = localeContent($content['bgImg']) ?: '/themes/idb/img/home-banner-1.png';
$hash = '';
if(!empty($content['hash'])){
    $hash = $content['hash'];
}

@endphp
@if($team)
    <div id="{{$hash}}" class="{{$hash !== '' ? 'page-section':''}}">
        <div class="container-fluid" id="widget-family">
            <div class="row">
                <div class="container">
                    <div class="col-12">
                        <div class="title text-center">{{ localeContent($content['title']) }}</div>
                    </div>
                    <div class="position-relative">
                        <div class="family-slider">
                            @foreach($team->team as $member)
                                @if($member->is_visible)
                                    <div class="col-12 col-md-3 family-item animatePulse"
                                         data-aos="zoom-in">
                                        <div class="card" data-toggle="modal" data-target="#ModalWindow{{$loop->index}}">
                                            <img class="card-img-top" src="{{ url($member->photo ?: 'themes/fala/img/no-photo-1.png') }}"
                                                 alt="Card image">
                                            <div class="card-body text-center">
                                                <div class="card-name">
                                                    {{ localeContent($member->translations)->title }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                        <div class="slick-arrow prev-family"><i class="fas fa-chevron-left"></i></div>
                        <div class="slick-arrow next-family"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Family-->
    @foreach($team->team as $member)
        @if($member->is_visible)
            <div class="modal fade modalFamily modalFala" id="ModalWindow{{$loop->index}}" tabindex="-1" role="dialog" aria-labelledby="OuFamily" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content ">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="{{ url('themes/fala/img/close.png') }}" alt="Close modal">
                        </button>
                        <div class="modal-body">
                            <div class="container">
                                <div class="col-12 ">
                                    <div class="row personal-info revers-block">
                                        <div class="col-12 col-md-7 order-1 order-md-0">
                                            <div class="row">
                                                <div class="name mb-4 ">{{ localeContent($member->translations)->title }}</div>
                                                <div class="info">
                                                    {!!  localeContent($member->translations)->biography !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5 order-0 order-md-1">
                                            <img class="card-img-top" src="{{ url($member->photo ?: 'themes/fala/img/no-photo-1.png') }}"
                                                 alt="Card image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endif
{{--@if($team)--}}
{{--    <section class="meet-us-widget">--}}
{{--        <div class="container-fluid meet-us">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="overlay"></div>--}}
{{--                <img src="{{ $img }}?w=1600&h=300&fit=crop" alt="" class="summary-img">--}}
{{--                <div class="container title">--}}
{{--                    <img class="title-icon"--}}
{{--                         src="{{ url('themes/idb/img/investors-icon.png') }}" alt="">--}}
{{--                    {{ localeContent($content['title']) }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container members-block">--}}
{{--            <div class="row justify-content-center">--}}
{{--                @foreach($team->team as $member)--}}
{{--                    @if($member->is_visible)--}}
{{--                        <div class="col-12 col-md-3 member">--}}
{{--                            <div class="card">--}}
{{--                                <img src="{{ url($member->photo ?: 'themes/idb/img/noimage.jpg') }}?w=255&h=320&fit=crop"--}}
{{--                                     class="member-img border-radius">--}}
{{--                                <div class="card-footer">--}}
{{--                                    <div class="member-title">--}}
{{--                                        {{ localeContent($member->translations)->name }}--}}
{{--                                        <span class="member-vacancy">--}}
{{--                                          {{ localeContent($member->translations)->title }}--}}
{{--                                        </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--            <a href="{{ localeContent($team->translations)->getSlug() }}" class="orange-button border-radius">--}}
{{--                {{ localeContent($content['btnText']) }}--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endif--}}
