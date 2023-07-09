<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MasterRequest extends FormRequest
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
            'full_name' => 'required|max:100|unique:masters,full_name|regex:/^[a-zA-Zа-яА-ЯЁё\s\-]+$/u||regex:/^([A-ZА-ЯЁ][a-zа-яё]*\s?)+$/u ',
            'contact_details' => 'required|unique:masters,contact_details',
            'specialty' => 'required',
            'experience' => 'required|integer|min:0|max:50',
            'note' => 'max:250'
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => 'Поле Фамилия Имя Отчество является обязательным для заполнения',
            'full_name.unique' => 'Поле Фамилия Имя Отчество должно быть уникальным',
            'full_name.max' => 'Поле Фамилия Имя Отчество  не должно быть больше 100 симовлов',
            'full_name.regex' => 'Поле Фамилия Имя Отчество можно вводить только буквы, пробелы и дефисы и первая буква каждого слова была заглавной ',
            'contact_details.required' => 'Поле Контактные данные является обязательным для заполнения',
            'contact_details.unique' => 'Поле Контактные данные должно быть уникальным',
            'issue_description.max' => 'Поле Примечание не должно превышать 250 символов'
        ];
    }
}
