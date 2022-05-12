<?php

# 变量定义需要以 $ 进行标记

/**
 * 变量以 $ 符号开始，后面跟着变量的名称
 * 变量名必须以字母或者下划线字符开始
 * 变量名只能包含字母、数字以及下划线（A-z、0-9 和 _ ）
 * 变量名不能包含空格
 * 变量名是区分大小写的（$y 和 $Y 是两个不同的变量）
 */

$a = 3;
$b = 4;

echo $a;
echo $b;
echo $a.$b;

/**
 * 变量的默认值：
 *      不确定类型：null
 *      数值：0
 *      字符串：空字符串
 *      布尔类型：false
 *      数组：0
 */

/**
 * 可变变量：把一个变量的值作为另一个变量来使用
 */
echo "<br />";
$name = 'tom';
$tom = '汤姆';
echo $name;
echo $tom;
echo $$name; // 将 $name 的值，作为变量名来使用，引用新的变量


/**
 * 常量：值不变的量
 */
echo "<br />";
define('const_var', 'ttttt');
echo const_var;

/**
 * var_dump(xxx)  输出变量信息
 */
echo "<br>";
var_dump($name); // 会直接输出，不需要再用 echo


