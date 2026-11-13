<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الاكبادس | EL ACBADS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Cairo', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: #f7f7f6;
            color: #292929;
        }

        .page-content {
            flex: 1;
            padding: 45px 0;
        }

        .admin-header {
            background: #292929;
            color: #fff;
            border-radius: 18px;
            padding: 30px;
            margin-bottom: 25px;
        }

        .admin-header h1 {
            font-size: 25px;
            font-weight: 900;
            margin-bottom: 8px;
        }

        .admin-header p {
            color: #c5c5c5;
            font-size: 13px;
            margin: 0;
        }

        .admin-icon {
            width: 55px;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #403c34;
            color: #c4b596;
            border-radius: 14px;
            font-size: 25px;
            flex-shrink: 0;
        }

        .users-panel {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 16px;
            padding: 22px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .025);
        }

        .panel-title {
            font-size: 17px;
            font-weight: 900;
            margin-bottom: 18px;
        }

        .search-input {
            min-height: 45px;
            border: 1px solid #e8e8e8;
            border-radius: 10px;
            font-size: 13px;
        }

        .search-input:focus,
        .position-input:focus {
            border-color: #a99570;
            box-shadow: 0 0 0 3px rgba(169, 149, 112, .12);
        }

        .user-card {
            border: 1px solid #eee;
            border-radius: 13px;
            padding: 18px;
            margin-bottom: 14px;
            transition: .2s;
        }

        .user-card:hover {
            border-color: #ded4c1;
            box-shadow: 0 5px 18px rgba(0, 0, 0, .035);
        }

        .user-card:last-child {
            margin-bottom: 0;
        }

        .user-avatar {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border-radius: 13px;
            background: #292929;
            color: #c4b596;
            font-size: 20px;
            font-weight: 900;
            overflow: hidden;
        }

        .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-name {
            font-size: 14px;
            font-weight: 900;
            margin-bottom: 3px;
        }

        .user-email {
            color: #999;
            font-size: 11px;
            overflow-wrap: anywhere;
        }

        .user-details {
            color: #777;
            font-size: 11px;
            margin-top: 10px;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 800;
        }

        .status-active {
            background: #eaf7ee;
            color: #27834a;
        }

        .status-disabled {
            background: #fff0f0;
            color: #bd4444;
        }

        .role-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 800;
            background: #f1eee8;
            color: #79694c;
        }

        .position-form {
            display: flex;
            gap: 8px;
            width: 100%;
        }

        .position-input {
            min-width: 0;
            min-height: 39px;
            border: 1px solid #e8e8e8;
            border-radius: 8px;
            font-size: 12px;
        }

        .btn-save-position {
            border: 0;
            border-radius: 8px;
            background: #292929;
            color: #fff;
            padding: 8px 13px;
            font-size: 11px;
            font-weight: 800;
            white-space: nowrap;
        }

        .btn-save-position:hover {
            background: #9a8765;
            color: #fff;
        }

        .btn-status,
        .btn-role {
            border: 0;
            border-radius: 8px;
            padding: 9px 13px;
            font-size: 11px;
            font-weight: 800;
            white-space: nowrap;
            width: 100%;
        }

        .btn-disable {
            background: #fff0f0;
            color: #b54747;
        }

        .btn-disable:hover {
            background: #b54747;
            color: #fff;
        }

        .btn-enable {
            background: #eaf7ee;
            color: #27834a;
        }

        .btn-enable:hover {
            background: #27834a;
            color: #fff;
        }

        .btn-role-admin {
            background: #f1eee8;
            color: #79694c;
        }

        .btn-role-admin:hover {
            background: #79694c;
            color: #fff;
        }

        .btn-role-user {
            background: #292929;
            color: #fff;
        }

        .btn-role-user:hover {
            background: #555;
            color: #fff;
        }

        .owner-label {
            font-size: 11px;
            font-weight: 800;
            color: #79694c;
            background: #f1eee8;
            padding: 9px 12px;
            border-radius: 8px;
            text-align: center;
        }

        .empty-state {
            padding: 45px 15px;
            text-align: center;
            color: #999;
        }

        .empty-state i {
            font-size: 35px;
            display: block;
            margin-bottom: 12px;
        }

        .pagination {
            margin-top: 22px;
            justify-content: center;
        }

        .page-link {
            color: #292929;
            border-color: #eee;
            font-size: 12px;
        }

        .page-item.active .page-link {
            background: #292929;
            border-color: #292929;
        }

        @media (max-width: 767.98px) {
            .page-content {
                padding: 25px 0;
            }

            .admin-header {
                padding: 22px;
            }

            .admin-header h1 {
                font-size: 21px;
            }

            .users-panel {
                padding: 15px;
            }

            .user-card {
                padding: 14px;
            }

            .user-card-top {
                align-items: flex-start !important;
            }

            .user-actions {
                width: 100%;
            }

            .user-actions form {
                width: 100%;
            }
        }

        @media (max-width: 400px) {
            .position-form {
                flex-direction: column;
            }

            .btn-save-position {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <x-navbar />

    <main class="page-content">
        <div class="container">

            <div class="admin-header">
                <div class="d-flex align-items-center gap-3">
                    <div class="admin-icon">
                        <i class="bi bi-shield-lock-fill"></i>
                    </div>

                    <div>
                        <h1>إدارة الاكبادس</h1>
                        <p>من هنا تقدر تتحكم في حسابات الاعضاء </p>
                    </div>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success border-0 small">
                    <i class="bi bi-check-circle-fill ms-1"></i>
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger border-0 small">
                    {{ $errors->first() }}
                </div>
            @endif

            <div class="users-panel">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-3">
                    <h2 class="panel-title mb-0">حسابات المستخدمين</h2>

                    <span class="text-muted small">
                        عدد النتائج: {{ $users->total() }}
                    </span>
                </div>

                <form action="{{ route('admin.users.index') }}" method="GET" class="mb-4">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control search-input"
                            placeholder="ابحث بالاسم او البريد او المنصب..." value="{{ request('search') }}">
                        <button class="btn btn-dark px-4" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>

                @forelse($users as $user)
                    <div class="user-card">

                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 user-card-top">
                            <div class="d-flex align-items-center gap-3">
                                <div class="user-avatar">
                                    @if($user->profile_image)
                                        <img src="{{ asset('storage/' . $user->profile_image) }}" alt="{{ $user->name }}">
                                    @else
                                        {{ mb_substr($user->name, 0, 1) }}
                                    @endif
                                </div>

                                <div>
                                    <div class="user-name">{{ $user->name }}</div>
                                    <div class="user-email">{{ $user->email }}</div>

                                    <div class="user-details">
                                        <span class="ms-2">
                                            <i class="bi bi-geo-alt"></i>
                                            {{ $user->governorate ?? 'غير محدد' }}
                                        </span>

                                        <span>
                                            <i class="bi bi-calendar3"></i>
                                            {{ $user->created_at->format('Y/m/d') }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap gap-2">
                                <span class="status-badge {{ $user->is_active ? 'status-active' : 'status-disabled' }}">
                                    <i class="bi {{ $user->is_active ? 'bi-check-circle-fill' : 'bi-lock-fill' }}"></i>
                                    {{ $user->is_active ? 'الحساب نشط' : 'الحساب مقفول' }}
                                </span>

                                <span class="role-badge">
                                    <i class="bi bi-shield"></i>
                                    {{ $user->account_type === 'admin' ? 'أدمن' : 'مستخدم عادي' }}
                                </span>

                                @if($user->Isfounder)
                                    <span class="role-badge">
                                        <i class="bi bi-star-fill"></i>
                                        مؤسس
                                    </span>
                                @endif
                            </div>
                        </div>

                        @if($user->email !== env('OWNER'))
                            <div class="row g-3 align-items-end mt-2">

                                <div class="col-lg-6">
                                    <label class="form-label small fw-bold">منصب العضو</label>

                                    <form action="{{ route('admin.users.position', $user->id) }}" method="POST" class="position-form">
                                        @csrf
                                        @method('PUT')

                                        <input type="text" name="position" class="form-control position-input"
                                            value="{{ old('position', $user->position) }}" required maxlength="100">

                                        <button type="submit" class="btn-save-position">
                                            <i class="bi bi-pencil-square"></i>
                                            حفظ المنصب
                                        </button>
                                    </form>
                                </div>

                                <div class="col-lg-2 col-md-4 user-actions">
                                    <form action="{{ route('admin.users.toggle-role', $user->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')

                                        <button type="submit"
                                            class="btn-role {{ $user->account_type === 'admin' ? 'btn-role-admin' : 'btn-role-user' }}">
                                            <i class="bi bi-shield-lock"></i>
                                            {{ $user->account_type === 'admin' ? 'إلغاء الأدمن' : 'تعيين أدمن' }}
                                        </button>
                                    </form>
                                </div>

                                <div class="col-lg-2 col-md-4 user-actions">
                                    <form action="{{ route('admin.users.toggle-founder', $user->id) }}" method="POST" >
                                        @csrf
                                        @method('PATCH')

                                        <button type="submit" class="btn-status {{ $user->Isfounder ? 'btn-disable' : 'btn-enable' }}">
                                            <i class="bi bi-star-fill"></i>
                                            {{ $user->Isfounder ? 'إلغاء المؤسس' : 'تعيين مؤسس' }}
                                        </button>
                                    </form>
                                </div>

                                <div class="col-lg-2 col-md-4 user-actions">
                                    <form action="{{ route('admin.users.toggle-status', $user->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')

                                        <button type="submit" class="btn-status {{ $user->is_active ? 'btn-disable' : 'btn-enable' }}">
                                            <i class="bi {{ $user->is_active ? 'bi-lock-fill' : 'bi-unlock-fill' }}"></i>
                                            {{ $user->is_active ? 'قفل الحساب' : 'تفعيل الحساب' }}
                                        </button>
                                    </form>
                                </div>

                            </div>
                        @else
                            <div class="owner-label mt-3">
                                <i class="bi bi-shield-fill-check"></i>
                                الادمن الاساسي
                            </div>
                        @endif

                    </div>
                @empty
                    <div class="empty-state">
                        <i class="bi bi-people"></i>
                        <div>مفيش مستخدمين مطابقين للبحث.</div>
                    </div>
                @endforelse


                <div class="d-flex justify-content-center mt-4">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </main>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
