<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            "name" => "required|max:64",
            "email" => "required|email|max:64",
            "document" => "required|min:14|max:18",
            "mobile_phone" => "required|min:14|max:14",
        ];
    }

    public function messages()
    {
        return [
            "name.required" => __("Nome é obrigatório."),
            "name.max" => __("Nome deve conter no máximo 64 caracteres."),
            "email.required" => __("Email é obrigatório."),
            "email.email" => __("Email deve estar no formato email."),
            "email.max" => __("Email deve conter no máximo 64 caracteres."),
            "document.required" => __("Documento é obrigatório."),
            "document.min" => __("Documento deve conter no mínimo 11 caracteres."),
            "document.max" => __("Documento deve conter no máximo 14 caracteres."),
            "mobile_phone.required" => __("Celular é obrigatório."),
            "mobile_phone.max" => __("Celular deve conter exatamente 11 caracteres."),
            "mobile_phone.min" => __("Celular deve conter exatamente 11 caracteres.")
        ];
    }
}
