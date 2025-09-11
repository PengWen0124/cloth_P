<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    public $timestamps = false;
    // 資料表名稱
    protected $table = "orders";
    // 主鍵
    protected $primaryKey = "id";
    //欄位
    protected $fillable = ["id", "product_id", "amount", "note", "createdTime"];
}
