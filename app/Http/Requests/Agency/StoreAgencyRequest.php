<?php

namespace App\Http\Requests\Agency;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgencyRequest extends FormRequest
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
            'code' => 'required|unique:agencies|string|max:16',
            'address' => 'required|string|max:48',
            'postal_code' => 'unique:agencies|string|nullable|max:16',
            'city' => 'required|string|max:24',
            'fax' => 'unique:agencies|string|nullable|max:24',
            'phone' => 'required|string|max:24',
            'action_zone' => 'required|string|max:24',
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->replace([
            'code' => $this->code,
            'address' => $this->address,
            'postal_code' => $this->postalCode,
            'city' => $this->city,
            'fax' => $this->fax,
            'phone' => $this->phone,
            'action_zone' => $this->actionZone,
        ]);
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'code' => 'Código de agencia',
            'address' => 'Dirección de agencia',
            'postal_code' => 'Código postal de agencia',
            'city' => 'Ciudad de agencia',
            'fax' => 'Fax de agencia',
            'phone' => 'Teléfono de agencia',
            'action_zone' => 'Zona de acción de agencia',
        ];
    }
}
