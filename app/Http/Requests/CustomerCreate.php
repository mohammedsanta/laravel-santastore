<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerCreate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'CustomerName' => ['required'],
            'CustomerNumber' => ['numeric'],
            'CustomerAccount' => ['required'],
            'CustomerReferer' => ['required'],
            'CustomerAge' => ['required'],
            'CustomerAddress' => ['required'],
            'CustomerIs' => ['required'],
            'CustomerAbout' => ['required'],
            'photo' => [],
        ];
    }
}
