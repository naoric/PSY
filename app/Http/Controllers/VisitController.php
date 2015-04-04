<?php

namespace App\Http\Controllers;

use App\Models\Psychologist;
use App\Models\Visit;

class VisitController extends Controller {
	public function index() {
		$visits = Visit::all();

		return view( 'indexes.psychologist-vist', compact( 'visits' ) );
	}

	public function create() {
		$visit  = new Visit();
		$is_new = true;
		$institutes = $this->getPsychologistInstitutes( Psychologist::find(2) );

		return view( 'forms.psychologist-visit', compact( 'visit', 'is_new', 'institutes' ) );
	}

	public function store() {
		$form_data = \Request::all();
		Visit::create( $form_data );

		return redirect()->route( 'psychologist-visit.index' );
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


	private function getPsychologistInstitutes( Psychologist $psychologist ) {
		return $psychologist->institutes;
	}
}