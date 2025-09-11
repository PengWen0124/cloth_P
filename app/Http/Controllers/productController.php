<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // 你的商品 Model

class ProductController extends Controller
{
    public function list()
    {
        // 取得所有商品資料
        $list = Product::get();

        return view('admin.product', compact('list'));
    }

    public function add()
    {
        return view('admin.add_product');
    }
}
