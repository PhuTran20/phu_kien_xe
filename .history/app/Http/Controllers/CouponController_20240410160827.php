<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
   public function viewIndex(){
        $coupon = Coupon
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
        $coupon->code_coupon = $data["code_coupon"];
        $coupon->coupon_time = $data["coupon_time"];
        $coupon->coupon_number = $data["coupon_number"];
        $coupon->coupon_condition = $data["coupon_condition"];
        $coupon->save();
        return redirect("/admin/coupon");
   }
   public function updateCoupon(Request $request){

   }
   public function destroyCoupon(Request $request){

   }
}
