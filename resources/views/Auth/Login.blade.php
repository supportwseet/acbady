<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>دخول الأكبادس</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background: #f5f5f5;
            color: #252525;
            min-height: 100vh;
        }

        .brand-color {
            color: #9a8765;
        }

        .auth-card {
            max-width: 440px;
            border: 1px solid #e8e8e8;
            border-radius: 14px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, .035);
        }

        .auth-tag {
            background: #f3f0e9;
            color: #887653;
            font-size: 11px;
        }

        .form-control {
            min-height: 48px;
            font-size: 13px;
        }

        .form-control:focus {
            border-color: #9a8765;
            box-shadow: 0 0 0 .2rem rgba(154, 135, 101, .12);
        }

        .btn-acbads {
            background: #292929;
            color: #fff;
            min-height: 49px;
            border: none;
        }

        .btn-acbads:hover {
            background: #9a8765;
            color: #fff;
        }

        .auth-link {
            color: #8c7957;
            text-decoration: none;
            font-weight: 800;
        }

        .auth-link:hover {
            color: #292929;
        }
    </style>
</head>

<body>

    <x-navbar />

    <main class="container-fluid d-flex align-items-center justify-content-center py-5">

        <div class="w-100 auth-card bg-white p-4 p-md-5">

            <div class="text-center mb-4">

                <div class="fw-black fs-3 mb-3">
                    EL <span class="brand-color">ACBADS.</span>
                </div>

                <h1 class="fs-4 fw-bold mb-2">
                    رجعتلنا تاني يا كبدس؟
                </h1>

                <p class="text-secondary small lh-lg mb-0">
                    وحشتنا يا عم، سجل دخولك وشوف مين اتبضن عليك في غيابك.
                </p>

            </div>

            @if(session('success'))
                <div class="alert alert-success small">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger small">
                    {{ session('error') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger small">
                    فيه حاجة مش مظبوطة يا كبدس، راجع البيانات وجرب تاني.
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" id="loginForm">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label fw-bold small">
                        البريد الالكتروني
                    </label>

                    <input type="email" id="email" name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="اكتب البريد الالكتروني بتاعك" value="{{ old('email') }}" autocomplete="email"
                        required autofocus>

                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label fw-bold small">
                        كلمة المرور
                    </label>

                    <input type="password" id="password" name="password"
                        class="form-control @error('password') is-invalid @enderror" placeholder="اكتب كلمة المرور"
                        autocomplete="current-password" required>

                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-acbads w-100 fw-bold" id="loginButton">
                    دخول الأكبادس
                </button>

            </form>

            <div class="google-login-wrapper">
                <div class="google-divider">
                    <span>أو سجل دخول باستخدام</span>
                </div>

                <a href="{{ route('google.redirect') }}" class="google-login-btn">
                    <svg width="21" height="21" viewBox="0 0 48 48">
                        <path fill="#EA4335"
                            d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z" />
                        <path fill="#4285F4"
                            d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.76 7.18l7.73 6C44.42 37.99 46.98 31.82 46.98 24.55z" />
                        <path fill="#FBBC05"
                            d="M10.53 28.59A14.4 14.4 0 0 1 9.75 24c0-1.59.27-3.13.76-4.59l-7.98-6.19A23.9 23.9 0 0 0 0 24c0 3.88.93 7.55 2.56 10.78l7.97-6.19z" />
                        <path fill="#34A853"
                            d="M24 48c6.48 0 11.93-2.13 15.91-5.8l-7.73-6c-2.14 1.44-4.89 2.3-8.18 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z" />
                    </svg>

                    <span>تسجيل الدخول باستخدام Google</span>
                </a>
            </div>

            <style>
                .google-login-wrapper {
                    margin-top: 22px;
                }

                .google-divider {
                    display: flex;
                    align-items: center;
                    gap: 12px;
                    color: #999;
                    font-size: 12px;
                    margin-bottom: 17px;
                }

                .google-divider::before,
                .google-divider::after {
                    content: "";
                    height: 1px;
                    flex: 1;
                    background: #e8e8e8;
                }

                .google-login-btn {
                    min-height: 48px;
                    width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 12px;
                    border: 1px solid #e5e5e5;
                    border-radius: 10px;
                    background: #fff;
                    color: #333;
                    text-decoration: none;
                    font-size: 13px;
                    font-weight: 700;
                    transition: .2s;
                }

                .google-login-btn:hover {
                    background: #f8f8f8;
                    border-color: #ccc;
                    color: #222;
                }
            </style>


            <div class="text-center mt-4 small text-secondary">
                لسه مش كبدس معانا؟
                <a href="{{ route('register') }}" class="auth-link">
                    اعمل حساب جديد
                </a>
            </div>

            <a href="{{ route('home') }}" class="d-block text-center text-secondary text-decoration-none small mt-4">
                الرجوع للصفحة الرئيسية
            </a>

        </div>

    </main>


    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function () {
            const button = document.getElementById('loginButton');

            button.disabled = true;
            button.textContent = 'جاري تسجيل الدخول...';
        });
    </script>

</body>

</html>
