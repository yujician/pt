<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
  //管理者ログインフォーム表示
  public function showLoginForm() {

      return view('admin_auth.login');

  }
  //管理者ログイン処理
  public function login(Request $request) {

      $credentials = $request->only(['email', 'password']);
      $guard = $request->guard;

      if(Auth::guard($guard)->attempt($credentials)) {

          return redirect($guard .'/'); // ログインしたらリダイレクト

      }

      return back()->withErrors([
          'auth' => ['認証に失敗しました']
      ]);
  }
  //管理者ログアウト処理
  public function logout(Request $request){

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      return redirect('/');
   }
}
