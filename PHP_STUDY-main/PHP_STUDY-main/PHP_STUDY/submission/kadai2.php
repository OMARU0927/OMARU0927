<?php
// 問題
// ループを使い1から100までを表示するプログラムを書きなさい
//ただし、一列に表示する数字の数は１０個とし、それ以降は改行すること
$i = 1;
while ($i < 101) {
    if ($i % 10 == 0){
    echo "$i \n";
    $i++;
    } else{
    echo "$i ";
    $i++;
    }
}
?>