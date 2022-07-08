<?php

namespace App\Libraries;

class Template {
	private $meta = [];
	private $login = true;
	private $header = "header";
	private $footer = "footer";

	public function __construct() {
	}

	public function view($path, $page, $data = [], $permission = "public") {
		if ($permission == "public" || is_allowed($permission)) {

			// Load the content and draw the webpage
			$content = view($path, $data);

			return (ENVIRONMENT == "development") ? $content : $this->sanitize($content);
		} else {
		}
	}

	public function header($name) {
		$this->header = $name;
	}

	public function footer($name) {
		$this->footer = $name;
	}

	public function meta($name, $value = "") {
		$meta[$name] = $value;
	}

	private function sanitize($content) {
		$search = array(
			'/\>[^\S ]+/s', // strip whitespaces after tags, except space
			'/[^\S ]+\</s', // strip whitespaces before tags, except space
			'/(\s)+/s', // shorten multiple whitespace sequences
			'/<!--(.|\s)*?-->/' // Remove HTML comments
		);

		$replace = array(
			'>',
			'<',
			'\\1',
			''
		);
		echo preg_replace($search, $replace, $content);
	}
}
