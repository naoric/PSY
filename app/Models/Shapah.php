<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Shapah extends Model {
	protected $table = 'shapahs';

    public function institute() {
		return $this->hasMany( 'App\Models\Institute' );
	}
}
