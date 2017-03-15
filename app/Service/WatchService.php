<?php
/**
 * Created by PhpStorm.
 * User: vu.vuong
 * Date: 3/10/2017
 * Time: 1:53 PM
 */

namespace App\Service;


use App\Http\Requests\AdminWatchRequest;
use App\Watch;

class WatchService extends BaseService implements Service
{

    protected $dao = 'App\Watch';


    public function insert($request){
        $instance = $this->dao;
        $watchData = $this->handleRequest($request);
        return $instance::create($watchData);
    }

    public function update($request, $id){
        $watchDao = $this->dao;
        $watch = $watchDao::findOrFail($id);
        $watchData = $this->handleRequest($request);
        $watch->update($watchData);
        return $watch;
    }

    public function syncCategory(Watch $watch,AdminWatchRequest $request){
        $watchCategories = $request->categories;
        if($watchCategories){
            $watch->categories()->sync($watchCategories);
        }else{
            $watch->categories()->detach();
        }
    }

    public function handleRequest($request){
        return $this->setBlankData($request->all());
    }

    private function setBlankData($watchData){
        foreach ($watchData as $key=>$value){
            if('' == $value ){
                unset($watchData[$key]);
            }
        }
        return $watchData;
    }

}