<?php 

namespace App\Http\Controllers;
use App\Models\Institute;

class InstitutesController extends Controller {

	public function create() {

	}

    public function update() {

    }

	public function index() {

	}

    public function show(Institute $institute) {
        $institute->toJson();
    }

	public function store() {

	}

}
