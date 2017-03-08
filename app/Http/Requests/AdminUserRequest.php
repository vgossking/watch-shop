<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($this->method() == 'PATCH'){
            $id = $this->segment(3);
            //check if password blank then not require password
            if($this->password == ""){
                return [
                    //
                    'first_name' =>'required',
                    'last_name' =>'required',
                    'email' =>'required|email|unique:users,email,' . $id,

                ];
            }
            else{
                return [
                    //
                    'first_name' =>'required',
                    'last_name' =>'required',
                    'email' =>'required|email|unique:users,email,' . $id,
                    'password' => 'min:6'
                ];
            }

        }
        return [
            //
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:5',
        ];
    }
}
