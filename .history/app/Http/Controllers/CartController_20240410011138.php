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
        $cart = Session::get("cart");
        if($cart==true){
            
        }
     }
}
