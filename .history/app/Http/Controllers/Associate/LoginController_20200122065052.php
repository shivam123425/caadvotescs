<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:associate', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
        return view('associate.associatelogin');
    }

    public function verification()
    {
        return view('associate.verification');
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      // Attempt to log the user in
      if (Auth::guard('associate')->attempt(['email' => $request->email, 'password' => $request->password, 'accounttype' => 'approved'], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('associate.index'));
      }

      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('associate')->logout();
        return redirect('/');
    }
}
