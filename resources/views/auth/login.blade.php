<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>{{ __('Login') }}</title>
        <!-- CSS files -->
        <link href="{{ asset('template/admin/dist/css/tabler.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('template/admin/dist/css/tabler-flags.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('template/admin/dist/css/tabler-payments.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('template/admin/dist/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('template/admin/dist/css/demo.min.css') }}" rel="stylesheet"/>
    </head>
    <body class="border-top-wide border-primary d-flex flex-column">
        <div class="page page-center">
            <div class="container-tight py-4">
                <div class="text-center mb-4">
                    <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('template/admin/static/logo.svg') }}" height="36" alt=""></a>
                </div>
                <form class="card card-md" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">{{ __('Login') }}</h2>
                        <div class="mb-2">
                            <label class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="form-check-label">{{ __('Remember Me') }}</span>
                            </label>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">{{ __('Login') }}</button>
                        </div>
                    </div>
                </form>
                <div class="text-center text-muted mt-3">
                    <a href="?theme=dark" class="px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                    </a>
                    <a href="?theme=light" class="px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="4" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                </div>
            </div>
        </div>
        <!-- Libs JS -->
        <!-- Tabler Core -->
        <script src="{{ asset('template/admin/dist/js/tabler.min.js') }}"></script>
        <script src="{{ asset('template/admin/dist/js/demo.min.js') }}"></script>
    </body>
</html>
