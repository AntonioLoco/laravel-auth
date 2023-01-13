<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => ["required", "max:150", "unique:projects"],
            "description" => ["nullable"],
            "link" => ["max:255"],
            "image_cover" => ["nullable", "image", "max:512"],
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "Il titolo è richiesto",
            "title.max" => "La lunghezza massima del titolo è 150 caratteri",
            "title.unique" => "Il titolo è già presente",
            "link.max" => "La lunghezza massima del link è 255 caratteri"
        ];
    }
}
