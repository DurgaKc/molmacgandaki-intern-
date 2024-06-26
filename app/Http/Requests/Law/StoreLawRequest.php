<?php

namespace App\Http\Requests\Law;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreLawRequest extends FormRequest
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
            'title' =>['required','string'],
            'title_en' =>['required','string'],
            'photo'=>['required','file','mimes:png,jpeg,jpg,pdf'],
            'law_category_id' =>['required', Rule::exists('law_categories', 'id')->withoutTrashed()],
            'publisher' =>['required','string'],
            'publisher_en' =>['required','string'],
            'date' =>['required','string'],
            'description' =>['required','string'],
            'description_en' =>['required','string']
        ];
    }
}
