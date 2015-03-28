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
       'classes'=> 'numeric|between:0,50',
       'special_classes'=> 'numeric|between:0,50',
       'kindergarten_children'=> 'numeric|between:0,2000',
       'first_grade_children'=> 'numeric|between:1,2000',
       'mature_children'=> 'numeric|between:1,2000',
       'special_needs_children'=> 'numeric|between:1,2000',
		];
	}
}
