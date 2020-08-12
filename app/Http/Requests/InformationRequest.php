<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'keywords' => 'required|max:255',
            'description' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required',
            'name' => 'required',
            'pic' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'title.required'=>'标题不能为空',
            'keywords.required'=>'关键词不能为空',
            'keywords.max'=>'关键词过长',
            'description.required'=>'描述不能为空',
            'description.max'=>'描述太长了',
            'content.required'=>'内容不能为空',
            'category_id.required'=>'分类不能为空',
            'pic.required'=>'图片不能为空',
        ];
    }
}
