<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'title' => ['required', 'min:1', 'max:255'],
            'slug' => "required|unique:posts,slug,{$this->post->id}",
            'content' => 'required',
            'category' => 'required',
        ];
    }
    // public function messages()
    // {
    //     return [
    //         'title.required' => 'El campo :attribute es obligatorio.',
    //         'title.min' => 'El campo :attribute debe tener al menos :min caracteres.',
    //         'title.max' => 'El campo :attribute no puede tener más de :max caracteres.',
    //         'slug.required' => 'El campo :attribute es obligatorio.',
    //         'slug.unique' => 'El :attribute ya existe.',
    //         'content.required' => 'El campo :attribute es obligatorio.',
    //         'category.required' => 'El campo :attribute es obligatorio.',
    //     ];
    // }
    // public function attributes()
    // {
    //     return [
    //         'title' => 'título',
    //         'slug' => 'slug',
    //         'content' => 'contenido',
    //         'category' => 'categoría',
    //     ];
    // }
}
