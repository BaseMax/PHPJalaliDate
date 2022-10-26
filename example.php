<?php
// Max Base
// https://github.com/BaseMax/PHPJalaliDate

include "src/JalaliDate.php";

print_r(jalaliDate()); // It will return today date in Jalali date system.
// Array
// (
//     [year] => 1401
//     [month] => 08
//     [day] => 04
// )

print_r(jalaliDate(2022, 9, 26));
// Array
// (
//     [year] => 1401
//     [month] => 07
//     [day] => 04
// )
