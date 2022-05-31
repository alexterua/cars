<?php

namespace App\Http\Requests\Car;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'string|min:3|max:255|required',
            'desc' => 'string|required',
            'engine' => 'string|min:3|max:255|required',
            'fuel' => 'numeric|required',
            'price' => 'numeric|required',
            'old_owner_id' => 'numeric|required',
        ];
    }
}
