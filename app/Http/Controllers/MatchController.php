<?php 

namespace App\Http\Controllers;

use App\Models\Institute;
use App\Models\Match;
use App\Models\Psychologist;
use App\Models\Shapah;
use Illuminate\Support\Facades\Auth;

class MatchController extends Controller {
    public function index() {
		$matches = Match::all();

		return view( 'indexes.match', compact( 'matches' ) );
	}

    public function create() {
		$match  = new Match();
		$is_new = true;
		$institutes = $this->getShapahInstitutes( Auth::user() );
        $psychologists = $this->getShapahPsychologists( Auth::user() );

		return view( 'forms.new_match', compact( 'match', 'is_new', 'institutes' ,'psychologists') );
	}

    public function store() {
		$user_data = \Request::all();
		$match = new Match($user_data);
		$match->save();

		return redirect()->route( 'match.index', $match->id );
	}

    private function getShapahInstitutes( Psychologist $psychologist ) {
		$institutes = [];
		foreach ( $psychologist->shapahs as $shapah ) {
                foreach ($shapah->institutes as $shap_ins){
			         $institutes[] = $shap_ins;
            }
		}
		return $institutes;
	}

    private function getShapahPsychologists( Psychologist $psychologist ) {
		$psychologists = [];
		foreach ( $psychologist->shapahs as $shapah ) {
                foreach ($shapah->psychologists as $shap_psy){
			         $psychologists[$shap_psy->id] = $shap_psy;
                }
            }

		return $psychologists;
	}
}
