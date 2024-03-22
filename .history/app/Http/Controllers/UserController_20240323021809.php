<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function viewLogin(){
        return view("user.pages.login");
    }
    public function viewRegister(){
        return view("user.pages.register");
    }
    public function viewUser(){
        return view("user.pages.user");
    }
    public function login(Request $request){
        $acccount = $request->account;
        $password = $request->password;
        $result = DB::table("user")->where("acccount",$acccount)->where("password",$password)->get();
        if(count($result)>0){
            Session::put("data_user",$result[0]);
            return redirect("/");
        }else{
            return redirect("/user/login");
        }
    }
    public function register(Request $request){
        $data = $request->all();
        $user = new User();
        $user->user_name = $data['user_name'];
        $user->acccount = $data['acccount'];
        $user->password = $data['password'];
        $user->phone = $data['phone'];
        $user->save();
        return redirect("/user/login");
    }
    public function logout(Request $request){
        Session::put("data_user","");
        return redirect("/");
    }
    public function infoUser(Request $request){
        $user = DB::table("user")->where("id_user",$request->id_user)->first();
        return redirect("/user/{id_user}")->with(com)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
