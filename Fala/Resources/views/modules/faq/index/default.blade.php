@php
    /**
     * @var \Themes\Fala\Pages\Faq\LandingPage $default_page
     */
    $header = $default_page->getContent()['header'];
    $image = localeContent($header['imgUrl']) ?: url('/themes/migene/img/main-logo.png');
    $title = localeContent($header['title']);

@endphp

@extends('theme::layouts.default')

{{--Website title--}}
@section('title')
    @parent
    {{ $title }}
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
    @widget('page-header', $default_page->getContent()['header'])

    {{--FAQ--}}

    <div class="container-fluid" id="widget-faqs-list">
        <div class="row">
            <div class="container">
                <div class="accordion" id="accordionFAQ">
                    @foreach($questions as $question)
                    <div class="card">
                        <div class="card-header" id="heading{{$loop->iteration}}">
                            <h5 class="mb-0">
                                <button class="btn btn-link w-100 {{ $loop->first ? '' : 'collapsed' }}" type="button" data-toggle="collapse"
                                        data-target="#collapse{{$loop->iteration}}"
                                        aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{$loop->iteration}}">
                                    <div class="d-flex justify-content-between revers-block">
                                        <div class="title d-flex justify-content-center align-items-center animatePulse" >
                                            {{ localeContent($question['question']) }}
                                        </div>
                                        <div class="icon"></div>
                                    </div>
                                </button>
                            </h5>
                        </div>

                        <div id="collapse{{$loop->iteration}}" class="collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="heading{{$loop->iteration}}"
                             data-parent="#accordionFAQ">
                            <div class="card-body  ">
                                {!! localeContent($question['answer']) !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection


