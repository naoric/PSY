<?php 

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Models\PsychologistVisit;

class PsychologistVisitController extends Controller {
	public function index() {
		$visits = PsychologistVisit::all();

		return view( 'indexes.psychologist-vist', compact('visits') );
	}

	public function create() {
		$visit = new PsychologistVisit();
		$is_new = true;

		return view( 'forms.psychologist-visit', compact( 'visit', 'is_new' ) );
	}

	public function store() {
		$form_data = \Request::all();

		PsychologistVisit::create( $form_data );

		return redirect()->route( 'psychologist-visit.index' );
	}

	public function show( $id ) {
		$visit = PsychologistVisit::find( $id );

		return view( 'singles.psychologist-visit', compact( 'visit' ) );
	}

	public function edit( $id ) {
		$visit = PsychologistVisit::find( $id );

		return view('forms.psychologist-visit', compact('visit'));

	}
}