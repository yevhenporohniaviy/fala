@php
    /**
    * @var array $location
    **/
$location = $locations->first();

@endphp

@if($locations)
    <div class="row">
        <div class="col-12 sitemap"> {{ __('theme::footer.contact_info') }}</div>
        <div class="col-12 contact-home-info">
                @if(localeContent($location->translations)->title)
            <div class="info">
                <i class="fas fa-home"></i> {{ localeContent($location->translations)->title }}
            </div>
            @endif
            @if(localeContent($location->translations)->phone)
            <div class="info">
                <a href="tel:{!! localeContent($location->translations)->phone !!}" class="d-flex"><i class="fas fa-phone"></i>   {!! localeContent($location->translations)->phone !!}</a>
            </div>
            @endif
            @if($location->email)
            <div class="info">
                <a href="mailto: {{ $location->email }}"><i class="fas fa-envelope"></i>
                    {{ $location->email }}</a>
            </div>
@endif
        </div>
    </div>
@endif


