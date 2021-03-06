<?php namespace App\Http\Requests\Gestor;

use Illuminate\Foundation\Http\FormRequest;

class TurmaRequest extends FormRequest {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
                    'nome' 		=> 'required|min:3',
                    'ativo' 		=> 'required'
		];
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

}
