<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
     public function addCartAjax(Request $request){
        $data = $request->all();
        $session_id = substr(md5(microtime()),rand())
     }
}
