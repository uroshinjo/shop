<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;
use App\Http\Requests\ThemeCreateRequest;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $themes = Theme::all();
        return view('admin.theme.index', compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.theme.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThemeCreateRequest $request)
    {
        $newTheme = new Theme;
        $newTheme->name = $request->name;
        $newTheme->backgroundColor = $request->pageBackground;
        
        $newTheme->textColor = $request->pageText;
        $newTheme->menuColor = $request->menuBackground;
        $newTheme->menuTextColor = $request->menuText;
        $newTheme->save();
        
        $themes = Theme::all();
        return view('admin.theme.index', compact('themes'));
    }
    
    public function setActiveTheme(Request $request, $id){
        Theme::query()->update(['active' => 0]);
        $theme = Theme::findOrFail($id);
        $theme->active = 1;
        $theme->save();
        $themes = Theme::all();
        return view('admin.theme.index', compact('themes'));
        
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
        $themForDestroy = Theme::findOrFail($id);
        $themForDestroy->delete();
        
        $themes = Theme::all();
        return view('admin.theme.index', compact('themes'));
    }
}
