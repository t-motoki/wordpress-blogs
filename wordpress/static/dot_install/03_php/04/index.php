<?php

  /*
    変数:データに付けるラベル(名前)
    データ型:
     - 文字列 string
     - 数値: integer(整数) float(浮動小数点)
     - 論理値 boolean / true false
     - 配列
     - オブジェクト
     - null
  */

  $msg = "hello from the TOP!";
  $num = 12;
  $jude = false;

  echo $msg;
  br();
  var_dump($msg);
  br();
  var_dump($num);
  br();
  var_dump($jude);
//  br();


  function br(){
    echo nl2br("\n");
  }
