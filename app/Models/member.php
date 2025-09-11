<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    public $timestamps = false;
    // 資料表名稱
    protected $table = "users";
    // 主鍵
    protected $primaryKey = "user_id";
    //欄位
    protected $fillable = ["user_id", "Username", "Password", "Email", "Uid01", "Created_at", "Role"];
}
