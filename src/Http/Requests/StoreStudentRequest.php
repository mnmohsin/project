<?php

namespace centosquare\mohsinmemon\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
        // dd('lkkk');
        return [
            'name'=>'required|min:3',
            'email'=>'required|unique:students,email',
            'age'=>'required',
            'password'=>'required|min:8',
        ];
    }
}
