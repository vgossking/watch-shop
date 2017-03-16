<?php
/**
 * Created by PhpStorm.
 * User: vu.vuong
 * Date: 3/16/2017
 * Time: 10:35 AM
 */

namespace App\Service;


use App\Brand;

class BrandService extends BaseService implements Service
{

    public function insert($request)
    {
        // TODO: Implement insert() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function handleRequest($request)
    {
        // TODO: Implement handleRequest() method.
    }

    public function countProducts(Brand $brand){
        $product = 0;
        if($brand->hasChildren()){
            foreach ($brand->children as $child){
                $product += $child->watches()->count();
            }
        }

        $product += $brand->watches()->count();

        return $product;
    }


}