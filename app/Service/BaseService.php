<?php
namespace App\Service;
/**
 * Created by PhpStorm.
 * User: vu.vuong
 * Date: 3/10/2017
 * Time: 1:07 PM
 */
class BaseService
{
    protected $dao;

    public function getAllPaginate($itemPerPage = 15){
        $dao = $this->dao;
        return $dao::paginate($itemPerPage);
    }

    public function destroy($id){
        $dao = $this->dao;
        return $dao::destroy($id);
    }

}