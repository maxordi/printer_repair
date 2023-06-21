<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRepairRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'description'=>'required|max:250'
        ];
    }

    public function messages()
    {
        return [
            'description.required'=>'Поле описание является обязательным',
            'description.max' => 'Поле описание не должно быть длинее :max симвалов'
        ];
    }
}
