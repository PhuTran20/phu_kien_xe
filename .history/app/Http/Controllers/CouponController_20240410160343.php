<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
   public function viewIndex(){
        return view("admin.pages.Coupon.index");
    }
    public function viewCreate(){
        return view("admin.pages.Coupon.create");
        
    }
    public function viewEdit(){
       return view("admin.pages.Coupon.edit");

   }
   public function admin-store-Coupon
}
