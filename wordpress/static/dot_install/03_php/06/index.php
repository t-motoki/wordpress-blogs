<?php
require_once("function.php");

//  数値型の演算

// 四則演算: + - * / % **
echo "①四則演算 + - * / % **";
echo "<hr>";
$x = 10 % 3;
$y = 30.2 / 4;
var_dump($x); br();
var_dump($y); br(); br();

// 単項演算子 ++ --
echo "②単項演算子 ++ --";
echo "<hr>";
$z = 5;
$z++;
var_dump($z); br();
$z--;
var_dump($z); br(); br();

// 代入を伴う演算子
echo "③代入を伴う演算子";
echo "<hr>";
$w = 5;
$w *= 2;
var_dump($w);
