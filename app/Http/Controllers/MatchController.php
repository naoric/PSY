<?php 

namespace App\Http\Controllers;

use App\Models\Institute;
use App\Models\Match;
use App\Models\Psychologist;

class MatchController extends Controller {
    public function index() {
		$matches = Match::all();

		return view( 'indexes.match', compact( 'matches' ) );
	}

    public function create() {
		$match  = new Match();
		$is_new = true;
		$institutes = $this->getPsychologistInstitutes( Psychologist::find(2) );

		return view( 'forms.new_match', compact( 'match', 'is_new', 'institutes', 'psychologists' ) );
	}
}
