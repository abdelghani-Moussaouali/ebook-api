<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class PosrStorRequest extends FormRequest
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
        if (request()->isMethod('post')) {
            return [
                'title' => 'string|min:5', ///required
                // 'auther' => 'string',
                // 'subtitle' => 'string',
                // 'publisher' => 'string',
                // 'description' => 'string', 
                // 'pagecount' => 'integer',
                // 'rating_count' => 'integer',
                // 'average_ratings' => 'integer',
                'image_link' => 'required|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',

            ];
        } else {
            return [
                'title' => 'string|min:5',///required
                // 'auther' => 'string',
                // 'subtitle' => 'string',
                // 'publisher' => 'string',
                // 'description' => 'string',
                // 'pagecount' => 'integer',
                // 'rating_count' => 'integer',
                // 'average_ratings' => 'integer',
                'image_link' => 'required|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            ];
        };
    }
    public function messages(): array
    {
        if (request()->isMethod('post')) {
            return [
                // 'title.required' => '  the title is required',
                'image_link.required' => ' the image is required',

            ];
        } else {
            return [
                // 'title.required' => '  the title is required',
                'image_link.required' => ' the image is required',
            ];
        };
    }
}
