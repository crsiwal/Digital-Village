<?php

namespace App\Controllers\Admin\Auth;

use App\Controllers\BaseController;

class Login extends BaseController {

    public function index() {
        $this->template->meta("title", "Log In");
        return $this->template->view("admin/auth/login", "login");
    }
}
