<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qa extends Model
{
    //不要用Laravel 預設的時間欄位
    public $timestamps = false;
    // 資料表名稱
    protected $table = "qa";
    // 主鍵
    protected $primaryKey = "id";
    //欄位
    protected $fillable = ["id","title", "content", "createTime"];
}
