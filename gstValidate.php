<?php

# GST NUMBER VALIDATION SCRIPT 

$testcase =  "TEST GST";
$l = ltrim($testcase," ");
$r = rtrim($l," ");
$testcase = $r;
if(preg_match("/^(0[1-9]|[1-2][0-9]|3[0-5])([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}([a-zA-Z0-9]){1}([a-zA-Z]){1}([0-9]){1}?$/", $testcase)) {
   echo  $gst = 1;
}elseif(!preg_match("/^(0[1-9]|[1-2][0-9]|3[0-5])([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}([a-zA-Z0-9]){1}([a-zA-Z]){1}([0-9]){1}?$/", $testcase)){
   echo  $gst = 0;
}


?>
