<?php

namespace App\Http\Controllers;


use App\Models\Institute;
use App\Models\Shapah;


class InstituteController extends Controller {

	public function index() {
		$all_institutes = Institute::all();

		return view( 'indexes.institute_page', compact( 'all_institutes' ) );
	}


	public function edit( Institute $institute ) {
		$shapahs               = Shapah::all();
		return view( 'forms.institute_new', compact( 'institute', 'shapahs' ) );
	}


	public function update(Institute $institute ) {
		$form_data             = \Request::all();
		$institute->fill( $form_data );
		$institute->save();

		return redirect()->route( 'educational-institute.index' );
	}


	public function show(Institute $institute ) {

		return view( 'singles.educational_institute', compact( 'institute' ) );
	}

	Public function destroy(Institute $institute) {
		$institute->delete();
		return redirect()->route( 'educational-institutes.index' );
	}

    	public function create() {
		$institute = new Institute();
		$related_data = $this->getEducationalInstituteMetaFieldsData();
		$related_data['EducationalInstitute'] = $institute;
		$related_data['is_new'] = true;

		return view( 'forms.institute_new', $related_data );
	}

	public function store() {
		$user_data = $this->getFormUserData();
		$institute = new Institute($user_data);
		$institute->save();

		return redirect()->route( 'EducationalInstitute.show', $educational_institute->id );
	}

}
