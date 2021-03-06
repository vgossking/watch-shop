<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminUserRequest;
use App\Role;
use App\Service\FactoryService;
use App\Service\ServiceContext;
use App\Service\ServiceFactory;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminBaseController;


class AdminUserController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $service;
    public function __construct(ServiceContext $service)
    {
        $service->setService(FactoryService::getUserService());
        $this->service = $service;
    }

    public function index()
    {
        //
        $users = $this->service->getAllPaginate(12);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::pluck('name', 'id');
        return view('admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUserRequest $request)
    {
        //
        $this->service->insert($request);
        return redirect(route('users.index'));
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
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id');
        return view('admin.user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUserRequest $request, $id)
    {
        //
        $this->service->update($request, $id);
        return redirect()->intended(route('users.index'));
    }

}
