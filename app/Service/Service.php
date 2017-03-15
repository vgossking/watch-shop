<?php
namespace App\Service;
/**
 * Created by PhpStorm.
 * User: vu.vuong
 * Date: 3/15/2017
 * Time: 1:51 PM
 */
use Illuminate\Http\Request;

interface Service{

    public function insert($request);

    public function update($request, $id);

    public function handleRequest($request);
}