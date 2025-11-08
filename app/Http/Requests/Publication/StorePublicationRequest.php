<?php

namespace App\Http\Requests\Publication;

use Illuminate\Foundation\Http\FormRequest;

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
            'name'=> 'required|string|max:255',
            'title'=> 'required|string',
            'type'=> 'required|string',
            'severity'=> 'required|string',
            'location'=> 'required|string',
            'description'=> 'required|string',
            'url_image'=> 'required|string',
            'data'=> 'required|dateTime',
            'profile_id' => 'required|exists:profiles,id',
        ];
    }
}
