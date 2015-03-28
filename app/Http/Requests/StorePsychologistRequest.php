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
			'psychologist_id' => 'unique:psychologists|numeric'
            'psychologist_role_id' =>'exists:psychologist_roles'
            'professional_status_id' =>'exists:professional_statuses'
            'license_number'=> 'unique:psychologists|numeric'
            'first_name'=> 'alpha'

		];
	}

}
