<?php
$str = "VedouciPraceUlita";
$pass = hash("whirlpool", $str);

echo $pass;