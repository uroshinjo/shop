<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShopSettings;

class ShopSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(ShopSettings::count() <= 0){
            $newSetting = new ShopSettings;
            $newSetting->save();
        }
        $settings = ShopSettings::all();
        return view('admin.shopSettings.index', compact('settings'));
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
        ShopSettings::truncate();
        $newSettings = new ShopSettings;
        $newSettings->name = $request->name;
        $newSettings->adress = $request->adress;
        $newSettings->phone = $request->phone;
        $newSettings->description = $request->description;
        $newSettings->facebook = $request->facebook;
        $newSettings->save();
        //
        
        $settings = ShopSettings::all();
        return view('admin.shopSettings.index', compact('settings'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
