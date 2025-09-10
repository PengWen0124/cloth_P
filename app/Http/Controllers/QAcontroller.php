<?php

namespace App\Http\Controllers;

use App\Models\Qa;
use Illuminate\Http\Request;

class QAcontroller extends Controller
{
    public function list()
    {
        $list = Qa::get();
        return view("front.qa", compact("list"));
    }
}
