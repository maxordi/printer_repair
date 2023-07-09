<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RepairsRequest extends FormRequest
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
        return[
        'brand' => 'required',
        'model' => 'required|unique:masters,contact_details',
        'client_name' => 'required|max:100|regex:/^[a-zA-Zа-яА-ЯЁё\s\-]+$/u|regex:/^([A-ZА-ЯЁ][a-zа-яё]*\s?)+$/u',
        'phone' => 'required',
        'address' => 'required',
        'note' => 'max:250|regex:/^[a-zA-Zа-яА-ЯЁё\s\-]+$/u'
    ];
    }

    public function messages()
    {
        return [
            'brand.required' => 'Поле Брэнд принтера является обязательным для заполнения',
            'model.required' => 'Поле Модель принтера является обязательным для заполнения',
            'client_name.required' => 'Поле Фамилия Имя Отчество является обязательным для заполнения',
            'client_name.max' => 'Поле Фамилия Имя Отчество  не должно быть больше 100 симовлов',
            'client_name.regex' => 'Поле Фамилия Имя Отчество можно вводить только буквы, пробелы и дефисы и первая буква каждого слова была заглавной ',
            'phone.required' => 'Поле Контактный телефон является обязательным для заполнения',
            'address.required' => 'Поле Адрес является обязательным для заполнения',
            'note.max' => 'Поле Примечание не должно превышать 250 символов',
            'note.regex' => 'Поле Примечание можно вводить только буквы, пробелы и дефисы'
        ];
    }
}
