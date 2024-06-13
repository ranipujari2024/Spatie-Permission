<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{config('app.baseURL')}}/images/favicon.png">
    <!-- Page Title  -->
    <title>Login | Panel Game</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/dashlite.css?ver=2.7.0">
    <link id="skin-default" rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/theme.css?ver=2.7.0">
    <style>
        .card-bordered{
            box-shadow: 2px 2px 20px rgba(0,0,0,0.1);
        }
        .bg-white{
            background-color:#f5f5ff !important;
        }
        .nk-footer{
    background: transparent;
    border: none;
}
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
                            <!-- <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{config('app.baseURL')}}/images/logo.png" srcset="{{config('app.baseURL')}}/images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="{{config('app.baseURL')}}/images/logo-dark.png" srcset="{{config('app.baseURL')}}/images/logo-dark2x.png 2x" alt="logo-dark">
                            </a> -->
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Log in to access your account</h4>
                                        
                                    </div>
                                </div>
                                <form action="{{ route('login') }}" method="post">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">{{ __('User Name') }}</label>
                                        </div>
                                        <div class="form-control-wrap">
                                           <input  name="username" type="text" placeholder="User ID" id="default-01" class="form-control form-control-md @error('username') is-invalid @enderror" value="{{ old('username') }}" required="">
                                            @error('username')
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
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            
                                            <input id="password" name="password" type="password" placeholder="Password" class="form-control form-control-md form-control-lglock-input @error('password') is-invalid @enderror" required="">
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
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row">                                
                                <div class="col-lg-12">
                                    <div class="nk-block-content text-center text-lg-center">
                                        <p class="text-soft"> &copy; {{date('Y')}} <a href="https://bpointer.com/" target="_blank">BPOINTER TECHNOLOGIES</a></p>
                                    </div>
                                </div>
                            </div>
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
    <script src="{{config('app.baseURL')}}/assets/js/bundle.js?ver=2.7.0"></script>
    <script src="{{config('app.baseURL')}}/assets/js/scripts.js?ver=2.7.0"></script>

</html>