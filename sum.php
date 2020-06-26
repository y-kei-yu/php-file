<?php
// 1~10までを足した値を返す変数
function sum($max) {
    
    //result は結果を保存する変数
    $result =0;
    
    //$iは1から始まり$maxより大きくなるまでループする
    for($i = 1; $i <=$max; $i++) {
        
        //$resultに$iを順番に足していく
        $result += $i;
    }
    
            //$resultを結果として返す
    return $result;
}
//関数を実行する
echo sum(100);

echo "課題3 = ";
function outputMultiplication($arr){
     $result = 1;
     foreach($arr as $a){
    $result *= $a;
  }
  echo $result;
}
outputMultiplication(array(1, 3, 5 ,7, 9));
echo "\n";
