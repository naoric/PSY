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
            'license_number'=> 'unique:psychologists|numeric',
            'start_working_date' => 'date'
            'first_name'=> 'alpha',
            'last_name'=> 'alpha',
            'city_of_residence' => 'alpha',
            'availability'=> 'numeric|between:1,50',
            'phone'=> 'numeric',
            'email' => 'email',
            'password'=> 'min:8',
            'psychologist_role_id' =>'exists:psychologist_roles',
            'professional_status_id' =>'exists:professional_statuses',
		];
	}

}
