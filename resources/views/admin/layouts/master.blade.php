<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>{{ $title." - ".ENV('APP_NAME') }}</title>
        <!-- CSS files -->
        <link href="{{ asset('template/admin/dist/css/tabler.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('template/admin/dist/css/tabler-flags.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('template/admin/dist/css/tabler-payments.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('template/admin/dist/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('template/admin/dist/css/demo.min.css') }}" rel="stylesheet"/>
    </head>
    <body >
        <div class="wrapper">
            @include('admin.layouts.sidebar')
            @include('admin.layouts.header')
            <div class="page-wrapper">
                @yield('content')
                @include('admin.layouts.footer')
            </div>
        </div>
        @include('admin.layouts.modal')
        @include('sweetalert::alert')
        @yield('modal')
        <!-- Tabler Core -->
        <script src="{{ asset('template/admin/dist/js/tabler.min.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <script src="{{ asset('template/admin/dist/js/demo.min.js') }}"></script>
        @yield('js')
    </body>
</html>