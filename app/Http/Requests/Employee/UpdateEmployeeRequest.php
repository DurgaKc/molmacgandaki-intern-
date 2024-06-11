<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEmployeeRequest extends FormRequest
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
            'name'=>['required','string'],
            'name_en'=>['required','string'],
            'department_id'=>['nullable', Rule::exists('departments', 'id')->withoutTrashed()],
            'designation_id'=>['nullable', Rule::exists('designations','id')->withoutTrashed()],
            'email'=>['nullable','string'],
            'phone'=>['nullable','string'],
            'position'=>['nullable','integer'],
            'photo'=>['nullable','mimes:png,jpeg,jpg']

        ];
    }
}
