<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
$today = date('D d/m/Y h:i:s');
echo "Hôm nay là: ".$today."<br>";
$threeDayAgo = strtotime("-3 day");
echo "3 ngày trước là: ". date("D d-m-Y h:i:s", $threeDayAgo)."<br>";
$threeDayAfter = strtotime("+3 day");
echo "3 ngày sau là: ". date("D d-m-Y h:i:s", $threeDayAfter)."<br>";
$one_later_month = strtotime("+1 month");
echo "1 tháng sau là: ". date("D d-m-Y h:i:s", $one_later_month)."<br>";

$hours = date("h");
$minute = date("i");
$second = date("s");
$one_year_ago = date("Y",strtotime("-1 year"));
$designated_time = mktime($hours,$minute,$second,9,20,$one_year_ago);
echo "Giờ này vào ngày 20-9 của 1 năm trước là: ".date("D d-m-Y h:i:s", $designated_time);