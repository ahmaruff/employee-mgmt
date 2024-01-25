<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        $data =[
            'title' => 'Login | Employee Mgmt'
        ];
        return view('admin.auth.login', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoginRequest $loginRequest): RedirectResponse
    {
        $loginRequest->authenticate();

        $loginRequest->session()->regenerate();

        if(Auth::user()){
            return redirect()->route('admin.dashboard');
        } else {
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login')->with('error', 'You are not authorized!');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request) : RedirectResponse
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
