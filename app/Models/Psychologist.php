<?php

namespace App\Models;

class Psychologist extends Model {
	public function role() {
		return $this->belongsTo( 'App\PsychologistRole' );
	}
}
