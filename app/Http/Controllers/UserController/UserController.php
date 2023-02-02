<?php
/*
namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|RedirectResponse|Redirector
     *
    public function index()
    {
        return view('welcome');
    }
    //
    public function show(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|RedirectResponse|Application
    {
        if(Auth::check()){
            return redirect()->route('dashboard');
        }
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)) {
            dd('error');
            return redirect()->to('login')->withErrors(trans('auth.failed'));
        }
        $user = Auth::guard('web')->getProvider()->retrieveByCredentials($credentials);


        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('home.index');
    }
}*/
