<?php

namespace ImagesBundle\Api;

use ImagesBundle\Api\ApiClient;

class ColorPizzaApi extends ApiClient {

	protected static string $url = "https://api.color.pizza/v1/";

	static public function getColorInfo(string | array $colorHex) {
		if (is_array($colorHex)) {
			$colorHex = implode(",", $colorHex);
		}
		$colorHex = str_replace("#", "", $colorHex);
		return self::get("", [
			"query" => [
		        "values" => $colorHex,
		        "list" => "bestOf",
		    ]
		]);
	}
}