<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model {
	protected $table = 'visits';
	public $guarded = ['id'];
	public $timestamps = false;

	public function match() {
		return $this->belongsTo( 'App\Models\Match' );
	}
    public function institutes() {
		return $this->hasManyThrough( 'App\Models\Institute', 'App\Models\Match' );
	}
}
