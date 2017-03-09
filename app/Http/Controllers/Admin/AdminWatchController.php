<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use App\Http\Requests\AdminWatchRequest;
use App\Watch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class AdminWatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $watches = Watch::all();
        return view('admin.watch.index', compact('watches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $brands = Brand::pluck('name', 'id');
        $categories = Category::all();
        return view('admin.watch.create', compact('brands', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminWatchRequest $request)
    {
        //
        $watchData = $request->all();
        $watchData = $this->setBlankData($watchData);
        $watchCategories = $request->categories;


        $watch = Watch::create($watchData);
        if($watchCategories){
            $watch->categories()->sync($watchCategories);
        }

        return redirect(route('watches.index'));
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
        $watch = Watch::findOrFail($id);
        $brands = Brand::pluck('name', 'id');
        $categories = Category::all();
        return view('admin.watch.edit', compact('watch', 'brands', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminWatchRequest $request, $id)
    {
        //
        $watch = Watch::findOrFail($id);

        $watchCategories = $request->categories;
        if($watchCategories){
            $watch->categories()->sync($watchCategories);
        }else{
            $watch->categories()->detach();
        }

        $watchData = $request->all();

        $watchData = $this->setBlankData($watchData);


        $watch->update($watchData);

        return redirect(route('watches.index'));
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
        $watch = Watch::destroy($id);
        return Response::json($watch);
    }

    private function setBlankData($data){
        foreach ($data as $key=>$value){
            if('' == $value ){
                $data[$key] = null;
            }
        }
        return $data;
    }
}
