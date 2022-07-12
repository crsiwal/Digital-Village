<?php

namespace App\Controllers\Admin\Auth;

use App\Controllers\BaseController;

class Verify extends BaseController {

    public function index() {
        $this->template->meta("title", "Verify OTP");
        $this->template->meta("description", "Verify your mobile number using OTP.");
        return $this->template->view("admin/auth/signup", "signup");
    }
}
