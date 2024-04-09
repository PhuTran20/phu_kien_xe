<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\Session;
 
use Illuminate\Http\Request;
session_start();
class CartController extends Controller
{
     public function addCartAjax(Request $request){
        $data = $request->all();
     
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get("cart");
   
        if(!$cart) {
            $cart = [];
        }
    
        $is_available = 0;
        foreach($cart as $val){
            if($val["id_product"]==$data["cart_product_id"]){
                $is_available++;
            }
        }
    
        if($is_available == 0){
            $cart[] = array(
                "session_id" => $session_id,
                "product_name"=>$data["cart_product_name"],
                "id_product"=>$data["cart_product_id"],
                "product_image"=>$data["cart_product_img"],
                "product_price"=>$data["cart_product_price"],
                "product_qty"=>$data["cart_product_qty"],
            );
            Session::put("cart",$cart);
        }
    
        Session::save();
    
        
     }
     public function showCart(){
  
        return view("user.pages.cart");
     }
     public function updateCart(){

     }
     public function deleteProductCart($session_id){
        // Kiểm tra session đã tồn tại và bắt đầu chưa
        if(session()->has("cart")) {
            $cart = session()->get("cart");
            
            if(!empty($cart)) {
                foreach($cart as $key => $val){
                    // Kiểm tra session_id có khớp với session_id được truyền vào không
                    if(isset($val["session_id"]) && $val["session_id"] == $session_id){
                        unset($cart[$key]);
                    }
                }
                
                // Cập nhật giỏ hàng mới vào session
                session()->put("cart", $cart);
                
                // Chuyển hướng với thông báo thành công
                return redirect()->back()->with("message","Xóa thành công!");
            }
        }
        
        // Nếu không có giỏ hàng hoặc không tìm thấy session_id, chuyển hướng với thông báo thất bại
        return redirect()->back()->with("message","Xóa thất bại!");
    }
    
    //  public function deleteProductCart($session_id){
    //     $cart = Session::get("cart");
    //     if($cart==true){
    //         foreach($cart as $key => $val){
    //             if($val["session_id"]==$session_id){
    //                 unset($cart[$key]);
    //             }
    //         }
    //         Session::put("cart",$cart);
    //         return redirect()->back()->with("message","xoa ok!");
    //     }else{
    //         return redirect()->back()->with("message","xoa that bai!");

    //     }
    //  }
}
