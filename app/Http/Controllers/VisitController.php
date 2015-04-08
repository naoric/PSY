<?php

namespace App\Http\Controllers;

use App\Models\Institute;
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
		$institutes = $this->getPsychologistInstitutes( Psychologist::find(2) );

		return view( 'forms.visit', compact( 'visit', 'is_new', 'institutes' ) );
	}

	public function store() {
        list($form_data, $visit_match) = $this->getFormData();
		$visit = new Visit( $form_data );
		$visit->match()->associate($visit_match);

		$visit->save();

		return redirect()->route( 'visit.index' );
	}

	public function show( Visit $visit ) {
		return view( 'singles.psychologist-visit', compact( 'visit' ) );
	}

	public function edit( Visit $visit ) {
		$is_new = false;
        $institutes = $this->getPsychologistInstitutes( Auth::user() );
		return view( 'forms.visit', compact( 'visit', 'is_new' ,'institutes') );

	}

	public function update( Visit $visit ) {
        list($form_data, $visit_match) = $this->getFormData();

		$visit->fill( $form_data );
        $visit->match()->associate($visit_match);
		$visit->save();

		return redirect()->route( 'visit.index', $visit->id );
	}

	private function getMatchForPsychologist($institute_id) {
		// todo Change hard- coded psychologist id
		return Match::where( 'institute_id', '=', $institute_id )
					->where( 'psychologist_id', '=', '2' )->first();
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

    private function getFormData() {
        $form_data = \Request::except('institute_id');
		$visit_match = $this->getMatchForPsychologist(\Request::input('institute_id'));

		return [$form_data, $visit_match];

    }
}
