<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                font-family: 'Open Sans', sans-serif;
                background-color: #64C5B1;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .form-container {
                width: 600px;
                margin: 0 auto;
                padding: 50px;
                background-color: #333;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                color: #fff;
            }

            h1 {
                text-align: center;
                margin-bottom: 30px;
                font-size: 36px;
                color: #64C5B1;
            }

            form {
                display: flex;
                flex-direction: column;
            }

            label {
                margin-bottom: 10px;
                font-size: 18px;
                color: #64C5B1;
            }

            input {
                padding: 12px;
                border: none;
                border-radius: 5px;
                margin-bottom: 20px;
                font-size: 16px;
                color: #fff;
                background-color: #555;
            }

            button {
                padding: 10px;
                background-color: #64C5B1;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 20px;
                transition: background-color 0.2s ease-in-out;
            }

            button:hover {
                background-color: #18617a;
            }

            a {
                text-decoration: none;
                color: #64C5B1;
                font-size: 18px;
                transition: color 0.2s ease-in-out;
            }

            a:hover {
                color: #18617a;
            }

            p {
                text-align: right;
                margin: 8px;
            }

            .captcha-box {
                width: 100%;
                text-align: right;
                display: flex;

            }

        </style>

    </head>

<body>

    <div class="container">
        <div class="form-container" id="login-form">
            <h1>Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <label for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus
                    placeholder="masukkan email aktif">

                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password"
                    placeholder="masukkan paswword min 8 karakter">

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    <p>{{ __('Forgot Your Password?') }}</p>
                </a>
                @endif
                <br>

                <div class="captcha-box">
                    <div class="col-md-6">
                        {!! NoCaptcha::display() !!}
                        {!! NoCaptcha::renderJs() !!}
                        @error('g-recaptcha-response')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <br>

                <button type="submit">{{ __('Login') }}</button>
        </div>
    </div>
    </form>
    </div>
    </div>

    <!-- Vendor js -->
    <script src="{{ asset('template/js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{ asset('template/js/app.min.js')}}"></script>
</body>

</html>
