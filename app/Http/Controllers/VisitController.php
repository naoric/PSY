<?php

namespace App\Http\Controllers;

 use App\Models\Match;
use App\Models\Psychologist;
use App\Models\Visit;

class VisitController extends Controller {
	public function index() {
		$visits = Visit::all();

		return view( 'indexes.visit', compact( 'visits' ) );
	}

	public function create() {
		$visit  = new Visit();
		$is_new = true;
		$institutes = $this->getPsychologistInstitutes( \Auth::user() );

		return view( 'forms.visit', compact( 'visit', 'is_new', 'institutes' ) );
	}

	public function store() {
		$form_data = \Request::except('institute_id');
		$visit = new Visit( $form_data );
		$visit_match = $this->getMatchForPsychologist(\Request::input('institute_id'));
		$visit->match()->associate($visit_match);

		$visit->save();

		return redirect()->route( 'visit.index' );
	}

	public function show( Visit $visit ) {
		return view( 'singles.psychologist-visit', compact( 'visit' ) );
	}

	public function edit( Visit $visit ) {
		$is_new = false;
		return view( 'forms.psychologist-visit', compact( 'visit', 'is_new' ) );

	}

	public function update( Visit $visit ) {
		$form_data = \Request::all();
		$visit->fill( $form_data );
		$visit->save();

		return redirect()->route( 'psychologist-visit.show', $visit->id );
	}

	private function getMatchForPsychologist($institute_id) {
		// todo Change hard- coded psychologist id
		return \Auth::user()->matches()->whereInstituteId( $institute_id )->first();
	}

	private function getPsychologistInstitutes( Psychologist $psychologist ) {
		$institutes = [];
		foreach ( $psychologist->matches as $match ) {
			$institutes[] = $match->institute;
		}
		return $institutes;
	}

    public function destroy(Visit $vis) {
		$vis->delete();

		return redirect()->route( 'visit.index' );
	}
}
