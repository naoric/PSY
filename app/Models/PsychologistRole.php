<?php

namespace App\Models;

class PsychologistRole extends Model {
	public function psychologists() {
		return $this->hasMany( 'App\Models\Psychologist' );
	}
}