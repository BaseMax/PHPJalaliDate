<?php
// Max Base
// https://github.com/BaseMax/PHPJalaliDate

include "src/JalaliDate.php";

// Function
function CheckGregorianDateIsInCurrentJalaliMonth(int $gregorian_year, int $gregorian_month, int $gregorian_day) : bool {
	$today = jalaliDate();
	$date = jalaliDate($gregorian_year, $gregorian_month, $gregorian_day);

	return $today["year"] === $date["year"] && $today["month"] === $date["month"];
}

// Test
date_default_timezone_set('Asia/Tehran');

var_dump( CheckGregorianDateIsInCurrentJalaliMonth(2022, 05, 20) );
var_dump( CheckGregorianDateIsInCurrentJalaliMonth(2022, 10, 22) );
var_dump( CheckGregorianDateIsInCurrentJalaliMonth(2022, 10, 23) );
var_dump( CheckGregorianDateIsInCurrentJalaliMonth(2022, 10, 30) );
var_dump( CheckGregorianDateIsInCurrentJalaliMonth(2022, 11, 21) );
var_dump( CheckGregorianDateIsInCurrentJalaliMonth(2022, 11, 22) );
