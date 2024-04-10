<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $table = "coupon";
    public $primaryKey = "id_coupon";

    protected $fillable =["id_coupon","name_coupon","code_coupon","coupon_time","coupon_number","coupon"];
    public $timestamps = false;
}
