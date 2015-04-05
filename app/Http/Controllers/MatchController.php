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

}
