<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = "admin";
    // public $primaryKey = "id_admin";
    // protected $fillable = ["id_admin",'account_admin',"password","name_admin","position"];
    // public $timestamps = false;

}
