<?php 

namespace App\Http\Controllers;
use App\Models\Shapah;

class ShapahController extends Controller {

    public function show(Shapah $shapah) {
		return view( 'singles.shapah', compact('shapah'));
	}




}
