<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected  $table = "product";
    public $primaryKey ="id_product";
    protected $fillable =["id_product","name_product","price","descriptions","image","id_cate_product","name_bike","quantity","id_category"];
    public $timestamps = false;

    public function bike()
    {
        return $this->belongsTo(Bike::class, 'id_bike');
    }
}
