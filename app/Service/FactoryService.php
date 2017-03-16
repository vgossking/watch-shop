<?php
/**
 * Created by PhpStorm.
 * User: vu.vuong
 * Date: 3/15/2017
 * Time: 2:00 PM
 */

namespace App\Service;



class FactoryService
{
    public static function getUserService(){
        return new UserService();
    }

    public static function getWatchService(){
        return new WatchService();
    }

    public static function getBrandService(){
        return new BrandService();
    }
}