

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-info">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">Register</div>
                    <div class="card-body">
                       
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="form-group">
                                <x-label for="name" :value="__('الإسم')" />

                                <x-input id="name" class="block mt-1 w-full form-control" type="text" name="name"
                                    :value="old('الإسم')" required autofocus />
                            </div>

                            <!-- Email Address -->
                            <div class="form-group">
                                <x-label for="email" :value="__('البريد الألكتروني')" />

                                <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email"
                                    :value="old('البريد الألكتروني')" required />
                            </div>


                            <!-- Password -->
                            <div class="form-group">
                                <x-label for="password" :value="__('الرقم السري')" />

                                <x-input id="password" class="block mt-1 w-full form-control" type="password" name="password"
                                    required autocomplete="new-password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <x-label for="password_confirmation" :value="__('تأكيد الرقم السري')" />

                                <x-input id="password_confirmation" class="block mt-1 w-full form-control" type="password"
                                    name="password_confirmation" required />
                            </div>





                            <div class="flex items-center justify-end mt-4">
                                

                                <x-button class="btn btn-primary">
                                    {{ __('الإشتراك') }}
                                </x-button>
                                <br>
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('login') }}">
                                    {{ __('لديك حساب بالفعل') }}
                                </a>

                            </div>
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
