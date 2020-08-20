<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|min:4',
            // 'tel' =>'',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Заполните Имя',
            'email.required' => 'Заполните Email',
            'email.unique' => 'Такой email уже существует',
            'email' => 'Не верный формат Email',
            'password.required' => 'Введите пароль',
            'password.required' => 'Пароль минимум 4 символа',
        ];
    }
}
