<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "category";
    public $primaryKey = "id_category";

    protected $fillable =["id_category","name_category"];
    public $timestamps = f
}
