<div class="row">
    @if (!empty($category['related_media']))
        @if($category['related_media'][0]['type'] == 'video')
            <div class="video justify-content-center d-flex align-items-center">
                <video class="video-fluid embed-responsive-item video-item" loop onclick="playVideo()">
                    <source src="{{ url($category['related_media'][0]['url']) }}" type="video/mp4"/>
                </video>
                <div class="play-video layer" onclick="playVideo()">
                    <i class="fa fa-play-circle"></i>
                </div>
            </div>
        @else
            <div class="col-12 text-center">
                <img src="{{ url($category['related_media'][0]['thumb']) }}" alt="" class="img-fluid">
            </div>
        @endif
    @endif
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-12 col-md-8">
        <div class="modalTravel-content mt-4">
            <div class="modalTravel-title">
                {{ localeContent($category->translations)->title }}
            </div>
            <div class="modalTravel-description text-center">
                {!! localeContent($category->translations)->description !!}
            </div>
        </div>

        {{--Explore calendar widget--}}
        @widget('explore-calendar', ['id' => $category['id'], 'data' => $page->getSummaryInfo()] )

    </div>
</div>
