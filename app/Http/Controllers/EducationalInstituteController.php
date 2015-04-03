<?php 

namespace App\Http\Controllers;



//ofir
use App\Models\Psychologist;
use App\Models\EducationalInstitute;


class EducationalInstituteController extends Controller {

  public function index() {
		$all_EducationalInstitutes = EducationalInstitute::all();
		return view('indexes.institute_page', ['EducationalInstitutes' => $all_EducationalInstitutes]);
	}




}
