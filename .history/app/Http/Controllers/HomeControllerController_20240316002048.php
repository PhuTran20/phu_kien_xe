<?php

namespace App\Http\Controllers;

use App\Models\HomeController;
use Illuminate\Http\Request;

class HomeControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages')
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
     * @param  \App\Models\HomeController  $homeController
     * @return \Illuminate\Http\Response
     */
    public function show(HomeController $homeController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeController  $homeController
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeController $homeController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeController  $homeController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeController $homeController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeController  $homeController
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeController $homeController)
    {
        //
    }
}
