<!DOCTYPE html>
<html lang="en">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{ asset('backend/dist/images/logo.svg')}}" rel="shortcut icon">
    <meta name="viewport" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Register</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/app.css') }}" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="login">
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Register Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="" class="-intro-x flex items-center pt-5">
{{--                <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ asset('frontend/assets/img/logoye.png') }}">--}}
{{--                <span class="text-white text-lg ml-3"> Mid<span class="font-medium">One</span> </span>--}}
            </a>
            <div class="my-auto">
                <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-100 -mt-16" src="{{ asset('frontend/assets/img/logoye.png') }}">
{{--                <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ asset('backend/dist/images/illustration.svg') }}">--}}
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    A few more clicks to
                    <br>
                    sign up to your account.
                </div>
                <div class="-intro-x mt-5 text-lg text-white">Manage all your e-commerce accounts in one place</div>
            </div>
        </div>
        <!-- END: Register Info -->
        <!-- BEGIN: Register Form -->
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    Member Registration From
                </h2>
                <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                <div class="intro-x mt-8">
                <form method="POST" action="{{ route('registration') }}">
{{--                    <div class="intro-y box mt-5">--}}

{{--                        <div class="p-5" id="input-groups">--}}
{{--                            <div class="preview">--}}
{{--                                <div class="relative">--}}
{{--                                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"><i data-feather="user"></i></div>--}}
{{--                                    <input type="text" class="input pl-12 w-full border col-span-4" placeholder="Name">--}}
{{--                                </div>--}}

{{--                                  <div class="relative mt-2">--}}
{{--                                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"><i data-feather="mail"></i></div>--}}
{{--                                    <input type="text" class="input pl-12 w-full border col-span-4" placeholder="Email">--}}
{{--                                </div>--}}

{{--                                  <div class="relative mt-2">--}}
{{--                                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"><i data-feather="mail"></i></div>--}}
{{--                                    <input type="text" class="input pl-12 w-full border col-span-4" placeholder="Email">--}}
{{--                                </div>--}}

{{--                                  <div class="relative mt-2">--}}
{{--                                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"><i data-feather="mail"></i></div>--}}
{{--                                    <input type="text" class="input pl-12 w-full border col-span-4" placeholder="Email">--}}
{{--                                </div>--}}


{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    @csrf


                    <input type="text" name="name" value="{{ old('name') }}" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Full Name">
                    @error('name')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror
                    <input type="email" name="email" value="{{ old('email') }}" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Email">
                    @error('name')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror
                    <input type="text" name="batch_name" value="{{ old('batch_name') }}" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Batch No">
                    @error('batch_name')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror
                    <input type="text" name="country" value="{{ old('country') }}" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Country">
                    @error('country')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror
                    <input type="text" name="nationality" value="{{ old('nationality') }}" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Nationality">
                    @error('nationality')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror
                    <input type="text" name="phone" value="{{ old('phone') }}" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Phone Number">
                    @error('phone')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror
                    <input type="text" name="occupation" value="{{ old('occupation') }}" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Occupation">
                    @error('occupation')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror
                    <input type="password" name="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password">
                    @error('password')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror
                    <input type="password" name="password_confirmation" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password Confirmation">

                </div>
                <div class="intro-x flex items-center text-gray-700 mt-4 text-xs sm:text-sm">
                    <input type="checkbox" class="input border mr-2" id="remember-me">
                    <label class="cursor-pointer select-none" for="remember-me">I agree to the Envato</label>
                    <a class="text-theme-1 ml-1" href="">Privacy Policy</a>.
                </div>
                <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                    <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Register</button>
                </form>
                <button class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0"><a href="{{ route('login') }}">Login</a></button>
                </div>
            </div>
        </div>
        <!-- END: Register Form -->
    </div>
</div>
<!-- BEGIN: JS Assets-->
<script src="{{ asset('backend/dist/js/app.js') }}"></script>
<!-- END: JS Assets-->
</body>
</html>

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}
{{--            --}}
{{--        </form>--}}

