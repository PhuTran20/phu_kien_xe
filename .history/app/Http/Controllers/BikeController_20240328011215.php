<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewIndex(Bike $bike)
    {
        $bike = Bike::orderby("id_bike",'ASC')->paginate(4);
        return view("admin.pages.Bike.index")->with(compact("bike"));
    }
    public function viewCreate()
    {
        return view("admin.pages.Bike.create");
    }
    public function viewEdit($id_bike)
    {
        $bike = Bike::find($id_bike);
        return view("admin.pages.Bike.edit")->with(compact("bike"));
    }
    public function storeCategory (Request $request){
        $data = $request->all();
        $bike = new Bike();
        $bike->name_bike = $data["name_bike"];
        $bike->save();
        return Redirect("/admin/bike");
    }
    public function updateCategory(Request $request){
      $update = array();
      $update["name_bike"] = $request->name_bike;
      DB::table("bike")->where("id_bike",$request->id_bike)->update($update);
      return Redirect("/admin/bike");
    }
    public function destroyCategory($id_bike){
        $bike = Bike::find($id_bike);
        $bike -> delete();
        return redirect("/admin/bike");
    }



    public function index()
    {
        //
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
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function show(Bike $bike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function edit(Bike $bike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bike $bike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bike $bike)
    {
        //
    }
}
