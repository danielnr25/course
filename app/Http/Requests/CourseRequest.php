<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
        switch ($this->method()) {
            case "POST":
            {
                return [
                    'title'       => 'required|min:5',
                    'categories'  => 'required|array',
                    'description' => 'required|max:255',
                    'price'       => 'required',
                    'picture'     => 'required'
                ];
            }
            case "PUT":
            {
                return [
                    'title'       => 'required|min:5' .$this->route('course')->id,
                    'categories'  => 'required|array',
                    'description' => 'required|max:255',
                    'price'       => 'required',
                    'picture'     => 'required'
                ];
            }
            default:
            {
                return [];
            }
        }
    }
}
