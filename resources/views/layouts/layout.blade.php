<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EssentialBB</title>

    <!-- Scripts -->
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')

    <!-- Fonts -->

    <!-- Styles -->

</head>

<body>
<div id="app">

    @yield('content');
{{--    @if(request()->path() === 'login')--}}
{{--        @include('partials.customer-nav')--}}

{{--        @yield('content')--}}

{{--    @else--}}
{{--        @include('partials.nav')--}}
{{--        @include('partials.browser-warning')--}}
{{--        @yield('admin-action-nav')--}}
{{--        <main class="py-5">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12 col-xl-12 col-lg-12">--}}
{{--                        @yield('content')--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </main>--}}
{{--    @endif--}}
</div>
</body>
</html>
