<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobAppicationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'jobid' => ['required'],
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'resume' => ['required'],
        ];
    }
}
