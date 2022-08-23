<?php
//3．数値の入った配列を引数として受け取り、配列内の要素をすべて二倍にして配列として返却するdubleArr関数。
//ただし引数が配列でなかった場合はfalseを返却すること

$result = dubleArr(array(1,2,3));

// 引数に配列以外を渡した場合
if (!$result) {
    echo "引数が不正です!";
    return;
}

foreach ($result as $num) {
    echo $num;
    echo "\n";
}
//++++++++++++ここまでは変更しない+++++++++++++++++++++

/**
引数として受け取った配列の数値をすべて2倍にして返却する
**/
function dubleArr($numbers) {
    // ↑必要な引数は自身で定義すること↑
    //　ここから下に処理を記述する
    
    // TODO 引数が配列型であるか判定する
    // TODO 配列でなければfalseを返却し関数の処理を終える
    
    // TODO 結果返却用の空配列を定義する
    // TODO 配列の中身をループで１つずつ取り出し、２倍にして結果返却用に詰める
    $array = array();
    foreach($numbers as $number){
        $number * 2;
    }
    // TODO 結果返却用をreturnする
    
}
?>