<?php

namespace App\Http\Controllers;

use App\Models\Psychologist;
use App\Models\Shapah;
use App\Models\ProfessionalStatus;
use App\Models\PsychologistRole;


class PsychologistController extends Controller {
	public function index() {
		$all_psychologists = Psychologist::all();
		return view('forms.psy_page', ['psychologists' => $all_psychologists]);
	}

	public function edit($psychologist_id) {
		$psychologist = Psychologist::find($psychologist_id);
		$shapahs = Shapah::all();
		$professional_statuses = ProfessionalStatus::all();
		$roles = PsychologistRole::all();
		// return $shapahs;
		return view('forms.psy_new', compact('psychologist', 'shapahs', 'professional_statuses', 'roles'));
	}


	public function update($psychologist_id) {
		$psychologist = Psychologist::find($psychologist_id);
		$input_data = \Request::all();
		
		$psychologist->fill($input_data);
		$psychologist->save();

		return redirect()->route('psychologist.index');
	}

	public function show() {
		return redirect()->route('psychologist.index');
	}

	public function destroy($id) {

	}
}