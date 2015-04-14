<?php

namespace App\Http\Controllers;

use App\Models\Psychologist;
use App\Models\Shapah;
use App\Models\ProfessionalStatus;
use App\Models\PsychologistRole;
use App\User;

class PsychologistController extends Controller {

	public function index() {
		$all_psychologists = Psychologist::all();
		return view('indexes.psy_page', ['psychologists' => $all_psychologists]);
	}

	public function edit(Psychologist $psychologist) {
		$related_data = $this->getPsychologistMetaFieldsData();
		$related_data['psychologist'] = $psychologist;
		$related_data['is_new'] = false;
		$related_data['form_url'] = 'psychologist.update';
        $related_data['add_shapah'] = 0;

		// return $shapahs;
		return view('forms.psy_new', $related_data);
	}

	public function update(Psychologist $psychologist) {
		$input_data = $this->getFormUserData();
		$psychologist->fill($input_data);
		$psychologist->save();

        $add_shapah = array_pull($input_data,0);
        if ($add_shapah != "on"){
            \DB::table('psychologist_shapah')->where('psychologist_id','=',$psychologist->id)->delete();
        }
        $this->setUserPermission($psychologist);

		return redirect()->route('psychologist.index');
	}

	public function show(Psychologist $psychologist) {
		return view( 'singles.psychologist', compact('psychologist'));
	}

	public function create() {
		$psychologist = new Psychologist();
		$related_data = $this->getPsychologistMetaFieldsData();
		$related_data['psychologist'] = $psychologist;
		$related_data['is_new'] = true;
		$related_data['form_url'] = 'psychologist.store';
        $related_data['add_shapah'] = 0;

		return view( 'forms.psy_new', $related_data );
	}

	public function store() {
		$user_data = $this->getFormUserData();
		$psychologist = new Psychologist($user_data);
		$psychologist->save();
        $this->setUserPermission($psychologist);

		return redirect()->route( 'psychologist.show', $psychologist->id );
	}

	public function destroy(Psychologist $psychologist) {
		$psychologist->delete();
        \DB::table('psychologist_shapah')->where('psychologist_id','=',$psychologist->id)->delete();
		return redirect()->route( 'psychologist.index' );
	}

	/**
	 * @return array
	 */
	private function getPsychologistMetaFieldsData() {
		$shapahs               = Shapah::all();
		$professional_statuses = ProfessionalStatus::all();
		$roles                 = PsychologistRole::all();

		return compact('shapahs', 'professional_statuses', 'roles');
	}

	/**
	 * @return array
	 */
	private function getFormUserData() {
		$input_data = \Request::except( 'shapah_id' );
		$input_data['password'] = bcrypt( $input_data['password'] );

		return $input_data;
	}
    private function setUserPermission(Psychologist $psychologist){
        $role_id = \DB::table('psychologists')->where('id',$psychologist->id)->pluck('psychologist_role_id');
        $shapah = \Request::Only('shapah_id');
        // is manager
        if ($role_id == 1){
            \DB::table('psychologists')
                ->where('id',$psychologist->id)
                ->update(['permission' => 2]);
            //set the record in psychologist_shapah table

            \DB::table('psychologist_shapah')->insert(
            ['shapah_id' =>  array_pull($shapah,'shapah_id'), 'psychologist_id' => $psychologist->id, 'is_manager' => 1]
            );
        }
        // isn't a manager
        else{
            \DB::table('psychologists')
                ->where('id',$psychologist->id)
                ->update(['permission' => 1]);
            //set the record in psychologist_shapah table
            \DB::table('psychologist_shapah')->insert(
            ['shapah_id' => array_pull($shapah,'shapah_id') , 'psychologist_id' => $psychologist->id, 'is_manager' => 0]
            );
        }
    }
}
