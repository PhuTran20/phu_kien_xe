<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $table = "coupon";
    public $primaryKey = "id_category";

    protected $fillable =["id_category","name_category"];
    public $timestamps = false;
}
