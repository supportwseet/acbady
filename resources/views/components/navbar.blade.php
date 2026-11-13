<nav class="navbar navbar-expand-lg navbar-custom sticky-top" dir="rtl">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2 m-0" href="{{ route('home') }}">
            <span class="brand-icon">
                <i class="bi bi-people-fill"></i>
            </span>
            <span class="brand-text">
                EL <span>ACBADS.</span>
                <small>WE MENIA TEAM</small>
            </span>
        </a>

        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="فتح القائمة">
            <i class="bi bi-list"></i>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mx-auto align-items-lg-center gap-lg-1 mt-3 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-custom-link" href="{{ route('home') }}">
                        <i class="bi bi-house-door-fill"></i>
                        <span>الرئيسية</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('posts.index') }}" class="nav-link nav-custom-link">
                        <i class="bi bi-chat-square-text"></i>
                        <span>ألمنشورات</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('founders') }}" class="nav-link nav-custom-link">
                        <i class="bi bi-award"></i>
                        <span>ألمؤسسين</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link nav-custom-link">
                        <i class="bi bi-people-fill"></i>
                        <span>الاكبادس</span>
                    </a>
                </li>

                @auth
                    <li class="nav-item">
                        <a class="nav-link nav-custom-link" href="{{ route('posts.create') }}">
                            <i class="bi bi-megaphone-fill"></i>
                            <span>انشر تبضينتك</span>
                        </a>
                    </li>

                    @if(auth()->user()->isAdmin())
                        <li class="nav-item">
                            <a class="nav-link nav-custom-link" href="{{ route('admin.users.index') }}">
                                <i class="bi bi-shield-lock ms-2"></i>
                                ألاداره
                            </a>
                        </li>
                    @endif
                @endauth
            </ul>

            <div class="nav-auth mt-3 mt-lg-0">
                @auth
                    <div class="dropdown">
                        <button class="user-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="user-avatar">
                                <i class="bi bi-person-fill"></i>
                            </span>

                            <span class="user-info">
                                <small>نورتنا يا كبدس</small>
                                <strong>{{ auth()->user()->name }}</strong>
                            </span>

                            <i class="bi bi-chevron-down dropdown-arrow"></i>
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end user-menu">
                            <li class="dropdown-header">
                                <div class="menu-welcome">
                                    اهلا بيك في الاكبادس
                                </div>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    <i class="bi bi-person-vcard"></i>
                                    <span>البروفايل الشخصي</span>
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ route('posts.create') }}">
                                    <i class="bi bi-plus-circle"></i>
                                    <span>انشر تبضينتك</span>
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item logout-item">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span>تسجيل الخروج</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="guest-buttons">
                        <a href="{{ route('login') }}" class="btn-login">
                            <i class="bi bi-box-arrow-in-left"></i>
                            دخول الاكبادس
                        </a>

                        <a href="{{ route('register') }}" class="btn-register">
                            <i class="bi bi-person-plus-fill"></i>
                            اعمل حساب
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>

