<?php

namespace App\Libraries;

class Template {
	private $meta = [];
	private $login = true;

	public function __construct() {
	}

	public function view($path, $page, $data = [], $permission = "public") {
		if ($permission == "public" || is_allowed($permission)) {

			// Add the meta deta of the page
			$data["meta"] = $this->meta;

			// Load the content and draw the webpage
			$content = view($path, $data);

			// Based on the environment return the webpage normally in development or ...
			// compress webpage in production or testing
			return (ENVIRONMENT == "development") ? $content : $this->sanitize($content);
		} else {
		}
	}

	public function meta($name, $value = "") {
		$this->meta[$name] = $value;
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
