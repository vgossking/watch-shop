<?php
/**
 * Created by PhpStorm.
 * User: admin-pc
 * Date: 3/18/2017
 * Time: 10:01 AM
 */

namespace App\Service;


use App\Watch;

class ServiceContext
{
    private $service;

    public function __construct()
    {

    }

    public function setService(Service $service){
        $this->service = $service;
    }

    public function insert($request){
        return $this->service->insert($request);
    }

    public function update($request, $id){
        return $this->service->update($request, $id);
    }

    public function destroy($id){
        return $this->service->destroy($id);
    }

    public function getAllPaginate($itemPerPage){
        return $this->service->getAllPaginate($itemPerPage);
    }

    public function showBrandWithChild(){
        return $this->service->showBrandWithChild();
    }

    public function syncCategory(Watch $watch, $request){
        $this->service->syncCategory($watch, $request);
    }

    public function countProducts($brand){
        return $this->service->countProducts($brand);
    }
}