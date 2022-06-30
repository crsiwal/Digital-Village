<?php

namespace App\Libraries;

class Template {
	private $meta = [];
	private $login = false;

	public function __construct() {
	}

	public function view() {
		$app = ($this->login) ? "admin" : "client";
		if (ENVIRONMENT == "development") {
			return view($app . "");
		}
	}

	public function meta($name, $value = "") {
		$meta[$name] = $value;
	}
}
