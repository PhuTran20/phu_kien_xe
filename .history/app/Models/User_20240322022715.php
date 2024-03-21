<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = "user";
    public $primaryKey = "id_user";
    protected $fillable = ["id_user","user_name","acccount","password","email","phone","xaid","maqh","matp"];
    public $timestamps = false;
}
