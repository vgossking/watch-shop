<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use App\Http\Controllers\AdminBaseController;
use App\Http\Requests\AdminWatchRequest;
use App\Service\FactoryService;
use App\Watch;


class AdminWatchController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $service;

    public function __construct(FactoryService $factoryService)
    {
        $service = $factoryService->getWatchService();
        $this->service = $service;
    }

    public function index()
    {
        //
        $watches = $this->service->getAllPaginate(12);
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
        $watch = $this->service->insert($request);
        $this->service->syncCategory($watch, $request);

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

        $watch = $this->service->update($request,$id);

        $this->service->syncCategory($watch, $request);

        return redirect(route('watches.index'));
    }

}
