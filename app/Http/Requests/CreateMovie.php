<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMovie extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'category_id' => 'required',
            'quality_id' => 'required',
            'language_id' => 'required',
            'description' => 'required',
            'video' => 'required|file|mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4',
            'release_year' => 'required',
        ];
    }
}
