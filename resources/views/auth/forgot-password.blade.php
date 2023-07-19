<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Password | Forgotten </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    


          @include('admin.layout.styles')

    </head>

        @csrf
    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">

                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="index.html" class="auth-logo">
                                    <img src="{{asset('backend-theme/assets/images/logo-dark.png')}}" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="{{asset('backend-theme/assets/images/logo-light.png')}}" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                            <div class="alert alert-danger" role="alert"><b> Forgot your password?</b></div>
                            </div>
                                              

                               <div class="alert alert-info alert-dismissible fade show" role="alert">
                               <strong> Simply enter your email address, and we will email you a password reset link that will allow you to choose a new one. </strong>
                                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                              <div class="p-3">
                              <form method="POST" class="form-horizontal mt-3" action="{{ route('password.email') }}">
                              @csrf
                             

                                 <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter Email Address"/>
                                    </div>
                                </div>

                               

                               <div class="flex items-center justify-end mt-4">
        

                               

                                <div class="form-group mb-0 row mt-2">
                                    <div class="col-sm-7 mt-3">
                                        <a href="{{ __('Email Password Reset Link') }}" class="text-muted">
                                        <i class="mdi mdi-lock"></i> Rest Password?</a>
                                    </div>
                                   
                                </div>
                            </form>
                        </div>
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->

        <!-- JAVASCRIPT -->
        <script src="{{asset('backend-theme/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('backend-theme/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('backend-theme/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('backend-theme/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('backend-theme/assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('backend-theme/assets/js/app.js')}}"></script>

    </body>
</html>
