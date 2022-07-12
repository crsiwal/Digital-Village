<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Assets extends BaseConfig {

	public $css = [
		// ["name" => "bootstrap", "position" => "head", "path" => "bootstrap/bootstrap.min"],
		["name" => "bootstrap", "position" => "head", "path" => "core/theme"],
		["name" => "customstyle", "position" => "head", "path" => "core/custom"],
	];

	public $js = [
		["name" => "bootstrapjs", "position" => "foot", "path" => "jquery/3.6.0.min"],
		["name" => "bootstrapjs", "position" => "foot", "path" => "bootstrap/bootstrap.min"],
		["name" => "themejs", "position" => "foot", "path" => "core/theme"],
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
