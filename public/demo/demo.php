<?php
/**
 * Created by PhpStorm.
 * User: apply
 * Date: 2017/5/27
 * Time: 11:46
 */
//echo phpinfo();
$a = 100;
$b=gettype($a);
$c = &$b;
echo $c;
echo $b;

$b = 5;
echo $c;
echo $b;

unset($b);
echo $c;
echo $b;

$b = 10;
echo $c;
echo $b;
?>