<?php

namespace LaraDex\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorageTrainerRequest extends FormRequest
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
            'txtNombre'=>'required|max:10',
            'imgAvatar'=>'required|image',
            'txtSlug'=>'required'
        ];
    }
}
