<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Throwable;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(Request $request)
    {
        if ($request->has('error')) {
            return redirect()->route('login')
                ->withErrors(['email' => 'تم إلغاء تسجيل الدخول بجوجل.']);
        }

        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (Throwable $e) {
            report($e);

            return redirect()->route('login')
                ->withErrors(['email' => 'حصلت مشكلة أثناء تسجيل الدخول بجوجل. حاول مرة تانية.']);
        }

        $email = $googleUser->getEmail();
        $googleId = (string) $googleUser->getId();

        $emailVerified = filter_var(
            data_get($googleUser->user, 'email_verified', false),
            FILTER_VALIDATE_BOOLEAN
        );

        if (!$email || !$emailVerified) {
            return redirect()->route('login')
                ->withErrors(['email' => 'لازم تستخدم حساب جوجل ببريد إلكتروني مؤكد.']);
        }

        $user = User::where('google_id', $googleId)->first();

        if (!$user) {
            $user = User::where('email', $email)->first();
        }

        if ($user && $user->google_id && $user->google_id !== $googleId) {
            return redirect()->route('login')
                ->withErrors(['email' => 'هذا البريد مرتبط بحساب جوجل آخر.']);
        }

        if ($user && !$user->is_active) {
            return redirect()->route('login')
                ->withErrors(['email' => 'حسابك موقوف حاليا، تواصل مع الإدارة.']);
        }

        if (!$user) {
            $user = new User();

            $user->forceFill([
                'name' => $googleUser->getName() ?: 'عضو جديد',
                'email' => $email,
                'google_id' => $googleId,
                'password' => Hash::make(Str::random(64)),
                'email_verified_at' => now(),
                'account_type' => 'user',
                'position' => 'عضو من الاكبادس',
                'likes_count' => 0,
                'Isfounder' => false,
                'is_active' => true,
            ]);

            $user->save();
        } else {
            $user->forceFill([
                'google_id' => $googleId,
                'email_verified_at' => $user->email_verified_at ?: now(),
            ])->save();
        }

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->intended('/');
    }
}
