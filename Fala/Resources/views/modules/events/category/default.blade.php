@if(request()->ajax())
    @include('theme::modules.events.category.ajax')
@else
    @include('theme::modules.events.category.show')
@endif
