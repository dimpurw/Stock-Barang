<?php

namespace App\Http\Requests\Item;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class StorePostRequest extends FormRequest
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
            'nama_barang' => 'required',
            'unit' => 'required',
            'harga' => 'required',
        ];
    }

    public $validator = null;
    protected function failedValidation(Validator $validator)
    {
        $this->validator = $validator;
    }
}
