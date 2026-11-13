<footer class="footer-custom" dir="rtl">
    <div class="container">
        <div class="footer-main">
            <div class="row g-4">
                <div class="col-lg-5 col-md-6">
                    <a href="{{ route('home') }}" class="footer-brand">
                        <span class="footer-brand-icon">
                            <i class="bi bi-people-fill"></i>
                        </span>
                        <span>
                            EL <strong>ACBADS.</strong>
                        </span>
                    </a>

                    <p class="footer-description">
                        مكان الاكبادس الرسمي، هنا الضحك والتبضين
                    </p>

                    <div class="footer-social">
                        <a href="{{ route('home') }}" aria-label="الرئيسية">
                            <i class="bi bi-house-door"></i>
                        </a>
                        <a href="{{ route('posts.index') }}" aria-label="المنشورات">
                            <i class="bi bi-chat-square-text"></i>
                        </a>
                        <a href="{{ route('founders') }}" aria-label="المؤسسون">
                            <i class="bi bi-award"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-heading">روابط سريعة</h5>

                    <ul class="footer-links">
                        <li>
                            <a href="{{ route('home') }}">
                                <i class="bi bi-chevron-left"></i>
                                الرئيسية
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('posts.index') }}">
                                <i class="bi bi-chevron-left"></i>
                                منشورات الاكبادس
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('founders') }}">
                                <i class="bi bi-chevron-left"></i>
                                مؤسسو الاكبادس
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('users.index') }}">
                                <i class="bi bi-chevron-left"></i>
                                كل الاكبادس
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h5 class="footer-heading">انضم للعيلة</h5>

                    <p class="footer-description footer-join-text">
                        لسه مش من الاكبادس؟
                    </p>

                    <div class="footer-actions">
                        @auth
                            <a href="{{ route('posts.create') }}" class="footer-action-btn">
                                <i class="bi bi-plus-circle"></i>
                                انشر تبضينتك
                            </a>
                        @else
                            <a href="{{ route('register') }}" class="footer-action-btn">
                                <i class="bi bi-person-plus"></i>
                                اعمل حساب
                            </a>

                            <a href="{{ route('login') }}" class="footer-login-link">
                                عندك حساب؟ سجل دخولك
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-copy">
                جميع الحقوق محفوظة لـ EL ACBADS © {{ date('Y') }}
            </div>

            <div class="footer-made">
                Made With Love By <span style="color: white; font-weight: 900">EL-Dawla</span> For Acbady
                <i class="bi bi-heart-fill"></i>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer-custom {
        background: #252525;
        color: #fff;
        margin-top: auto;
        padding-top: 50px;
    }

    .footer-main {
        padding-bottom: 35px;
    }

    .footer-brand {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        color: #fff;
        text-decoration: none;
        font-size: 22px;
        font-weight: 900;
        line-height: 1.2;
    }

    .footer-brand:hover {
        color: #fff;
    }

    .footer-brand strong {
        color: #c4b596;
    }

    .footer-brand small {
        display: block;
        color: #999;
        font-size: 9px;
        letter-spacing: 1.5px;
        margin-top: 4px;
    }

    .footer-brand-icon {
        width: 46px;
        height: 46px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        background: #393939;
        color: #c4b596;
        font-size: 22px;
        flex-shrink: 0;
    }

    .footer-description {
        color: #aaa;
        font-size: 13px;
        line-height: 2;
        margin-top: 18px;
        max-width: 400px;
    }

    .footer-heading {
        color: #fff;
        font-size: 15px;
        font-weight: 800;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 12px;
    }

    .footer-heading::after {
        content: "";
        position: absolute;
        bottom: 0;
        right: 0;
        width: 35px;
        height: 2px;
        background: #b9a47e;
        border-radius: 5px;
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links a {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #aaa;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        transition: .2s;
    }

    .footer-links a i {
        color: #b9a47e;
        font-size: 11px;
    }

    .footer-links a:hover {
        color: #fff;
        transform: translateX(-4px);
    }

    .footer-join-text {
        margin-top: 0;
    }

    .footer-actions {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
        margin-top: 18px;
    }

    .footer-action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 11px 18px;
        background: #b9a47e;
        color: #252525;
        border-radius: 9px;
        font-size: 13px;
        font-weight: 800;
        text-decoration: none;
        transition: .2s;
    }

    .footer-action-btn:hover {
        background: #fff;
        color: #252525;
        transform: translateY(-2px);
    }

    .footer-login-link {
        color: #aaa;
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
    }

    .footer-login-link:hover {
        color: #fff;
    }

    .footer-social {
        display: flex;
        gap: 9px;
        margin-top: 20px;
    }

    .footer-social a {
        width: 37px;
        height: 37px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #393939;
        border: 1px solid #454545;
        color: #c4b596;
        border-radius: 9px;
        font-size: 16px;
        text-decoration: none;
        transition: .2s;
    }

    .footer-social a:hover {
        background: #b9a47e;
        color: #252525;
        border-color: #b9a47e;
        transform: translateY(-3px);
    }

    .footer-bottom {
        border-top: 1px solid #3b3b3b;
        padding: 18px 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
    }

    .footer-copy,
    .footer-made {
        color: #929292;
        font-size: 11px;
        font-weight: 600;
    }

    .footer-made i {
        color: #c77a7a;
        font-size: 10px;
        margin-right: 3px;
    }

    @media (max-width: 767.98px) {
        .footer-custom {
            padding-top: 35px;
        }

        .footer-main {
            padding-bottom: 25px;
        }

        .footer-heading {
            margin-bottom: 15px;
        }

        .footer-description {
            max-width: 100%;
        }

        .footer-bottom {
            flex-direction: column;
            text-align: center;
            gap: 8px;
        }
    }

    @media (max-width: 400px) {
        .footer-brand {
            font-size: 19px;
        }

        .footer-brand-icon {
            width: 41px;
            height: 41px;
        }

        .footer-copy,
        .footer-made {
            font-size: 10px;
        }
    }
</style>
