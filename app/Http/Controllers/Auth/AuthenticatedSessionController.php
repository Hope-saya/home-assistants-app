<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();

        $userEmail = Auth::user()->email;


        if ($userEmail === 'admin@homeAid.com') {
            Alert::success('Login Success', 'Welcome Admin');
            return redirect()->route('dashboard');
        } else {
            $userRole = Auth::user()->role;
            if ($userRole === 'HH') {
                Alert::success('Login Success', 'Welcome ');
                return redirect()->route('houseAssistant');
            } else if ($userRole === 'HO') {
                Alert::success('Login Success', 'Welcome ');
                return redirect()->route('homeOwner');
            }


            // Alert::success('Login Success', 'Welcome to HomeAid');
            // return redirect()->route('home');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
