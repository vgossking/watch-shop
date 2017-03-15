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

    public function getService($type){
        switch ($type){
            case 'user' :
                return new UserService();
            case 'watch' :
                return new WatchService();
        }
    }
}