<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view("Auth.Login");
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $remember = $request->boolean('remember');


        if (Auth::attempt($credentials, $remember)) {
            if (!auth()->user()->is_active) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return back()
                    ->with([
                        'error' => 'الحساب تم إيقافه بواسطة الإدارة.',
                    ]);
            }

            $request->session()->regenerate();

            return redirect()->intended(route('home'))
                ->with('success', 'نورت الاكبادس يا كبدس 😂');
        }


        return back()
            ->withErrors([
                'email' => 'البريد الالكتروني او كلمة المرور غير صحيحة.',
            ])
            ->onlyInput('email');
    }


}
