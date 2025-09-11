<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    // 資料表名稱
    protected $table = "product";
    // 主鍵
    protected $primaryKey = "product_id";
    //欄位
    protected $fillable = ["product_id", "Pname", "photo", "price", "description", "category", "created_at"];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
