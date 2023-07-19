<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Login | Admin </title>
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
                        </div>

                        <h4 class="text-muted text-center font-size-18"><b>Sign In</b></h4>

                        <div class="p-3">
                            <form method="POST" class="form-horizontal mt-3" action="{{ route('login') }}">
                             @csrf




                                 <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" placeholder="Email Address"  />
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="Password" />
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="form-label ms-1" for="customCheck1">Remember me</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>

                                 <div class="flex items-center justify-end mt-4">



                                <div class="form-group mb-0 row mt-2">


                               <div class="flex items-center justify-end mt-4">
                                <i class="mdi mdi-lock"></i>
                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }} </a>
                                  @endif

                                    </div>
                                    <div class="col-sm-5 mt-3">
                                    <a href="{{ route('register') }}" class="text-muted">
                                     <i class="mdi mdi-account-circle"></i> Create an account</a>
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
        <!-- App toastr -->
        <script src="{{asset('/backend-theme/assets/libs/toastr/js/toastr-2.1.3.min.js')}}"></script>

        <script>
            @if(Session::has('message'))
            var type = "{{ Session::get('alert-type','info') }}"
            switch(type){
               case 'info':
               toastr.info(" {{ Session::get('message') }} ");
               break;
               case 'success':
               toastr.success(" {{ Session::get('message') }} ");
               break;
               case 'warning':
               toastr.warning(" {{ Session::get('message') }} ");
               break;
               case 'error':
               toastr.error(" {{ Session::get('message') }} ");
               break;
            }
            @endif
           </script>
    </body>
</html>
