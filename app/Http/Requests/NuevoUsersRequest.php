<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NuevoUsersRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            "idMeta" => "required|max:500",
        
        ];
    }
}