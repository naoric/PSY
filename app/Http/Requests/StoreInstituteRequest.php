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
       educational_institute_name
       educational_institute_city
       educational_institute_address
       educational_institute_phone
       principal_first_name
       principal_last_name
       email
       classes
       special_classes
       kindergarten_children
       first_grade_children
       mature_children
       special_needs_children

		];
	}

}
