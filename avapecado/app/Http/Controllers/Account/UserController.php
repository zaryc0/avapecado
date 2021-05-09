<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        return view('pages.logIn');
    }
    public function login(Request $request)
    {

        $request->validateWithBag($request, [
            'email' =>       'required',
            'password' =>       'required',
        ]);

        $credentials = $request->only(
            'email',
            'password'
        );

        if (! Auth::attempt($credentials)) {
            return back()->withErrors([
                'userName' => 'The provided credentials do not match our records.',
            ]);
        }

        // Stops this (https://en.wikipedia.org/wiki/Session_fixation)
        $request->session()->regenerate();

        return redirect('logIn');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        // Stops this (https://en.wikipedia.org/wiki/Session_fixation)
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('logIn');
    }

    public function signUp(Request $request)
    {

        $request->validateWithBag($request, [
            'firstName' =>              'required',
            'email' =>                  'required|email|unique:users,email',
            'password' =>               'required|confirmed|min:8',
            'userName' =>               'required',
            'lastName' =>               'required',
            'DOB'=>                     'required'
        ]);

        $data = $request->only(
            'firstName',
            'email',
            'password',
            'userName',
            'lastName',
            'DOB'
        );

        $user = User::create($data);
        $user_id=$user->id;

        Auth::loginUsingId($user_id);
        return redirect('/userPage');
    }
}
