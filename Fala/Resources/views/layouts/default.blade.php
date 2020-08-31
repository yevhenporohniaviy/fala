<html lang="{{ $active_locale }}">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @section('title')
            | {{ $seo['company_name'] }}
        @endsection
        @yield('title')
    </title>

    @yield('meta')

    {{--Main styles--}}
    <link rel="stylesheet" href="{{ mix('/css/libraries.css', 'themes/fala') }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css', 'themes/fala') }}">

    <script src="https://www.google.com/recaptcha/api.js?callback=onSubmit&render=explicit" async defer></script>

</head>
<body class="{{ $direction }}">

{{--Navigation bars--}}


@widget('menu', 'main-menu')

{{--Main content--}}
<div class="content-wrapper">
    @yield('content')
    <div id="scroll-top-button">
        <img src="{{ url('themes/fala/img/uparrow.png') }}" class="img-fluid animatePulse">
    </div>
</div>

{{--Footer--}}
@widget('menu', 'footer-menu')

@if($message = session('message'))
    @widget('thank-you-modal', ['message' => $message])
@endif

{{--Scripts--}}
<script type="text/javascript" src="{{ mix('scripts/app.js', 'themes/fala') }}"></script>
@yield('map_scripts')
@yield('scripts')

@if(isset($captcha_sitekey) && !empty($captcha_sitekey))
    <script>
        $(document).ready(() => {
            let captcha_sitekey = '{{ $captcha_sitekey }}'

            $('.submit-button').click(function (e) {
                e.preventDefault()
                let form = $(this).parents('form:first');
                let respone = grecaptcha.render(e.target.id, {
                    sitekey: captcha_sitekey,
                    callback: function (response) {
                        if (response.length > 0) {
                            e.preventDefault();
                            form.submit()
                        }
                    }
                })
                if (form.valid()) {
                    e.preventDefault();
                }
            })
        })
    </script>
@endif
</body>
</html>
