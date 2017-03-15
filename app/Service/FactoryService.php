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
    public function getUserService(){
        return new UserService();
    }

    public function getWatchService(){
        return new WatchService();
    }
}