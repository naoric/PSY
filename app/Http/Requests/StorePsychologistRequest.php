<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StorePsychologistRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'license_number' => 'unique:psychologists|numeric',
			'first_name' => 'required|alpha_num'
		];
	}

}
