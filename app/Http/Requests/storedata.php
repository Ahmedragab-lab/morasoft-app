<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class storedata extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            // 'email' => 'required|email|unique:users,email',
            // 'email' => 'required|email|unique:users,email,'.$this->user->id,
            // 'email' => ['required',Rule::unique('users')->ignore($this->user()->id)],
            'email' => ['required', Rule::unique('users')->ignore($this->user)],
            // 'password' => 'required|same:confirm-password',
            // 'password' => ['required',
            //    'min:6',
            //    'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            //    'confirmed'],
            //    'password_confirm' => 'required|same:password',
            'image' => 'image',
            'status' => 'required|in:active,unactive',
        ];
    }
    public function messages()
    {
        return [
            // 'serve_name.required' => trans('validation.required'),
            // 'serve_name.unique' => trans('validation.unique'),
            // 'serve_name_en.required' => trans('validation.required'),
            // 'serve_name_en.unique' => trans('validation.unique'),
            // 'serve_name_en.regex' => trans('site.required_en'),
            // 'serve_name.regex' => trans('site.required_ar'),
            // 'desc.required'=>trans('site.desc_required'),
        ];
    }
}
