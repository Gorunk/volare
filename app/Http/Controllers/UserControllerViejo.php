<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserControllerViejo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexV()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createV()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeV(Request $request)
    {
        /*  Esto es basicamente un register
            $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = new User();

        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user)

        return redirect(route('dashboard'));*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showV($id)
    {
        return view('auth.login');
    }

    public function loginV(LoginRequest $request) {
        /*$credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }*/

        /*$credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        if(Auth::attempt($credentials)) {

            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));

        } else {
            return redirect(route('welcome'));
        }*/

        $credentials = $request->getCredentials();

        if(Auth::validate($credentials)) {
            return redirect()->to('/dashboard')->withErrors('auth.failed');
        }
        $user = Auth::guard('web')->getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    public function authenticatedV(Request $request, $user) {
        return redirect('/dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editV($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateV(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function logoutV(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('welcome'));
    }

    public function destroyV($id)
    {
        //
    }
}
