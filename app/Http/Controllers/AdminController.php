<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $users = User::query()->when($request->search, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('position', 'like', "%{$search}%");
                });
            })
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.users.index', compact('users'));
    }

    public function toggleFounder(User $user)
    {
        if ($user->email === env('OWNER')) {
            return back()->withErrors([
                'founder' => 'لا يمكن تعديل حالة المؤسس الرئيسي.',
            ]);
        }

        $user->Isfounder = !$user->Isfounder;
        $user->save();

        return back()->with('success', $user->Isfounder
            ? 'تم تعيين العضو كمؤسس بنجاح.'
            : 'تم إلغاء صفة المؤسس بنجاح.');
    }

    public function updatePosition(Request $request, User $user)
    {
        abort_unless($user->account_type === 'user', 404);

        $validated = $request->validate([
            'position' => ['required', 'string', 'min:2', 'max:100'],
        ]);

        $user->update([
            'position' => $validated['position'],
        ]);

        return back()->with('success', 'تم تحديث منصب العضو بنجاح.');
    }

    public function toggleStatus(User $user)
    {
        abort_unless($user->account_type === 'user', 404);

        $user->is_active = !$user->is_active;
        $user->save();

        return back()->with(
            'success',
            $user->is_active
            ? 'تم تفعيل الحساب بنجاح.'
            : 'تم إيقاف الحساب بنجاح.'
        );
    }

    public function toggleRole(User $user)
    {
        if ($user->id === auth()->id()) {
            return back()->withErrors([
                'role' => 'مينفعش تغير نوع حسابك من هنا.',
            ]);
        }

        $user->account_type = $user->account_type === 'admin' ? 'user' : 'admin';

        if ($user->account_type === 'user' && empty($user->position)) {
            $user->position = 'عضو من الاكبادس';
        }

        $user->save();

        return back()->with('success', $user->account_type === 'admin'
            ? 'تم تحويل الحساب إلى أدمن بنجاح.'
            : 'تم تحويل الحساب إلى مستخدم عادي بنجاح.');
    }
}
