<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreUserRequest extends Request
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
        return [
            'name'=>'required',
            'email' => 'required|email|unique:users',
            'password'=>'required',
            'gender'=>'required',
            'birth_date'=>'required',
            'buildingnumber'=>'required',
            'street'=>'required',
            'city'=>'required',
            'country'=>'required',
            'role_id'=>'required'
        ];
    }
}
