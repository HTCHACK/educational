<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            'fullname',
            'facebook',
            'telegram',
            'profession',
            'image' => 'required|mimes:png,jpg,jpeg,webp,gif,svg,mp4|max:2048',
        ];
    }
}
