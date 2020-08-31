@php
    /**
    * @var \Themes\Fala\Pages\Gallery\LandingPage $default_page
    */
    $header = $default_page->getHeader();


    $image = localeContent($default_page->getContent()['header']['imgUrl']) ?: url('/themes/fala/img/logo.png');
    $title = localeContent($default_page->getContent()['header']['title']);
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
        'meta_title' =>$title,
        'meta_description' => $seo['description'],
        'shared_image' => $image
    ]
])

@section('content')
    {{--Banner About--}}
    @widget('page-header', [
        'page' => $default_page->getContent()['header'],
        'title' => $default_page->getContent()['header']['title'],
        'link' => null
    ])

    {{--Albums list--}}
    <div class="container-fluid " id="widget-gallery-filters">
        <div class="row">
            <div class="container">
                <div class="gallery-filters d-flex justify-content-center align-items-center">
                    <div class="filters">
                        <ul class="justify-content-center align-items-center my-5 revers-block">
                            @php
                                $category_id = app('request')->get('category_id')?:false;

                            @endphp
                            <li><a href="{{ url(route('web.gallery.index'))  }}"
                                   class="{{ !$category_id ? 'active':''  }}"> {{ __('theme::event.all_gallery') }} </a></li>
                            @foreach($categories as $item)
                                @if($item->albums_count > 0)
                                <li><a href="{{ url(route('web.gallery.index'))  }}?category_id={{ $item->id }}"
                                       class="{{ $category_id == $item->id ?'active':''  }}">
                                         {{ localeContent($item->translations)->title  }}</a></li>
                                @endif
                            @endforeach
{{--                            <li><a href="#" class="active">All</a></li>--}}
{{--                            <li><a href="#">Images</a></li>--}}
{{--                            <li><a href="#">Functional Training</a></li>--}}
{{--                            <li><a href="#">Physical Therapy</a></li>--}}
{{--                            <li><a href="#">Speech Therapy</a></li>--}}
{{--                            <li><a href="#">Psychotherapy</a></li>--}}
                        </ul>
                    </div>
                    <div class="open-filters d-block d-md-none">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="widget-gallery-list">
        <div clsas="row revers-block">
            <div class="container">
                <div class="row" id="container-list">

                    @include('theme::modules.gallery.index.list', ['albums' => $albums])

                </div>
                <div class="row justify-content-center" id="loader">
                    <img src="/themes/fala/img/loader.gif" class="d-none" alt="">
                </div>
            </div>
        </div>
    </div>


@stop
