<?php 

namespace App\Http\Controllers;

use App\Models\Institute;
use App\Models\Match;
use App\Models\Psychologist;
use App\Models\Shapah;
use Illuminate\Support\Facades\Auth;

class MatchController extends Controller {
    public function index() {
        $main_shapah = $this->getMainShapah( Auth::user() );
        $hours_for_matches = $main_shapah->getStandarts($main_shapah);

		$matches = Match::all();
        $institutes = $this->getShapahInstitutes( Auth::user() );

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

    public function destroy(Match $mat) {

		$mat->delete();

		return redirect()->route( 'match.index' );
	}

    private function getShapahInstitutes( Psychologist $psychologist ) {
		$institutes = [];
		$main_shapah = $this->getMainShapah($psychologist);
                foreach ($main_shapah->institutes as $shap_ins){
			         $institutes[] = $shap_ins;
            }

		return $institutes;
	}

    private function getShapahPsychologists( Psychologist $psychologist ) {
		$psychologists = [];
		$main_shapah = $this->getMainShapah($psychologist);
                foreach ($main_shapah->psychologists as $shap_psy){
			         $psychologists[$shap_psy->id] = $shap_psy;
                }


		return $psychologists;
	}

    public function getMainShapah(Psychologist $manager){
        foreach ($manager->shapahs as $shapah){
            if ($manager->shapahs()->where('shapah_id',$shapah->id)->first()->pivot->is_manager){
                $main_shapah = $shapah;
            }
        }
        return $main_shapah;
    }
}
