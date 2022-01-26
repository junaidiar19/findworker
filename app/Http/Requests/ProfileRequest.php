<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'username' => 'required|unique:workers,id,' . auth()->id(),
            'name' => 'required',
            'expertise' => 'required',
            'service_id' => 'required',
            'phone' => 'required|unique:workers,id,' . auth()->id(),
            'provinsi_id' => 'required',
            'kota_id' => 'required',
            'about' => 'required|max:200',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A fullname is required',
            'provinsi_id.required' => 'A province is required',
            'kota_id.required' => 'A city is required',
            'service_id.required' => 'A Specialist is required',
        ];
    }
}
