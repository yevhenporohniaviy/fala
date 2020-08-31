<?php
/**
 * @var array $config
 * @var \Themes\Travel\Widgets\ContactForm\Form $form
 */
?>




<form id="contactForm" class="contact-form form border-radius" action="{{route('web.contact_us.store')}}"
      method="post"
      role="form" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row justify-content-center align-items-center">
        @if($form->isFieldActive('full_name'))
            <div class="col-12 col-md-6 form-group ">

                <input id="lastName" type="text" class="col-12 col-md-12 form-control form-field text-transform" name="full_name"
                       placeholder="  {{ __('theme::contact_us.full_name') }}">
            </div>
        @endif

        @if($form->isFieldActive('phone'))
            <div class="col-12 col-md-6 form-group ">
                <input id="phone" type="text" autocomplete="phone" class="col-12 col-md-12 form-control form-field text-transform"
                       name="phone"
                       placeholder="  {{ __('theme::contact_us.telephone_number') }}">
            </div>
        @endif
            @if($form->isFieldActive('email'))
                <div class="col-12 col-md-12 form-group ">

                    <input id="email" type="email" autocomplete="email" class="col-12 col-md-12 form-control form-field text-transform"
                           name="email"
                           placeholder="  {{ __('theme::contact_us.email') }}">
                </div>
            @endif
        @if($form->isFieldActive('mobile'))
            <div class="col-12 col-md-12 form-group ">

                <input id="mobile" type="text" autocomplete="phone" class="col-12 col-md-12 form-control form-field text-transform"
                       name="mobile"
                       placeholder="{{$form->getLocalizedFieldValue('mobile')}}">
            </div>
        @endif
        @if($form->isFieldActive('fax'))
            <div class="col-12 col-md-12 form-group ">

                <input id="fax" type="text" autocomplete="phone" class="col-12 col-md-12 form-control form-field text-transform"
                       name="fax"
                       placeholder="{{$form->getLocalizedFieldValue('fax')}}">
            </div>
        @endif
        @if($form->isFieldActive('address'))
            <div class="col-12 col-md-12 form-group ">
                <label class="col-12 col-md-2 form-label"
                       for="address">{{$form->getLocalizedFieldValue('address')}}</label>
                <input type="text" autocomplete="address" class="col-12 col-md-12 form-control form-field text-transform"
                       name="address"
                       placeholder="{{$form->getLocalizedFieldValue('address')}}">
            </div>
        @endif
        @if($form->isFieldActive('country'))
            <div class="col-12 col-md-12 form-group ">

                <select class="contact-select form-field" name="country">
                    <option value="" selected
                            disabled>{{$form->getLocalizedFieldValue('country')}}</option>
                    @foreach($form->getCountries() as $country)
                        <option value="{{$country->name}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
        @endif
        @if($form->isFieldActive('subject'))
            <div class="col-12 col-md-12 form-group ">

                <input id="subject" type="text" class="col-12 col-md-12 form-control form-field text-transform" name="subject"
                       placeholder="  {{ __('theme::contact_us.subject') }}">
            </div>
        @endif
        @if($form->isFieldActive('message'))
            <div class="col-12 col-md-12 form-group ">

                <textarea id="message" type="text" rows="4" class="col-12 col-md-12 form-control form-field-message text-transform"
                          name="message"
                          placeholder="  {{ __('theme::contact_us.message') }}"></textarea>
            </div>
        @endif
        <div class="col-12 col-md-12 form-submit d-flex align-self-start">
            <button class="orange-button submitButton animatePulse" id="contactSubmit">
                {{ __('theme::contact_us.submit') }}
            </button>
        </div>
    </div>
</form>

@section('scripts')
    @parent
    {!! JsValidator::formRequest(\Modules\ContactUs\Http\Requests\CreateFormRequest::class, '#contactForm') !!}
@endsection
