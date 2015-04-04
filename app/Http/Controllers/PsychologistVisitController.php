<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Models\Psychologist;
use App\Models\PsychologistVisit;

class PsychologistVisitController extends Controller {
	public function index() {
		$visits = PsychologistVisit::all();

		return view( 'indexes.psychologist-vist', compact( 'visits' ) );
	}

	public function create() {
		$visit  = new PsychologistVisit();
		$is_new = true;
		$institutes = $this->getPsychologistInstitutes( \Auth::user() );

		return view( 'forms.psychologist-visit', compact( 'visit', 'is_new', 'institutes' ) );
	}

	public function store() {
		$form_data = \Request::all();
		PsychologistVisit::create( $form_data );

		return redirect()->route( 'psychologist-visit.index' );
	}

	public function show( PsychologistVisit $visit ) {
		return view( 'singles.psychologist-visit', compact( 'visit' ) );
	}

	public function edit( PsychologistVisit $visit ) {
		return view( 'forms.psychologist-visit', compact( 'visit' ) );

	}

	public function update( PsychologistVisit $visit ) {
		$form_data = \Request::all();
		$visit->fill( $form_data );
		$visit->save();

		return redirect()->route( 'psychologist-visit.show', $visit->id );
	}


	private function getPsychologistInstitutes( Psychologist $psychologist ) {
		return $psychologist->institutes;
	}
}