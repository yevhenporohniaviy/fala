<?php

/**
 * @var $content array
 * @var $link array
 */
?>
<div class="container-fluid" id="widget-subscription">
    <div class="row">
        <img src="{{ url('themes/fala/img/fala-bg-subscribe.png') }}" class="bg-subscribe">
        <div class="container">
            <div class="col-12">
                <div class="row revers-block">
                    <div class="col-12 col-md-6 subscribe-tagline align-block">
                        <div class="subscribe-title">
                            {!! localeContent($content['title']) !!}
                        </div>
                        <div class="subscribe-subtitle">
                            {!! localeContent($content['description']) !!}
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <form id="subscribeForm" class="subscribe-form" action="{{route('core.subscribers.subscribe')}}"
                              method="post"
                              role="form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 form-group row">
                                    <input id="full_name" type="text"
                                           class="form-control form-control-lg " name="full_name"
                                           placeholder="{{localeContent($content['placeholder_name'])}}">
                                </div>
                                <div class="col-12 form-group row">
                                    <input id="email" type="email" autocomplete="email"
                                           class="form-control form-control-lg "
                                           name="email"
                                           placeholder="{{localeContent($content['placeholder_email'])}}">
                                </div>
                                <div class="col-12 ">
                                    <button class="subscribe-submit-button animatePulse" id="subscribeSubmit">
                                        {{localeContent($content['button_text'])}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    @parent
    {!! JsValidator::formRequest(\Modules\ContactUs\Http\Requests\CreateFormRequest::class, '#subscribeForm') !!}
@endsection