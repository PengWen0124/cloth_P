<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commodityController extends Controller
{
    public function list()
    {
        
        return view("front.commodity");
    }
}
