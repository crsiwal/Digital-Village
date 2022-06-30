<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Login extends BaseController {

    public function index() {
        $this->template->view();
        //return view('admin/login');
    }
}
