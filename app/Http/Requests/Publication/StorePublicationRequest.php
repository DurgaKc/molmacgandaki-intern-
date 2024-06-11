<?php

namespace App\Http\Requests\Publication;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePublicationRequest extends FormRequest
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
                'photo'=>['required','mimes:png,jpeg,jpg'],
                'publication_category_id' =>['required', Rule::exists('publication_categories', 'id')->withoutTrashed()],
                'publisher' =>['required','string'],
                'publisher_en' =>['required','string'],
                'date' =>['required','string'],
                'description' =>['required'],
                'description_en' =>['required']
        ];
    }
}
