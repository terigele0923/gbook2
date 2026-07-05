<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //
    public function index()
    {
        return view('admin.login');
    }

    public function check(AdminLogin $request)
    {
        $data = $request->validated();
        $is =  Auth::guard('admin')->attempt($data);
        if($is) {
            return redirect()->route('admin.index')->with('success', 'ログイン成功');
        } else {
            return redirect()->route('admin.login')->with('error', 'ログイン失敗');
        }
    }
}
