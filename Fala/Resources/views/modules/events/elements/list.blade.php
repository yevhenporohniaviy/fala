<div class="container p-0">

    {{--Simple text--}}
    <div class="explore-world-text pt-5">
        {!! localeContent($page->extractWidget('simple-text')['data']['description']) !!}
    </div>

    {{--List of categories--}}
    <div class="cards-packages my-5">
        @foreach($categories as $category)
            <div class="card card-packages col-12 col-md-6 p-0">
                @if(!empty(localeContent($category->translations)->bg_image))
                    <img src="{{ url(localeContent($category->translations)->bg_image) }}?w=570&h=235&fit=crop"
                         alt="{{ str_limit(localeContent($category->translations)->title, 40) }}" class="img-fluid card-packages-img">
                @endif
                <div class="card-packages-content text-center">
                    <div class="card-packages-content-title">
                        {{ str_limit(localeContent($category->translations)->title, 40) }}
                    </div>
                    <div data-toggle="modal" data-target="#eventTravel"
                         data-link="{{ localizedUrl(localeContent($category->translations)->getSlug()) }}"
                         class="card-packages-content-button">
                        {{ __('theme::events.more') }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
