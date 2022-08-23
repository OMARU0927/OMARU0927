<?php
//2．引数として受け取った値が数値であればtrueをそれ以外ならfalseを返却するisNumber関数。
//数値とはinteger型またはdouble型を指す

//++++++++++++ここから+++++++++++++++++++++
$val = 100;
if (isNumber($val)) {
  echo "valは数字です";
} else {
  echo "valは数字ではありません";
}
//++++++++++++ここまでは変更しない+++++++++++++++++++++

/**
引数が数値が数値であるか判定する
**/

function isNumber() {
    // ↑必要な引数は自身で定義すること↑
    //　ここから下に処理を記述する
    $val = 100;
    if (is_numeric($val)) {
        echo "valは数字です";
    } else {
        echo "valは数字ではありません";
    }
}
isNumber()
?>