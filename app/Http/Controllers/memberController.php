<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class memberController extends Controller
{
    public function list()
    {
        $list = member::get();
        return view("admin.member", compact("list"));
    }

    public function add()
    {

        return view("admin.add_member");
    }

    public function showLogin()
    {
        return view('front.login');
    }

    public function login(Request $req)
    {
        $username = $req->username;
        $password = $req->password;


        $member = (new member())->getMember($username, $password);

        if (empty($member)) {
            return back()->withInput()->withErrors(["err" => "帳號或密碼錯誤"]);
            exit;
        }

        session()->put("memberId", $username);
        return redirect("/member/orders"); //登入成功導向這路由
    }

    public function orders()
    {
        return view('front.neworders');
    }
}
