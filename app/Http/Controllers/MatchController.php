<?php 

namespace App\Http\Controllers;

use App\Models\Institute;
use App\Models\Match;
use App\Models\Psychologist;
use App\Models\Shapah;

class MatchController extends Controller {
    public function index() {
		$matches = Match::all();

		return view( 'indexes.match', compact( 'matches' ) );
	}

    public function create() {
		$match  = new Match();
		$is_new = true;
		$institutes = $this->getShapahInstitutes( Psychologist::find(2) );


		return view( 'forms.new_match', compact( 'match', 'is_new', 'institutes', 'psychologists' ) );
	}

    private function getShapahInstitutes( Psychologist $psychologist ) {
		$institutes = [];
		foreach ( $psychologist->shapahs as $shapah ) {
            if ($psychologist->is_manager)
                foreach ($shapah->institute as $shap_ins){
			         $institutes[] = $shap_ins;
                }
            endif
		}
		return $institutes;
	}
}
