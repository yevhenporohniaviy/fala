<?php
/**
 * @var array $locales
 */
?>
@if(!empty($locales['supported']))
    <div class="language d-flex align-items-center revers-language">
        @foreach($locales['all'] as $locale)
            <a class="local-select
            {{ app()->getLocale() == $locale['key'] ? 'active' : '' }}
            {{ $locale['key'] != 'en' ? 'version' : '' }}"
               href="{{LaravelLocalization::getLocalizedURL($locale['key'])}}">
                {{$locale['native']}}
            </a>
        @endforeach
    </div>
@endif
