@if (auth()->user()->is_admin)
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'Laravel') }}</title>

            <!-- Fonts -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monoton&display=swap" />
            <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

            <!-- Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            <script>
                /*to prevent Firefox FOUC, this must be here*/
                let FF_FOUC_FIX;
            </script>
        </head>
        <body class="font-sans antialiased">
            <div class="min-h-screen bg-gray-100">
                @include('layouts.navigation')

                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </body>
    </html>
@else
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="initial-scale=1, width=device-width" />
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monoton&display=swap" />
            <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
            <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
            <link rel="stylesheet" href="{{ asset('css/timeline.css') }}" />
            <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600;700&display=swap"/>
        
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            <script>
                /*to prevent Firefox FOUC, this must be here*/
                let FF_FOUC_FIX;
            </script>
        </head>
        <body>
            <div class="home">
                @include('layouts.navigation')
                <main>
                    {{ $slot }}
                </main>
                <div class="footer-10">
                    <div class="card1">
                        <div class="links">
                            <div class="column5">
                                <img class="logo-icon" alt="" src="{{ asset('photo/public/logo1.svg') }}" />
                            </div>
                            <div class="column6">
                                <div class="page-one">Column One</div>
                                <div class="footer-links2">
                                    <div class="link4">
                                    <div class="placeholder">Link One</div>
                                </div>
                                <div class="link4">
                                    <div class="placeholder">Link Two</div>
                                </div>
                                <div class="link4">
                                    <div class="placeholder">Link Three</div>
                                </div>
                                <div class="link4">
                                    <div class="placeholder">Link Four</div>
                                </div>
                                <div class="link4">
                                    <div class="placeholder">Link Five</div>
                                </div>
                            </div>
                        </div>
                        <div class="column6">
                            <div class="page-one">Column Two</div>
                            <div class="footer-links2">
                                <div class="link4">
                                    <div class="placeholder">Link Six</div>
                                </div>
                                <div class="link4">
                                    <div class="placeholder">Link Seven</div>
                                </div>
                                <div class="link4">
                                    <div class="placeholder">Link Eight</div>
                                </div>
                                <div class="link4">
                                    <div class="placeholder">Link Nine</div>
                                </div>
                                <div class="link4">
                                    <div class="placeholder">Link Ten</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newslatter">
                        <div class="heading-parent">
                            <div class="page-one">Subscribe</div>
                            <div class="text">
                                Join our newsletter to stay up to date on features and releases.
                            </div>
                        </div>
                        <div class="actions2">
                            <div class="form">
                                <div class="text-input">
                                    <div class="placeholder">Enter your email</div>
                                </div>
                                <div class="button10">
                                    <div class="link">Subscribe</div>
                                </div>
                            </div>
                            <div class="text4">
                                By subscribing you agree to with our
                                <span class="privacy-policy">Privacy Policy</span> and provide
                                consent to receive updates from our company.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-links">
                    <div class="row">
                        <div class="credits1">
                            <div class="link">© 2023 Relume. All rights reserved.</div>
                            <div class="footer-links3">
                                <div class="link34">Privacy Policy</div>
                                <div class="link34">Terms of Service</div>
                                <div class="link34">Cookies Settings</div>
                            </div>
                        </div>
                        <div class="social-links">
                            <img class="chevron-down-icon" src="{{ asset('photo/public/icon--facebook.svg') }}"/>
                            <img class="chevron-down-icon" src="{{ asset('photo/public/icon--instagram.svg') }}"/>
                            <img class="chevron-down-icon" src="{{ asset('photo/public/icon--twitter.svg') }}"/>
                            <img class="chevron-down-icon" src="{{ asset('photo/public/icon--linkedin.svg') }}"/>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>
@endif
