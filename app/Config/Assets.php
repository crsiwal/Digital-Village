<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Assets extends BaseConfig {

	public $css = [
		["name" => "bootstrap", "position" => "head", "path" => "bootstrap/bootstrap.min"],
		["name" => "lighttheme", "position" => "head", "path" => "theme.min"],
	];

	public $js = [
		["name" => "bootstrap", "position" => "foot", "path" => "bootstrap/bootstrap.min"],
	];

	public $minifycss = [];
	public $minifyjs = [];

	public function filter($assetName, $postion = "head") {
		$asset = [];
		switch ($assetName) {
			case 'css':
				$asset = $this->css;
				break;
			case 'js':
				$asset = $this->js;
				break;
			case 'mcss':
				$asset = $this->minifycss;
				break;
			case 'mjs':
				$asset = $this->minifyjs;
				break;
		}

		$keys = array_keys(array_column($asset, 'position'), $postion);
		return array_map(function ($k) use ($asset) {
			return $asset[$k];
		}, $keys);
	}
}
