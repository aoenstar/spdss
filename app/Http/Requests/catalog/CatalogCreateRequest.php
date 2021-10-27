<?php

namespace App\Http\Requests\catalog;

use Illuminate\Foundation\Http\FormRequest;

class CatalogCreateRequest extends FormRequest
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
				'name' => 'required|alpha_num',
				'description' => 'required|regex:~^[A-Za-z0-9 -():.]+$~',
				'price' => 'required|numeric',
                'company' => 'required|alpha_num',
        ];
    }
}
