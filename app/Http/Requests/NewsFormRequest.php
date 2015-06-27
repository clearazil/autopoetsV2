<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Response;

class NewsFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required',
            'file'  => 'required|image',
            'message' => 'required'
        ];
    }

    public function authorize()
    {
        // Only allow logged in users
        // return \Auth::check();
        // Allows all users in
        return true;
    }


}