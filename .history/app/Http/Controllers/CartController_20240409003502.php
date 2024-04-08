<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Session;
 
use Illuminate\Http\Request;

class CartController extends Controller
{
     public function addCartAjax(Request $request){
        $data = $request->all();
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get("cart");
        if($cart==true){

        }else{
            $cart[] = array(
                "session_id" => $session_id,
                "name_product"=> 
            );

        }
     }
}
