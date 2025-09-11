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
}
