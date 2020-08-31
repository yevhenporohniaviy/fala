@php
    /**
    * @var \Themes\Fala\Pages\Events\LandingPage $page
    */
    $image = localeContent($page->getContent()['header']['imgUrl']) ?: url('/themes/fala/img/logo.png');
    $title = localeContent($page->getContent()['header']['title']);

@endphp

@extends('theme::layouts.default')

{{--Website title--}}
@section('title')
    {{ $title }}
    @parent
@stop

{{--Passing meta information to meta tag's widget--}}
@widget('sharing-meta-tags', [
'url' => url()->current(),
'seo' => $seo,
'info' => [
'meta_title' => $title,
'meta_description' => $seo['description'],
'shared_image' => $image
]
])

@section('content')
    {{--Banner--}}
    @widget('page-header', $page->getContent()['header'])



    <div class="container-fluid " id="widget-events-filters">
        <div class="row">
            <div class="container">
                <div class="events-filters d-flex justify-content-center align-items-center">
                    <div class="filters">
                        <ul class="justify-content-center align-items-center my-5 revers-block">
                            @php
                                $category_id = app('request')->get('category_id')?:false;
                                $type = app('request')->get('type')?:false;

                            @endphp
                            <li><a href="{{ url(route('web.events.index'))  }}"
                                   class="{{ !$category_id && !$type? 'active':''  }}">{{ __('theme::event.all') }}</a></li>
                            @foreach($categories as $item)
                                <li><a href="{{ url(route('web.events.index'))  }}?category_id={{ $item->id }}&type=1"
                                       class="{{ $category_id == $item->id && $type == 1?'active':''  }}">
                                        <span >{{ __('theme::event.upcoming') }}</span>&nbsp;<span>{{ localeContent($item->translations)->title  }}</span>&nbsp;

                                    </a></li>

                            @endforeach
                            @foreach($categories as $item)
                                <li><a href="{{ url(route('web.events.index'))  }}?category_id={{ $item->id }}&type=0"
                                       class="{{$category_id == $item->id && $type == 0?'active':''}}">
                                        <span >{{ __('theme::event.prev') }}</span>&nbsp;<span>{{ localeContent($item->translations)->title  }}</span>&nbsp;
                                    </a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="open-filters d-block d-md-none">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @widget('events-list-main', ['events' => $events])

    @widget('pagination', ['pages' => $events])


@endsection
