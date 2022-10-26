# PHP Jalali Date

A tiny code to convert date into **Jalali calendar** using Pure PHP code without extra library and code.

## Using

```php
array jalaliDate(?int $year, ?int $month, ?int $day)
```

## Default Timezone

```
date_default_timezone_set('Asia/Tehran');
// OR
date_default_timezone_set('America/New_York');
```

## Examples

First you need to include the library by `include "src/JalaliDate.php";` next:

```php
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
```

## Related Repository

You can see the solution algorithm for most programming languages at [here](https://github.com/BaseMax/gregorian_to_jalali).

https://github.com/BaseMax/gregorian_to_jalali

---------

# Max Base

My nickname is Max, Programming language developer, Full-stack programmer. I love computer scientists, researchers, and compilers. ([Max Base](https://maxbase.org/))

## Asrez Team

A team includes some programmer, developer, designer, researcher(s) especially Max Base.

[Asrez Team](https://www.asrez.com/)
