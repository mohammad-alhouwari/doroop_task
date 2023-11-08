<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-info">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">تسجيل الدخول</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="form-group">
                                <x-label for="email" :value="__('البريد الإلكتروني')" />

                                <x-input id="email" class="block mt-1 w-full form-control" type="email"
                                    name="email" :value="old('البريد الإلكتروني')" required autofocus />
                            </div>


                            <!-- Password -->
                            <div class="form-group">
                                <x-label for="password" :value="__('كلمة السر')" />

                                <x-input id="password" class="block mt-1 w-full form-control" type="password"
                                    name="password" required autocomplete="current-password" />
                            </div>


                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('البقاء متصلاً') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                {{-- @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif --}}

                                <x-button class="btn btn-primary">
                                    {{ __('تسجيل الدخول') }}
                                </x-button>
                            </div>
                            @if ($userCount == 0)
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">ليس لديك حساب</a>
                                @endif
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
