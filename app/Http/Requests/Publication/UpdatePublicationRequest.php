<?php

namespace App\Http\Requests\Publication;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePublicationRequest extends FormRequest
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
            'photo'=>['nullable','mimes:png,jpeg,jpg'],
            'publicationCategory_id' =>['nullable', Rule::exists('publicationCategories', 'id')->withoutTrashed()],
            'publisher' =>['required','string'],
            'publisher_en' =>['nullable','string'],
            'date' =>['nullable','string'],
            'description' =>['nullable','string'],
            'description_en' =>['nullable','string']
        ];
    }
}
