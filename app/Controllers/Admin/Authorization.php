<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Authorization extends BaseController {

    public function login() {
        $this->template->header("header_simple");
        $this->template->footer("");
        return $this->template->view("admin/login", "login");
    }

    public function signup() {
        $this->template->header("header_simple");
        $this->template->footer("");
        return $this->template->view("admin/signup", "signup");
    }
}
