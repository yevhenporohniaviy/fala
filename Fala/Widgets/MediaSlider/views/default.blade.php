@if(!empty($media))
    <section class="media-content col-12">
        <div class="media-slider">
            @foreach($media as $slide)
                @if($slide['type'] == 'video')
                    <div class="item {{$loop->first ? 'active' : ''}}">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video class="slider-video" preload="metadata" frameborder="20">
                                <source src="{{ $slide['url'] }}" type="video/mp4"/>
                            </video>
                        </div>
                        <div class="play-btn border-radius">
                            <i class="far fa-play-circle"></i>
                        </div>
                        @if(!empty($slide['captions']))
                            <div class="media-caption d-flex align-items-center">
                                <i class="far fa-image"></i>
                                <div class="media-title">
                                    {{str_limit(localeContent($slide['captions']), 80) }}
                                </div>
                            </div>
                        @endif
                    </div>
                @elseif($slide['type'] == 'image')
                    <div class="item {{$loop->first ? 'active' : ''}}">
                        <img class="slider-image" src="{{ $slide['thumb'] }}?w=950&h=500&fit=crop">
                        @if(!empty($slide['captions']))
                            <div class="media-caption d-flex align-items-center">
                                <i class="far fa-image"></i>
                                <div class="media-title">
                                    {{localeContent($slide['captions']) }}
                                </div>
                            </div>
                        @endif
                    </div>
                @endif
            @endforeach
        </div>
    </section>
@endif
