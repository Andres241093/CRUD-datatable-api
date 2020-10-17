<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            case 'GET':
            {
                return [];
            }
            break;
            case 'POST':
            {
                return [
                   'price'=>'required|min:1',
                   'description'=>'min:5'
               ];
            }
            break;
            case 'PUT':
            {
                return [
                   'price'=>'required|min:1',
                   'description'=>'min:5'
                ];
            }
            break;
            case 'DELETE': break;
            case 'PATCH': break;
            default:
            {
                return [];
            }
            break;
        }
    }

    public function attributes()
    {
      return [
            'price' => 'precio',
            'description' => 'descripción'  
      ];
    }
}
