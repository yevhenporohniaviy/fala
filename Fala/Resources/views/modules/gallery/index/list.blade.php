@foreach($albums as $indexKey => $album)

    <div class="col-12 col-md-3" data-aos="fade-up">
        <div class="item-list-gallery">
            <div class="card animatePulse">
                <a href="{{ imgFirstMedia($album->related_media) ?: '/themes/fala/img/no-image-landscape.png' }}" data-fancybox="gallery{{$indexKey}}"
                   data-caption="">
                    <img class="card-img-top"
                         src="{{ imgFirstMedia($album->related_media) ?: '/themes/fala/img/no-image-landscape.png' }}?w=262&h=270&fit=crop"
                         alt="Card image">
                </a>

                @foreach($album->related_media as $item)
                    @if($item['type'] === 'image')
                    <a href="{{ $item['thumb'] }}"
                       data-fancybox="gallery{{$indexKey}}"
                       data-thumb="{{ $item['thumb']?$item['thumb'].'?h=530&w=950&fit=crop': '' }}"
                       data-caption=" {{ isset($item['captions'])?localeContent($item['captions']):'' }}"></a>
                    @else
                        <a href="{{ $item['url'] }}"
                           data-fancybox="gallery{{$indexKey}}"
                           data-caption=" {{ isset($item['captions'])?localeContent($item['captions']):'' }}"></a>
                    @endif
                @endforeach


                <img class="type-gallery photo" src="{{ url($item['type'] === 'image' ? 'themes/fala/img/photo-camera.png':'themes/fala/img/video-camera.png' ) }}">
                <div class="card-body">
                    <div class="card-title">
                        {{ localeContent($album->translations)->title }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

@if($albums->nextPageUrl())
    <div class="row justify-content-center">
{{--        <button--}}
{{--                id="load-more"--}}
{{--                data-action="{{ $albums->nextPageUrl() }}"--}}
{{--                class="btn-load my-4">--}}
{{--            {{ __('theme::common.load') }}--}}
{{--        </button>--}}
    </div>
@endif
