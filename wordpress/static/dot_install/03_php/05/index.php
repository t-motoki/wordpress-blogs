<?php
require("function.php");

/*
  定数:変更されない値につけるラベル
*/
define("MY_EMAIL","t.motoki51@gmail.com");

echo MY_EMAIL;
br();
br();

// 固定の定数一覧
var_dump(__LINE__);  // 行数
br();
var_dump(__FILE__);  // ファイル名(場所も)
br();
var_dump(__DIR__);   // ディレクトリ(場所も)
