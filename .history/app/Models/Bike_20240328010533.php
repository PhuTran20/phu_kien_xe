<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;
    protected $table ="bike";
    public $primaryKey ="id_bike";
    protected  $fillable =["id_bike","name_bike"];
    public $timestamps = fa
}
