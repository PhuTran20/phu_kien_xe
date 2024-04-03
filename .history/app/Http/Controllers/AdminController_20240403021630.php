<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
 
    public function pageLogin(){
        return view("admin.login");
    }
    public function pageHome(){
        $admin = Admin::all();
        if(!$admin){
            return view("admin.login");
        }
        return view('admin.pages.home')->with(compact("admin"));
    }
    public function login(Request $request){
        $account_admin = $request->account_admin;
        $password_admin = $request->password_admin;
        $result = DB::table("admin") ->where('account_admin',$account_admin) ->where('password_admin',$password_admin)->get();
        if(count($result )>0){
            Session::put("data",$result[0]);
            return Redirect('/admin/home');
        }else{
            return Redirect('/admin');
        }
    }
    public function logout( ){
        Session::put('data','');
        return redirect('/admin');
    }

    //Account-Admin
    public function viewIndex(){
        $account_admin = Admin::orderby("id_admin","ASC")->paginate(4);
        return view("admin.pages.Account_Admin.index")->with(compact("account_admin"));
    }
    public function viewCreate(){
        return view("admin.pages.Account_Admin.create");
    }
    public function storeAccount(Request $request){
        $data = $request->all();
        $account = new Admin();
        $account->name_admin = $data["name_admin"];
        $account->account_admin = $data["account_admin"];
        $account->password_admin = $data["password_admin"];
        $account->position = $data["position"];
        $account->save();
        return redirect("admin/account");
    }
    public function viewEdit($id_admin){
        $account = Admin::find($id_admin);
        return view("admin.pages.Account_Admin.edit")->with(compact("account"));
    }
    public function updateAccount(Request $request){
        $update = array();
        $update["name_admin"] = $request->name_admin;
        $update["account_admin"] = $request->account_admin;
        $update["password_admin"] = $request->password_admin;
        $update["position"] = $request->position;
        DB::table("admin")->where($request->id_admin,"id_admin")->update($)

    }
 
}
