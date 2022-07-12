<?php

namespace App\Controllers\Admin\Auth;

use App\Controllers\BaseController;

class Signup extends BaseController {

    public function index() {
        $this->template->meta("title", "Create an account");
        $this->template->meta("description", "Register yourself in our system.");
        return $this->template->view("admin/auth/signup", "signup");
    }
}
