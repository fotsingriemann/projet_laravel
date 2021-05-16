
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Login Boxed - ArchitectUI HTML Bootstrap 4 Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">
    <!-- Mobile Specific Metas -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="{{ asset('assets/css/main.87c0748b313a1dda75f5.css')}}" rel="stylesheet"></head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="app-logo-inverse mx-auto mb-3"></div>
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Welcome back,</div>
                                            <span>Please sign in to your account below.</span>
                                        </h4>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group ">
                                                    <input name="email" id="exampleEmail" value="{{ old('email') }}" placeholder="Entrer votre Email..." type="email" class="form-control @error('email') is-invalid @enderror" required>
                                                </div>
                                            </div>
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input name="password" value="{{ old('password') }}" id="examplePassword" placeholder="Entrer votre mot de passe ici..." type="password" class="form-control @error('password') is-invalid @enderror" required></div>
                                            </div>
                                            @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="position-relative form-check">
                                            <input name="remember" id="exampleCheck" type="checkbox" class="form-check-input">
                                            <label for="exampleCheck" class="form-check-label">Keep me logged in</label>
                                        </div>
                                        <div class="divider"></div>
                                        <h6 class="mb-0">No account? 
                                        <a href="{{ route('register') }}">Register</a>
                                        </h6>
                                        <div class="modal-footer clearfix">
                                            <div class="float-left">
                                                @if (Route::has('password.request'))
                                                    <a class="btn-lg btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="float-right">
                                                <button class="btn btn-primary btn-lg">Enregistrer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © VCAM</div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript" src="{{ asset('assets/scripts/main.87c0748b313a1dda75f5.js')}}"></script></body>
</html>

