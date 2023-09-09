<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
  public function redirect()
    {
      if(Auth::id())
      {
          if(Auth::user()->usertype=='0')
          {
              
              return view('user.home');
          }
          else
          {
              return view('admin.home');
          }
      }

      else
      {
          return redirect()->back();
      }

    }
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
      $request->validate([
           'email' => 'required',
           'password' => 'required'
      ]);
      if(\Auth::attempt($request->only('email','password'))){
        return redirect('home');
      }
      return redirect('/register')->withError('Error');
    }

    public function index2()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
      $request->validate(
        [
        'email' => 'required|email',
        'name' => 'required',
        'number'=> 'required',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required'
       ]
        );
       $user = User::create([
        'name'=> $request->name,
        'phone'=> $request->number,
        'email'=>  $request->email,
        'password'=>\Hash::make($request->password)
        
      ]);
      if(\Auth::attempt($request->only('email','password'))){
        
      }
      event(new Registered($user));
      return redirect()->route('welcome');
    }

     public function home()
     {
      return view('home');
     }
     public function logout()
     {
      \Session::flush();
      \Auth::logout();
      return redirect('/login');
     }
}
