<?php

namespace App\Http\Controllers;

use App\Models\orders;
use Illuminate\Http\Request;

class ordersController extends Controller
{
    public function list()
    {
        // 取得所有商品資料
        $list = orders::get();
        
        return view('admin.orders', compact('list'));
    }

    public function add()
    {
        return view('admin.add_orders');
    }
}
