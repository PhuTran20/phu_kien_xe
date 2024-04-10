<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Coupon;
use Illuminate\Support\Facades\Session;
 
use Illuminate\Http\Request;
session_start();
class CartController extends Controller
{
    //CART
    public function addCartAjax(Request $request){
        $data = $request->all();
     
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get("cart");
    
        if(!$cart) {
            $cart = [];
        }
    
        $is_available = false;
        foreach($cart as &$item){
            if($item["id_product"] == $data["cart_product_id"]){
                $item["product_qty"]++; // Tăng số lượng lên 1 nếu sản phẩm đã tồn tại trong giỏ hàng
                $is_available = true;
                break;
            }
        }
    
        if(!$is_available){
            $cart[] = array(
                "session_id" => $session_id,
                "product_name" => $data["cart_product_name"],
                "id_product" => $data["cart_product_id"],
                "product_image" => $data["cart_product_img"],
                "product_price" => $data["cart_product_price"],
                "product_qty" => $data["cart_product_qty"],
            );
        }
    
        Session::put("cart", $cart);
        Session::save();
    }
    
     public function showCart(Request $request){
        // $data = $request->all();
        // dd($data["cart_qty"]);
        return view("user.pages.cart");
     }
     public function updateCart(Request $request){
        $data = $request->all();
       
        $cart = Session::get("cart");
        if($cart==true){
            foreach($data["cart_qty"] as $key =>$qty){
                  foreach($cart as $session =>$val){
                    if($val["session_id"]==$key){
                        $cart[$session]["product_qty"] = $qty;
                    }
                  }
            }
            Session::put("cart",$cart);
            return redirect()->back();
        }
     }
     public function deleteProductCart($session_id){
        $cart = Session::get("cart");
    
        if($cart==true){
            //$key tra vể  thứ tự mảng 
            foreach($cart as $key =>  $val){
                if($val["session_id"]==$session_id){
                    unset($cart[$key]);
                }
            }
            Session::put("cart",$cart);
            return redirect()->back()->with("message","xoa ok!");
        }else{
            return redirect()->back()->with("message","xoa that bai!");

        }
     }
     //COUPON
     public function checkCoupon(Request $request){
        $data = $request->all();
        $coupon = Coupon::where("code_coupon",$data["coupon"])->first();
        if($coupon){
            $count_coupon = $coupon->count();
            if($count_coupon >0){
             
                $coupon_session = Session::get("coupon");

             
                }else{
                    if($coupon_session ==true){
                        $is_available =0;
                        if($is_available ==0){
                            $cou[] = array(
                                "code_coupon" => $coupon->code_coupon,
                                "coupon_condition" => $coupon->coupon_condition,
                                "coupon_number" => $coupon->coupon_number,

                            );
                            Session::put("coupon",$cou);
                        }
                }else{
                    $cou[] = array(
                        "code_coupon" => $coupon->code_coupon,
                        "coupon_condition" => $coupon->coupon_condition,
                        "coupon_number" => $coupon->coupon_number,

                    );
                    Session::put("coupon",$cou);
                }
                Session::save();
                return redirect()->back()->with("message","Add discount code successfully");
                }
            }
        }else{
            return redirect()->back()->with("error","Adding discount code failed");
        }
     }
}
