<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب كبدس | EL ACBADS</title>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Cairo', sans-serif;
            background: #f5f5f5;
            color: #252525;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
        }

        .page-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 45px 20px;
        }

        .auth-container {
            width: 100%;
            max-width: 460px;
        }

        .logo {
            text-align: center;
            margin-bottom: 22px;
            font-size: 27px;
            font-weight: 900;
            color: #252525;
        }

        .logo span {
            color: #9a8765;
        }

        .auth-card {
            background: #fff;
            border: 1px solid #e8e8e8;
            border-radius: 14px;
            padding: 35px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, .035);
        }

        .auth-title {
            text-align: center;
            margin-bottom: 25px;
        }

        .auth-title .tag {
            display: inline-block;
            background: #f3f0e9;
            color: #887653;
            padding: 5px 13px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 800;
            margin-bottom: 13px;
        }

        .auth-title h1 {
            font-size: 25px;
            font-weight: 900;
            margin-bottom: 7px;
        }

        .auth-title p {
            color: #888;
            font-size: 13px;
            line-height: 2;
            margin: 0;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 800;
            margin-bottom: 7px;
        }

        .form-control {
            width: 100%;
            height: 47px;
            border: 1px solid #dedede;
            border-radius: 8px;
            padding: 0 13px;
            font-family: inherit;
            font-size: 13px;
            outline: none;
            background: #fff;
            transition: .2s;
        }

        .form-control:focus {
            border-color: #9a8765;
            box-shadow: 0 0 0 3px rgba(154, 135, 101, .1);
        }

        .form-control::placeholder {
            color: #aaa;
        }

        .form-control.is-invalid {
            border-color: #dc5555;
            background: #fffafa;
        }

        .field-error {
            display: block;
            color: #c0392b;
            font-size: 11px;
            margin-top: 6px;
        }

        .submit-btn {
            width: 100%;
            height: 49px;
            background: #292929;
            color: #fff;
            border: 0;
            border-radius: 8px;
            font-family: inherit;
            font-size: 14px;
            font-weight: 800;
            cursor: pointer;
            transition: .2s;
            margin-top: 5px;
        }

        .submit-btn:hover {
            background: #9a8765;
        }

        .submit-btn:disabled {
            opacity: .7;
            cursor: not-allowed;
        }

        .alert {
            padding: 12px 14px;
            border-radius: 8px;
            font-size: 12px;
            margin-bottom: 18px;
            line-height: 1.9;
        }

        .alert-error {
            background: #fff1f0;
            color: #b93830;
            border: 1px solid #f0d1ce;
        }

        .auth-footer {
            text-align: center;
            margin-top: 22px;
            font-size: 13px;
            color: #777;
        }

        .auth-footer a {
            color: #8c7957;
            font-weight: 900;
            text-decoration: none;
        }

        .auth-footer a:hover {
            color: #292929;
        }

        @media(max-width: 480px) {
            .page-content {
                padding: 30px 15px;
            }

            .auth-card {
                padding: 25px 20px;
            }
        }
    </style>
</head>

<body>

    <x-navbar />

    <main class="page-content">

        <div class="auth-container">

            <div class="logo">
                EL <span>ACBADS</span>.
            </div>

            <div class="auth-card">

                <div class="auth-title">
                    <span class="tag">MENIA TEAM</span>
                    <h1>مرحبا بأكبادي</h1>
                    <p>أدخل بافيهك...</p>
                </div>

                @if(session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-error">
                        فيه بيانات محتاجة تتراجع يا كبدس، شوف الأخطاء اللي تحت وجرب تاني.
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}" id="registerForm">
                    @csrf

                    <div class="form-group">
                        <label for="name">اسمك ايه يا كبدس</label>

                        <input type="text" id="name" name="name"
                            class="form-control @error('name') is-invalid @enderror" placeholder="اكتب اسمك"
                            value="{{ old('name') }}" autocomplete="name" autofocus>

                        @error('name')
                            <span class="field-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">البريد الالكتروني</label>

                        <input type="email" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror" placeholder="example@email.com"
                            value="{{ old('email') }}" autocomplete="email">

                        @error('email')
                            <span class="field-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">كلمة المرور</label>

                        <input type="password" id="password" name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="اختار كلمة مرور من 8 حروف على الاقل">

                        @error('password')
                            <span class="field-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="submit-btn" id="registerButton">
                        إنشاء حساب كبدس
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


                <div class="auth-footer">
                    عندك حساب بالفعل؟
                    <a href="{{ route('login') }}">سجل دخولك</a>
                </div>

            </div>

        </div>

    </main>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function () {
            const button = document.getElementById('registerButton');

            button.disabled = true;
            button.textContent = 'جاري إنشاء الحساب...';
        });
    </script>

</body>

</html>
