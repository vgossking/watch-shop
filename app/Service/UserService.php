<?php
namespace App\Service;
/**
 * Created by PhpStorm.
 * User: vu.vuong
 * Date: 3/10/2017
 * Time: 1:06 PM
 */
use App\User;
use App\Http\Requests\AdminUserRequest;

class UserService extends BaseService implements Service
{

    protected $dao = 'App\User';



    public function insert($userRequest){
        $dao = $this->dao;
        $userData = $this->handleRequest($userRequest);
        $dao::create($userData);
    }

    public function update($userRequest, $id){
        $dao = $this->dao;
        $user = $dao::findOrFail($id);
        $userData = $this->handleRequest($userRequest);
        $user->update($userData);
    }
    /**
     * Handle the request of store and update
     *
     * @param  AdminUserRequest $request
     * @return array
     */
    public function handleRequest($userRequest){
        $userData = $userRequest->all();
        $userData['password'] = bcrypt($userData['password']);
        if($userData['password'] == ''){
            $userData = $userData->except('password');
        }
        return $userData;
    }
}