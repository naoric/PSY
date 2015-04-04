<?php 

namespace App\Http\Controllers;



//ofir
use App\Models\Psychologist;
use App\Models\EducationalInstitute;
use App\Models\Shapah;


class EducationalInstituteController extends Controller {

  public function index() {
		$all_EducationalInstitutes = EducationalInstitute::all();
		return view('indexes.institute_page', ['EducationalInstitutes' => $all_EducationalInstitutes]);
	}


	public function edit($educationalinstitutes_id) {
		$educationalinstitute = educationalinstitute::find($educationalinstitutes_id);
		$shapahs = Shapah::all();
		return view('forms.institute_new', compact('educationalinstitute', 'shapahs'));
	}


	public function update($educationalinstitutes_id) {
		$educationalinstitute = educationalinstitute::find($educationalinstitutes_id);
		$input_data = Request;

		$educationalinstitute->fill($input_data);
		$educationalinstitute->save();

		return redirect()->route('institute_page.index');
	}


    	public function show($educationalinstitutes_id) {
		$educationalinstitute = educationalinstitute::find( $educationalinstitutes_id );
		return view( 'singles.educational_institute', compact('educationalinstitute'));
	}

}
