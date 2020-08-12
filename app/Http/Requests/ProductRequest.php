<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'classify_id' => 'required',
            'picture' => 'required',
            'pics' => 'required',
            'keywords' => 'required|max:255',
            'description' => 'required|max:255',
            'trait' => 'required',
            'parameter' => 'required',
            'name' => 'required',
            'pic' => 'required',
            'pic_list' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'title.required'=>'标题不能为空',
            'classify_id.required'=>'分类不能为空',
            'picture.required'=>'选型指南不能为空',
            'pics.required'=>'图列不能为空',
            'keywords.required'=>'关键词不能为空',
            'keywords.max'=>'关键词过长',
            'description.required'=>'描述不能为空',
            'description.max'=>'描述太长了',
            'trait.required'=>'产品特点不能为空',
            'parameter.required'=>'技术参数不能为空',
            'pic.required'=>'产品图片不能为空',
            'pic_list.required'=>'方案图不能为空',
        ];
    }
}
