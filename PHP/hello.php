<?php
$sMd5 = md5('C1453E6F6D166659DC3087DD0C540EB7');

$mod = hexdec(substr($sMd5, -4)) % 100;

echo $mod;
