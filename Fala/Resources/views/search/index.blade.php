@php
    /**
     * @var \Themes\Fala\Pages\Search\LandingPage $page
     * @var \Illuminate\Support\Collection $locations
     */
    $header = $page->getHeader();
    $image = localeContent($header['imgUrl']) ?: url('/themes/fala/img/logo.png');
    $title = localeContent($header['title']);
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
    @widget('page-header', $header)

    <section class="search-results">

        {{-- Pagination Widget --}}
        @widget('pagination', ['pages' => $result])

        <div class="container">
            <div class="row">
                <div class="search-text">
                    {{ __('theme::search.search_content', ['count' => $result->total()]) }}
                    <span class="search-request">
                        <i class="fas fa-angle-double-left"></i>
                        {{request('search')}}
                        <i class="fas fa-angle-double-right"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                @forelse($result as $item)
                    <div class="item col-12 px-0">
                        <div class="row">
                            <div class="title col-12">
                                <a class="link" href="{{ $item->slugged_route }}">
                                    {{ $item->title }}
                                </a>
                            </div>
                            <div class="summary col-12">
                                {{ str_limit($item->description, 470) }}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="no-results-title">
                        {{ __('theme::search.no_results') }}
                    </div>
                @endforelse
            </div>
        </div>

        {{-- Pagination Widget --}}
        @widget('pagination', ['pages' => $result])

    </section>

@endsection
