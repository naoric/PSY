<?php

namespace App\Http\Controllers;

use App\Models\Psychologist;
use App\Models\Shapah;
use App\Models\ProfessionalStatus;
use App\Models\PsychologistRole;


class PsychologistController extends Controller {
	public function index() {
		$all_psychologists = Psychologist::all();
		return view('indexes.psy_page', ['psychologists' => $all_psychologists]);
	}

	public function edit($psychologist_id) {
		$psychologist = Psychologist::find($psychologist_id);
		$related_data = $this->getPsychologistMetaFieldsData();
		$related_data['psychologist'] = $psychologist;
		// return $shapahs;
		return view('forms.psy_new', $related_data);
	}

	public function update($psychologist_id) {
		$psychologist = Psychologist::find($psychologist_id);
		$input_data = $this->getFormUserData();

		$psychologist->fill($input_data);
		$psychologist->save();

		return redirect()->route('psychologist.index');
	}

	public function show($psychologist_id) {
		$psychologist = Psychologist::find( $psychologist_id );
		return view( 'singles.psychologist', compact('psychologist'));
	}

	public function create() {
		$psychologist = new Psychologist();
		$related_data = $this->getPsychologistMetaFieldsData();
		$related_data['psychologist'] = $psychologist;
		$related_data['is_new'] = true;

		return view( 'forms.psy_new', $related_data );
	}

	public function store() {
		$user_data = $this->getFormUserData();
		$psychologist = new Psychologist($user_data);
		$psychologist->save();

		return redirect()->route( 'psychologist.show', $psychologist->id );
	}

	public function destroy($psychologist_id) {
		Psychologist::find( $psychologist_id )->delete();
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

		return $input_data;
	}
}