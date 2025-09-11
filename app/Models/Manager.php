<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public $timestamps = false;
    protected $table = "manager";
    protected $primaryKey = "id";
    protected $fillable = ["id", "username","password","Uid01", "Created_at"];

    public function getManager($username, $password)
    {
        $manager = self::where("username", $username)->where("password", $password)->first();
        return $manager;
    }
}