<style>
    .navbar-custom {
        background: #fff;
        border-bottom: 1px solid #eee;
        padding: 10px 0;
        box-shadow: 0 3px 15px rgba(0, 0, 0, .035);
        z-index: 1030;
    }

    .navbar-custom .container {
        min-width: 0;
    }

    .navbar-brand {
        flex-shrink: 0;
    }

    .brand-icon {
        width: 43px;
        height: 43px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #292929;
        color: #c4b596;
        border-radius: 12px;
        font-size: 21px;
        flex-shrink: 0;
    }

    .brand-text {
        color: #292929;
        font-size: 21px;
        font-weight: 900;
        line-height: 1.2;
        white-space: nowrap;
    }

    .brand-text span {
        color: #9a8765;
    }

    .brand-text small {
        display: block;
        font-size: 9px;
        color: #999;
        font-weight: 600;
        letter-spacing: 1.3px;
        margin-top: 3px;
    }

    .custom-toggler {
        border: 1px solid #eee;
        border-radius: 9px;
        padding: 5px 10px;
        color: #292929;
        font-size: 27px;
        box-shadow: none !important;
        flex-shrink: 0;
    }

    .nav-custom-link {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 11px !important;
        border-radius: 9px;
        color: #626262 !important;
        font-size: 12px;
        font-weight: 700;
        white-space: nowrap;
        transition: .2s ease;
    }

    .nav-custom-link i {
        color: #9a8765 !important;
        font-size: 16px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .nav-custom-link:hover {
        background: #f7f5f0;
        color: #292929 !important;
    }

    .nav-auth {
        flex-shrink: 0;
    }

    .user-dropdown {
        display: flex;
        align-items: center;
        gap: 10px;
        background: #f8f7f4;
        border: 1px solid #eee9df;
        border-radius: 12px;
        padding: 7px 10px;
        min-width: 160px;
        max-width: 210px;
        text-align: right;
        transition: .2s ease;
        font-family: inherit;
    }

    .user-dropdown:hover,
    .user-dropdown.show {
        background: #f1eee7;
        border-color: #ded4c1;
    }

    .user-dropdown::after {
        display: none;
    }

    .user-avatar {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: #292929;
        color: #c4b596;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 21px;
        flex-shrink: 0;
    }

    .user-info {
        display: flex;
        flex-direction: column;
        gap: 2px;
        flex: 1;
        min-width: 0;
    }

    .user-info small {
        color: #999;
        font-size: 10px;
    }

    .user-info strong {
        color: #292929;
        font-size: 12px;
        max-width: 120px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .dropdown-arrow {
        color: #9a8765;
        font-size: 11px;
        transition: .2s;
        flex-shrink: 0;
    }

    .user-dropdown.show .dropdown-arrow {
        transform: rotate(180deg);
    }

    .user-menu {
        min-width: 230px;
        max-width: min(280px, calc(100vw - 30px));
        margin-top: 12px !important;
        padding: 8px;
        border: 1px solid #eee;
        border-radius: 13px;
        box-shadow: 0 12px 35px rgba(0, 0, 0, .10);
        animation: menuShow .18s ease;
    }

    .menu-welcome {
        background: #f8f6f1;
        color: #8d7957;
        padding: 11px;
        border-radius: 9px;
        font-size: 12px;
        font-weight: 700;
        text-align: center;
    }

    .menu-welcome i {
        margin-left: 5px;
        font-size: 15px;
    }

    .user-menu .dropdown-item {
        display: flex;
        align-items: center;
        gap: 11px;
        padding: 11px 10px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
        color: #555;
        transition: .2s;
    }

    .user-menu .dropdown-item i {
        font-size: 17px;
        color: #9a8765;
        width: 20px;
        text-align: center;
        flex-shrink: 0;
    }

    .user-menu .dropdown-item:hover {
        background: #f7f5f0;
        color: #292929;
    }

    .user-menu form {
        width: 100%;
    }

    .user-menu .logout-item,
    .user-menu .logout-item i {
        color: #b54747;
    }

    .user-menu .logout-item {
        width: 100%;
        text-align: right;
    }

    .user-menu .logout-item:hover {
        background: #fff1f1;
        color: #b54747;
    }

    .guest-buttons {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .btn-login,
    .btn-register {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        border-radius: 9px;
        padding: 10px 12px;
        font-size: 11px;
        font-weight: 800;
        text-decoration: none;
        white-space: nowrap;
        transition: .2s ease;
    }

    .btn-login {
        color: #292929;
        background: #fff;
        border: 1px solid #ddd;
    }

    .btn-login:hover {
        color: #292929;
        background: #f5f5f5;
    }

    .btn-register {
        color: #fff;
        background: #292929;
        border: 1px solid #292929;
    }

    .btn-register:hover {
        color: #fff;
        background: #9a8765;
        border-color: #9a8765;
    }

    .btn-login i,
    .btn-register i {
        font-size: 15px;
    }

    @keyframes menuShow {
        from {
            opacity: 0;
            transform: translateY(6px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (min-width: 992px) and (max-width: 1199.98px) {
        .navbar-custom .container {
            max-width: 100%;
            padding-left: 18px;
            padding-right: 18px;
        }

        .brand-text {
            font-size: 18px;
        }

        .brand-icon {
            width: 39px;
            height: 39px;
        }

        .nav-custom-link {
            gap: 5px;
            padding: 9px 7px !important;
            font-size: 11px;
        }

        .nav-custom-link i {
            font-size: 15px;
        }

        .user-dropdown {
            min-width: 140px;
            gap: 7px;
            padding: 6px 8px;
        }

        .user-avatar {
            width: 34px;
            height: 34px;
        }

        .btn-login,
        .btn-register {
            padding: 9px 8px;
            font-size: 10px;
        }
    }

    @media (max-width: 991.98px) {
        .navbar-custom {
            padding: 9px 0;
        }

        .navbar-custom .navbar-collapse {
            border-top: 1px solid #eee;
            margin-top: 12px;
            padding-top: 12px;
            padding-bottom: 8px;
        }

        .navbar-nav {
            align-items: stretch !important;
            gap: 3px !important;
            width: 100%;
        }

        .navbar-nav .nav-item {
            width: 100%;
        }

        .nav-custom-link {
            width: 100%;
            padding: 12px !important;
            font-size: 14px;
            border-radius: 9px;
        }

        .nav-custom-link i {
            width: 23px;
            font-size: 18px;
        }

        .nav-auth {
            border-top: 1px solid #eee;
            padding-top: 13px;
            width: 100%;
        }

        .nav-auth .dropdown {
            width: 100%;
        }

        .user-dropdown {
            width: 100%;
            max-width: 100%;
            justify-content: flex-start;
        }

        .user-info strong {
            max-width: 100%;
        }

        .user-menu {
            width: 100%;
            max-width: 100%;
            margin-top: 7px !important;
            position: static !important;
            transform: none !important;
        }

        .guest-buttons {
            display: flex;
            width: 100%;
        }

        .guest-buttons a {
            flex: 1;
            padding: 12px 8px;
            font-size: 13px;
        }
    }

    @media (max-width: 575.98px) {
        .navbar-custom .container {
            padding-left: 14px;
            padding-right: 14px;
        }

        .brand-text {
            font-size: 18px;
        }

        .brand-text small {
            font-size: 8px;
        }

        .brand-icon {
            width: 39px;
            height: 39px;
            font-size: 19px;
        }

        .custom-toggler {
            font-size: 25px;
            padding: 4px 9px;
        }

        .navbar-custom .navbar-collapse {
            margin-top: 10px;
        }
    }

    @media (max-width: 360px) {
        .brand-text {
            font-size: 16px;
        }

        .brand-icon {
            width: 35px;
            height: 35px;
            font-size: 17px;
        }

        .guest-buttons {
            flex-direction: column;
        }

        .guest-buttons a {
            width: 100%;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navbar = document.getElementById('mainNavbar');

        if (!navbar || !window.bootstrap) return;

        navbar.querySelectorAll('.nav-custom-link').forEach(function (link) {
            link.addEventListener('click', function () {
                if (window.innerWidth < 992) {
                    const collapse = bootstrap.Collapse.getInstance(navbar);

                    if (collapse) {
                        collapse.hide();
                    }
                }
            });
        });

        navbar.querySelectorAll('.user-menu .dropdown-item').forEach(function (item) {
            item.addEventListener('click', function () {
                const dropdown = item.closest('.dropdown');
                const toggle = dropdown?.querySelector('[data-bs-toggle="dropdown"]');

                if (toggle) {
                    const instance = bootstrap.Dropdown.getInstance(toggle);

                    if (instance) {
                        instance.hide();
                    }
                }
            });
        });
    });
</script>
