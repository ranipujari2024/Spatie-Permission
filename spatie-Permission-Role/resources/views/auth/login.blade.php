<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Kasturi">
    <!--<meta name="csrf-token" content="{{ csrf_token() }}">-->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title  -->
    <title>Login | Spatie Permission - Role</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=2.7.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.7.0') }}">
    <style type="text/css">
    </style>
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <span class="logo-link">

                            </span>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title" style="text-align:center;">Login</h4>
                                    </div>
                                </div>
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->

                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">{{ __('Email Address') }}</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input name="email" type="text" placeholder="Email Address"
                                                id="default-01"
                                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">{{ __('Password') }}</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg"
                                                data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye-off"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye"></em>
                                            </a>

                                            <input id="password" name="password" type="password" placeholder="Password"
                                                class="form-control form-control-lg lock-input @error('password') is-invalid @enderror">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Log in</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- wrap @e -->
                </div>
                <!-- content @e -->
            </div>
            <!-- main @e -->
        </div>
        <!-- app-root @e -->
        <!-- JavaScript -->
        <script src="{{ asset('assets/js/bundle.js?ver=2.7.0') }}"></script>
        <script src="{{ asset('assets/js/scripts.js?ver=2.7.0') }}"></script>

</html>
