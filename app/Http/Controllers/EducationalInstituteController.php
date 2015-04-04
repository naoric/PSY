<?php

namespace App\Http\Controllers;


use App\Models\EducationalInstitute;
use App\Models\Shapah;


class EducationalInstituteController extends Controller {

	public function index() {
		$all_educational_institutes = EducationalInstitute::all();

		return view( 'indexes.institute_page', compact( 'all_educational_institutes' ) );
	}


	public function edit( $id ) {
		$educational_institute = EducationalInstitute::find( $id );
		$shapahs               = Shapah::all();

		return view( 'forms.institute_new', compact( 'educational_institute', 'shapahs' ) );
	}


	public function update( $id ) {
		$educational_institute = EducationalInstitute::find( $id );
		$form_data             = \Request::all();

		$educational_institute->fill( $form_data );
		$educational_institute->save();

		return redirect()->route( 'educational-institute.index' );
	}


	public function show( $id ) {
		$educational_institute = educationalinstitute::find( $id );

		return view( 'singles.educational_institute', compact( 'educational_institute' ) );
	}

	Public function destroy($id) {
		EducationalInstitute::destroy( $id );

		return redirect()->route( 'educational-institutes.index' );
	}

}
