<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MediaController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to GET /
    */
    public function getIndex() {
        return view('media');
    }

}
