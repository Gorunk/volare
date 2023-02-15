<?php

namespace App\Http\Controllers\LoginController;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
//
    public function show()
    {
        if(Auth::check()){
            return redirect(route('dashboard'));
        }
        return view('login');
    }


    /**
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return redirect(route('login'));

        /*$credentials = $request->getCredentials();

        if(!Auth::validate($credentials)) {
            return redirect('login')->withErrors('auth.failed');
        }

        $user = Auth::guard('web')->getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return $this->authenticated($request, $user);*/
    }
    protected function authenticated(Request $request, $user)
    {
        return redirect(route('dashboard'));
    }


    public function logout(LoginRequest $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
