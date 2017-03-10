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

class UserService extends BaseService
{
    private static $instance;

    protected $dao = 'App\User';

    public static function getInstance(){
        $instance = self::$instance;
        if(!$instance){
            $instance = new UserService();
        }
        return $instance;
    }

    public function insert(AdminUserRequest $userRequest){
        $userData = $this->handleRequest($userRequest);
        User::create($userData);
    }

    public function getAll(){
        $users = User::all();
        return $users;
    }

    public function update(AdminUserRequest $userRequest, $id){
        $user = User::findOrFail($id);
        $userData = $this->handleRequest($userRequest);
        $user->update($userData);
    }
    /**
     * Handle the request of store and update
     *
     * @param  AdminUserRequest $request
     * @return array
     */
    public function handleRequest(AdminUserRequest $userRequest){
        $userData = $userRequest->all();
        $userData['password'] = bcrypt($userData['password']);
        if($userData['password'] == ''){
            $userData = $userData->except('password');
        }
        return $userData;
    }
}