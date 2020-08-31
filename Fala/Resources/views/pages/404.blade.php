@section('content')

    <section class="error-page">
        <div class="container error-block">
            <div class="row">
                <div class="col-12 title">
                    {{ __('theme::error.title') }}
                </div>
                <div class="col-12 subtitle">
                    {{ __('theme::error.subtitle') }}
                </div>
                <div class="col-12 description">
                    {{ __('theme::error.description') }}
                </div>
                <div class="col-12">
                    <a href="{{ url('/') }}" class="orange-button border-radius">
                        {{ __('theme::error.back') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
