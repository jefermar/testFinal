<?php

namespace App\Http\Requests\Notificacion;

use Illuminate\Foundation\Http\FormRequest;

class StoreNotificacionRequest extends FormRequest
{
    /**
     * Determine if the publication is authorized to make this request.
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
            'event_notification'=> 'required|string|max:255',
            'publication_id' => 'required|exists:publications,id'
        ];
    }
}
