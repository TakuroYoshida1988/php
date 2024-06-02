<?php
$company = htmlspecialchars($_POST['company'], ENT_QUOTES);
$shohin = htmlspecialchars($_POST['sho'], ENT_QUOTES);
$num = htmlspecialchars($_POST['num'], ENT_QUOTES);
print "会社名は" . $company . "ですね" . "<br>";
print "ご希望の商品は" . $shohin . "ですね" . "<br>";
print "数量は" . $num . "ですね";