<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestoreRequest extends FormRequest
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
        'printer' => 'required',
        'client' => 'required',
        'master' => 'required',
        'repairStatus' => 'required',
        'price' => 'required|integer',
        'competion_date' => 'required',
        'description' => 'max:250|regex:/^[a-zA-Zа-яА-ЯЁё\s\-]+$/u'
    ];
    }

    public function messages()
    {
        return [
            'printer.required' => 'Поле Принтер является обязательным для заполнения',
            'client.required' => 'Поле Клиент является обязательным для заполнения',
            'master.required' => 'Поле Мастер является обязательным для заполнения',
            'repairStatus.required' => 'Поле Статус ремонта является обязательным для заполнения',
            'price.required' => 'Поле Стоимость ремонта является обязательным для заполнения',
            'competion_date.required' => 'Поле Дата ремонта является обязательным для заполнения',
            'description.max' => 'Поле Описание проблемы не должно превышать 250 символов',
            'description.regex' => 'Поле Описание проблемы вводить только буквы, пробелы и дефисы'
        ];
    }
}
