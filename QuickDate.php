<?php
//Always use UTC!
date_default_timezone_set('UTC');

//Date syntax:
//yyyy-mm-ddThh:mm:ssZ_"day of week(1==monday)"
//2013-12-29T20:24:45Z_7
//2013-12-30T12:12:09Z_1
//2014-01-06T09:05:03Z_1

//So this string has always 22chars
// 2013-12-30 T 12:12:09 Z_1
// |   10   | 1 |  8   |  3  => 22

echo date("Y-m-d");
echo "T";
echo date("H:i:s");
echo "Z_";
echo date("N");

//Links
//http://www.php.net/manual/en/function.date.php
//http://en.wikipedia.org/wiki/ISO_8601
?>
