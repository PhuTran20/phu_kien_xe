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
   public function storeCoupon(Request $request){
        $data = $request->all();
        $coupon = new Coupon();
        $coupon->name_coupon = $data["name_coupon"];
        $coupon->name_coupon = $data["name_coupon"];
        $coupon->name_coupon = $data["name_coupon"];
        $coupon->name_coupon = $data["name_coupon"];
        $coupon->name_coupon = $data["name_coupon"];
   }
   public function updateCoupon(Request $request){

   }
   public function destroyCoupon(Request $request){

   }
}
