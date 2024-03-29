<?php
/*
 * Author: Max Base
 * Name: PHP Jalali Date
 * Date: 2022/01/26
 * Repository: https://github.com/BaseMax/PHPJalaliDate
 */

function jalaliDate(?int $year = null, ?int $month = null, ?int $day = null) : array {
	if ($year === null || $month === null || $day === null) {
		$year = date("Y");
		$month = date("m");
		$day = date("d");
	}
	$input = [
		"year" => $year,
		"month" => $month,
		"day" => $day,
	];

	$result = [];
	$array = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334];

	if ($input["year"] <= 1600) {
		$input["year"] -= 621;
		$result["year"] = 0;
	}
	else {
		$input["year"] -= 1600;
		$result["year"] = 979;
	}

	$temp = ($input["year"] > 2) ? ($input["year"] + 1) : $input["year"];
	$days = ((int)(($temp + 3) / 4)) + (365 * $input["year"]) - ((int)(($temp + 99) / 100)) - 80 + $array[$input["month"] - 1] + ((int)(($temp + 399) / 400)) + $input["day"];
	$result["year"] += 33 * ((int)($days / 12053));
	$days %= 12053;
	$result["year"] += 4 * ((int)($days / 1461));
	$days %= 1461;

	if ($days > 365){
		$result["year"] += (int)(($days - 1) / 365);
		$days = ($days-1) % 365;
	}

	$result["month"] = ($days < 186) ? 1 + (int)($days / 31) : 7 + (int)(($days - 186) / 30);
	$result["day"] = 1 + (($days < 186) ? ($days % 31) : (($days - 186) % 30));

	if ($result["month"] < 10) $result["month"] = "0" . $result["month"];

	if ($result["day"] < 10) $result["day"] = "0" . $result["day"];

	return $result;
}

