<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('/theme_cms/images/logo/logo main.jpg') }}" type="image/png" />
    <!-- loader-->
    <link href="{{ asset('/theme_cms/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('/theme_cms/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('/theme_cms/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('/theme_cms/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/theme_cms/css/icons.css') }}" rel="stylesheet">

    <!-- fontawesome icon -->
    <link href="https://kit-pro.fontawesome.com/releases/v6.2.1/css/pro.min.css" rel="stylesheet">

    <title>LOGIN - Stock Make Money</title>
</head>

<style>
    body {
        height: 100vh; /* ทำให้ body ขยายในทุกทิศทาง */
        margin: 0; /* ลบ margin เพื่อป้องกันการขยับของ body */
    }

    .gradient-button {
        background: radial-gradient(ellipse farthest-corner at right bottom, #D1B464 35%, #606060 100%, #606060 20%, #D1B464 100%, transparent 80%), radial-gradient(ellipse farthest-corner at left top, #606060 0%, #D1B464 15%, #D1B464 62.5%, #D1B464 100%);
        background-size: cover;
        border: none;
        color: #000; /* สีข้อความ */
        text-shadow: 1px 1px 1px #fff; /* เงาข้อความ */
    }

    .gold_color_text {
        /* สไตล์ข้อความ */
        background-image: radial-gradient(ellipse farthest-corner at right bottom, #D1B464 0%, #FFFAF0 8%, #D1B464 30%, #FFFAF0 40%, transparent 80%), radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFFF 8%, #D1B464 25%, #D1B464 62.5%, #FFFFFF 100%);
        background-size: cover;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .bold-gold {
        font-weight: bold; /* ทำให้ตัวอักษรหนาขึ้น */
        background-image: radial-gradient(ellipse farthest-corner at right bottom, #D1B464 0%, #D1B464 8%, #D1B464 30%, #D1B464 40%, transparent 80%), radial-gradient(ellipse farthest-corner at left top, #000000 0%, #000000 50%, #000000 25%, #D1B464 62.5%, #000000 100%);
        background-size: cover;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

</style>

<body class="bg-lock-screen d-flex align-items-center justify-content-center">
    <div class="card border-top border-0 border-5 border-dark col-11 col-md-4">
        <div class="card-body p-5">
            <div class="card-title text-center">
                <img src="{{ asset('/theme_cms/images/logo/logo png.png') }}" class="logo-icon" alt="logo icon" style="width:120px;">
                <h5 class="mb-5 mt-2 text-dark">Login <b class="gold_color_text bold-gold">Stock Make Money</b></h5>
            </div>
            <hr>
            <form class="row g-3" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="col-12">
                    <label for="inputLastEnterUsername" class="form-label">{{ __('E-Mail Address') }}</label>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-transparent"><i class="bx bxs-user"></i></span>
                        <input id="email" type="email" class="form-control border-start-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter E-Mail Address">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <label for="inputLastEnterPassword" class="form-label">{{ __('Password') }}</label>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-transparent"><i class="bx bxs-lock-open"></i></span>
                        <input id="password" type="password" class="form-control border-start-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot Password?') }}
                        </a>
                    @endif
                </div>
                <div class="col-12">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark btn-lg px-5 gradient-button">
                            <i class="bx bxs-lock-open"></i>Login
                        </button>
                    </div>
                </div>
                <hr>
                <div class="col-12 text-center">
                    <p class="mb-0">or Sign in with:</p>
                </div>
                <div class="col-12">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success btn-lg px-5">
                            <i class="fa-brands fa-line text-white mx-3"></i>Login with Line
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>