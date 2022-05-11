<?php

$a = true;
$b = false;

$num = 1;

$float = 1.233;


/**
 * 单引号和双引号都可以作为字符串
 * 但是单引号中的内容不会被解析
 * 即单引号是最快的，双引号相当于可以引用外部的变量
 * 复杂情况可以用大括号包起来
 */
$str1 = 'Hello World $num';
$str2 = "Hello World $num";
$str3 = <<<EOD
多行字符串 <br />
多行字符串 <br />
多行字符串 <br />
EOD;

echo $str3;




