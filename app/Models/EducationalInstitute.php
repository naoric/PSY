<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class EducationalInstitute extends Model {
	protected $table = 'educational_institutes';
	public $timestamps = false;
	public $guarded = [ 'id' ];


    public function shapah() {
        return $this->belongsTo('App\Models\Shapah', 'shapah_id');
    }
}
