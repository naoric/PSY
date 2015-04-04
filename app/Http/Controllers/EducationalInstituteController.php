<?php

namespace App\Http\Controllers;


use App\Models\EducationalInstitute;
use App\Models\Shapah;


class EducationalInstituteController extends Controller {

	public function index() {
		$all_educational_institutes = EducationalInstitute::all();

		return view( 'indexes.institute_page', compact( 'all_educational_institutes' ) );
	}


	public function edit( EducationalInstitute $institute ) {
		$shapahs               = Shapah::all();
		return view( 'forms.institute_new', compact( 'institute', 'shapahs' ) );
	}


	public function update(EducationalInstitute $institute ) {
		$form_data             = \Request::all();
		$institute->fill( $form_data );
		$institute->save();

		return redirect()->route( 'educational-institute.index' );
	}


	public function show(EducationalInstitute $institute ) {

		return view( 'singles.educational_institute', compact( 'institute' ) );
	}

	Public function destroy(EducationalInstitute $institute) {
		$institute->delete();
		return redirect()->route( 'educational-institutes.index' );
	}

    	public function create() {
		$educational_institute = new EducationalInstitute();
		$related_data = $this->getEducationalInstituteMetaFieldsData();
		$related_data['EducationalInstitute'] = $educational_institute;
		$related_data['is_new'] = true;

		return view( 'forms.institute_new', $related_data );
	}

	public function store() {
		$user_data = $this->getFormUserData();
		$educational_institute = new EducationalInstitute($user_data);
		$educational_institute->save();

		return redirect()->route( 'EducationalInstitute.show', $educational_institute->id );
	}

}
