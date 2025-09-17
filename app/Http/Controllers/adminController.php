<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use App\Models\member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    // 顯示登入頁
    public function showLogin()
    {
        return view('admin.Backstage_login');
    }

    public function login(Request $req)
    {
        $username = $req->username;
        $password = $req->password;
        //$code = $req->code;


        $manager = (new Manager())->getManager($username, $password);
        
        if (empty($manager)) {
            return back()->withInput()->withErrors(["err" => "帳號或密碼錯誤"]);
            exit;
        }

        session()->put("managerId", $username);
        return redirect("/myadmin/home"); //登入成功導向這路由
    }

    public function home()
    {
        //登入成功導到這個網頁
        return view("admin.Backstage");
    }

    public function info()
    {
        $nowLogin = session('managerId'); // 取得名字
        return view("admin.Manager", compact("nowLogin"));
    }

    public function setting()
    {
        $list = member::get();
        return view("admin.Manager_setting", compact("list"));
    }

    public function logout()
    {
        session()->forget("managerId"); // 清除登入紀錄
        return redirect("/");    // 回到首頁
    }
}
