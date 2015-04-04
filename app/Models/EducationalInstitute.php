<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class EducationalInstitute extends Model {
	protected $table = 'educational_institutes';
	public $timestamps = false;
	public $guarded = [ 'id' ];

}
