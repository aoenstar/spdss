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
                'company' => 'required| regex:~^[a-zA-Z0-9 ]+$~',
				'name' => 'required| regex:~^[a-zA-Z0-9 ]+$~',
				'description' => 'required|regex:~^[a-zA-Z0-9 ()-:.,/]+$~',
				'price' => 'required|numeric',
                'sale_type' => 'required|regex:~^[a-zA-Z]+$~',
                'type' => 'required|not_in:0',
        ];
    }
}
