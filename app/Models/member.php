<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    public $timestamps = false;
    // 資料表名稱
    protected $table = "member";
    // 主鍵
    protected $primaryKey = "user_id";
    //欄位
    protected $fillable = ["user_id", "Username", "Password", "Email", "Uid01", "Created_at", "Role"];

    public function getMember($username, $password)
    {
        $member = self::where("Username", $username)->where("Password", $password)->first();
        return $member;
    }
}
