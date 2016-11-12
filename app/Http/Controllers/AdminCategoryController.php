<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\CategoryFeatures;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryEditRequest;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }
    
    public function addFeature(Request $request){
        $newFeature = new CategoryFeatures;
        $newFeature->values = $request->values;
        $newFeature->name = $request->name;
        $newFeature->category_id = $request->categoryid;
        $newFeature->save();
        
        $category = Category::findOrFail($request->categoryid);
        $categoryFeatures = CategoryFeatures::where('category_id', $category->id)->get();
        foreach ($categoryFeatures as $item){ 
            $arrayValues = array();
            $obj = json_decode($item->values);
            foreach ($obj->{'value'} as $value){
                $arrayValues[$value->id] = $value->valueName;
            }
            $item['arrayValues'] = $arrayValues;
        }
        return view('admin.category.edit', compact('category','categoryFeatures'));
        //return view('admin.category.index', compact('category'));
    }
    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {       
        $newCategory = new Category;
        $newCategory->name = $request->name;
        $newCategory->description = $request->description;
        $newCategory->save();
        $category = Category::all();
        return view('admin.category.index', compact('category'));
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
        $categoryFeatures = CategoryFeatures::where('category_id', $id)->get();
        
        foreach ($categoryFeatures as $item){ 
            $arrayValues = array();
            $obj = json_decode($item->values);
            foreach ($obj->{'value'} as $value){
                $arrayValues[$value->id] = $value->valueName;
            }
            $item['arrayValues'] = $arrayValues;
        }
        
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category','categoryFeatures'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryEditRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        
        $category = Category::all();
        return view('admin.category.index', compact('category'));
        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }
}