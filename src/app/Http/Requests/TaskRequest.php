<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            //
            'name' => 'required|max:30',
            'content' => 'required',
        ];
    }
    /**
     * エラーメッセージ
     */
    public function messages()
    {
        return [
            'name.required' => 'タスクは必須です',
            'name.max' => 'タスクは30文字以内で入力してください',
            'content.required' => 'タスク内容は必須です',
        ];
    }
}
