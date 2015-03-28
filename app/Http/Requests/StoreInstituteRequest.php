<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreInstituteRequest extends Request {

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
       'educational_institute_id'=> 'unique:educational_institutes|numeric',
       'shapah_id' =>'exists:shapahs',
       'educational_institute_name' => 'alpha',
       'educational_institute_city' => 'alpha',
       'educational_institute_address' => 'alpha_num',
       'educational_institute_phone'=> 'numeric',
       'principal_first_name'=> 'alpha',
       'principal_last_name'=> 'alpha',
       'email' => 'email',
       'phone'=> 'numeric',
       'number_of_classes'=> 'numeric|between:0,50',
       'number_of_special_classes'=> 'numeric|between:0,50',
       'number_of_special_students'=> 'numeric|between:0,2000',
       'number_of_alef_students'=> 'numeric|between:1,2000',
       'number_of_non_alef_students'=> 'numeric|between:1,2000',
       'number_of_kindergarten_children'=> 'numeric|between:1,2000',
       'kindergarten_children_age'=> 'alpha',
		];
	}
}
