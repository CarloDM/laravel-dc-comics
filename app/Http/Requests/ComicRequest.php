<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
          'title' =>        'required|min:3|max:80',
          'description' =>  'required|min:3',
          'thumb' =>        'required|max:255',
          'price' =>        'required|min:2',
          'series'=>        'required|min:2|max:80',
          'sale_date'=>     'required|min:10|max:10',
          'type'=>          'required|min:3|max:40',
          'artists'=>       'required|min:3|max:255',
          'writers'=>       'required|min:3|max:255',
        ];
    }
    public function messages(){
      return[
        'title.required' => 'titolo obbligatorio',
        'title.min' => 'minimo 3 caratteri',
        'title.max' => 'massimo 80 caratteri',

        'description.required' => 'descrizione obbligatoria',
        'description.min' => 'descrizione almeno 3 caratter',

        'thumb.required' => 'thumb obbligatoria',
        'thumb.max' => 'pat massimo 255 caratter',

        'price.required' => 'prezzo obbligatorio',
        'price.min' => ' minimo 2 caratteri',

        'series.required' => ' obbligatorio',
        'series.min' => ' minimo 2 caratteri',
        'series.max' => ' massimo 80 caratteri ',

        'sale_date.required' => ' obbligatorio',
        'sale_date.min' => ' 10 caratteri xxxx-xx-xx',
        'sale_date.max' => ' 10 caratteri xxxx-xx-xx',

        'type.required' => ' obbligatorio',
        'type.min' => ' minimo 3 caratter',
        'type.max' => ' massimo 40 caratteri',

        'artists.required' => 'obbligatorio',
        'artists.min' => 'minimo 3 caratter',
        'artists.max' => 'massimo 255 caratteri',
        'writers.required' => ' obbligatorio',
        'writers.min' => ' minimo 3 caratter',
        'writers.max' => ' massimo 255 caratteri',
      ];
    }
}
