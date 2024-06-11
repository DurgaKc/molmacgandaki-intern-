<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSettingRequest extends FormRequest
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
            'office_name'=>['nullable', 'string'],
          'office_name_en'=>['nullable', 'string'],
          'address'=>['nullable', 'string'],
          'address_en'=>['nullable', 'string'],
         'email'=>['nullable', 'string'],
          'phone'=>['nullable', 'string'],
          'logo' =>['nullable', 'mimes:jpg,png,gif,jpeg'],
          'flag'=>['nullable', 'mimes:jpg,png,jpeg,gif'],
          'backgroung_img'=>['nullable', 'mimes:jpg,png,gif,jpeg'],
          'office_head_id'=>['nullable', Rule::exists('employees', 'id')->withoutTrashed()],
          'information_officer_id'=>['nullable', Rule::exists('employees', 'id')->withoutTrashed()],
          'spoke_person_id'=>['nullable', Rule::exists('employees', 'id')->withoutTrashed()],
          'map_iframe' => ['nullable', 'url'],
          'facebook_iframe' => ['nullable', 'url'],
          'twitter_iframe' => ['nullable', 'url'],



        // 'office_name' => 'nullable|string|max:255',
        //     'office_name_en' => 'nullable|string|max:255',
        //     'email' => 'nullable|email|max:255',
        //     'phone' => 'nullable|string|max:20',
        //     'logo' => 'nullable|file|image|max:2048',
        //     'flag' => 'nullable|file|image|max:2048',
        //     'background_img' => 'nullable|file|image|max:2048',
        //     'office_head_id' => 'nullable|exists:employees,id',
        //     'information_officer_id' => 'nullable|exists:employees,id',
        //     'spoke_person_id' => 'nullable|exists:employees,id',
        //     'map_iframe' => 'nullable|string',
        //     'facebook_iframe' => 'nullable|string',
        //     'twitter_iframe' => 'nullable|string',

         ];
    }
}
