<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = "user";
    protected $primaryKey = "id_user";
    public $fillable = ["id_user","user_name","password","email","phone","xaid"]
}
