<?php

namespace App\Http\Requests\Publication;

use Illuminate\Foundation\Http\FormRequest;

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
            'name'=> 'sometimes|string|max:255',
            'title'=> 'sometimes|string',
            'type'=> 'sometimes|string',
            'severity'=> 'sometimes|string',
            'location'=> 'sometimes|string',
            'description'=> 'sometimes|string',
            'url_image'=> 'sometimes|string',
            'data'=> 'sometimes|dateTime',
            'profile_id' => 'sometimes|exists:profiles,id',
        ];
    }
}
