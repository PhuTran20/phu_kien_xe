<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected  $table = "product";
    public $primaryKey ="id_product";
    protected $fillable =["id_product","name_product","price","descriptions","image","id_cate_product"];
    public $timestamps = false;

}
