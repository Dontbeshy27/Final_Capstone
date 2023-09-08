<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Pubg_clanRequest extends FormRequest
{
    public function authorize()
    {
        return true; // You can define authorization logic here.
    }

    public function rules()
    {
        return [
            "user_name" => 'required',
            "password" => "required",
            "email" => "required",
            "clan_name" => 'required|string|max:255',
            "ingame_name" => "required",
            "role" => "required"  
            // Define more validation rules for your request data.
        ];
    }
}
