<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Psychologist extends Model {
	protected $guarded = [ 'id' ];
	public $timestamps = false;

	public function institutes() {
		return $this->hasManyThrough( 'App\Models\Institute', 'App\Models\Match' );
	}

	public function status() {
		return $this->belongsTo( 'App\Models\ProfessionalStatus', 'professional_status_id' );
	}

	public function role() {
		return $this->belongsTo( 'App\Models\PsychologistRole', 'psychologist_role_id' );
	}

	public function shapahs() {
		return $this->belongsToMany( 'App\Models\Shapah', 'psychologist_shapah', 'psychologist_id', 'shapah_id' );
	}

	public function matches() {
		return $this->hasMany( 'App\Models\Match' );
	}
}
