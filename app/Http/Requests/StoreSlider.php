<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSlider extends FormRequest
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
            'slider_title' => 'required',
            'slider_title_en' => 'required',
            'desc'=>'required',
        ];
    }


    public function messages()
    {
        return [
            'slider_title.required' => trans('validation.required'),
            'slider_title.unique' => trans('validation.unique'),
            'slider_title_en.required' => trans('validation.required'),
            'slider_tilte_en.unique' => trans('validation.unique'),
            'slider_title_en.regex' => trans('site.required_en'),
            'slider_title.regex' => trans('site.required_ar'),
            'desc.required'=>trans('site.desc_required'),
        ];
    }
}
