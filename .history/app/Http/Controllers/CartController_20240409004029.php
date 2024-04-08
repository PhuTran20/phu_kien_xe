<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Session;
 
use Illuminate\Http\Request;

class CartController extends Controller
{
     public function addCartAjax(Request $request){
        $data = $request->all();
        print_r(da)
        // $session_id = substr(md5(microtime()),rand(0,26),5);
        // $cart = Session::get("cart");
        // if($cart==true){
        //     $is_avaiable = 0;
        //     foreach($cart as $key =>$val){
        //         if($val[""])
        //     }
        // }else{
        //     $cart[] = array(
        //         "session_id" => $session_id,
        //         "product_name"=>$data["cart_product_name"] ,
        //         "product_id"=>$data["cart_product_id"] ,
        //         "product_image"=>$data["cart_product_img"] ,
        //         "product_price"=>$data["cart_product_price"] ,
        //         "product_qty"=>$data["cart_product_qty"] ,
        //     );

        // }
        // Session::put("cart",$cart);
        // Session::save();
     }
}
