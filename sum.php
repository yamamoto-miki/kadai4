<?php
$a = '<a h
$data = array("A", "B", "C");ref="http://google.com">Google</a>';
$result = strip_tags($a);
echo $result;

$data = array("A", "B", "C");
array_push($data, "D", "E");
print_r($data);

$data = array("Orange1" => "100", "Grape1" => "1000", "Orange2" => "800");
$add_data = array("Orange1" => "2000", "Orange2" => "600");
$result = array_merge($data, $add_data);
print_r($result);

$now = time();
print $now;

$timestamp = mktime(0, 0, 0, 25, 10, 2020);
print $timestamp;

$timestamp = time() + (60 * 60 * 24) * 7;
$next_week = date('Y年m月d日H時i分s秒', $timestamp);
print $next_week;
