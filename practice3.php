<?php
//　PHP/Laravel 04 関数を理解しよう　
//課題1 引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function sum($max) {
    $result= $max *2;
    return $result;
}
    echo sum(510);
    echo "\n";
    
//課題2 $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a, $b) {
    $result = $a + $b ;
    return $result;
}
echo f(20,25);
echo "\n";

//課題3 $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function number($arr) {
    $arr =array(1, 3, 5, 7, 9);
    $result = 1;
    foreach($arr as $value) {
    $result *= $value;
    }
    echo $result;
 }
    number(array(1,3,5,7,9));
    echo"\n";
    
    //課題4　応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
    function max_array($arr) {
    //とりあえず配列の最初の要素を一番大きい値にする
    $max_number = $arr[0];
    foreach($arr as $a) {
        if ($max_number < $a){
            $max_number = $a ;
        }
    }
    return $max_number;
    }
    $max = max_array(array(2,5,9,45,3,43,23));
    echo $max ;
    echo "\n";
    
//課題5
//strip_tags
$str = "<h1>Hello world.</h1>" . 
"<h2>tech boostへようこそ！</h2>";
echo strip_tags($str);
echo "\n" ;

//array_push
$week=array("Monday","Tuesday","Wednesday","Thursday");
array_push($week,"Friday","Saturday","Sunday");
print_r ($week);


//array_merge
$animals1 = ["dog","cat","horse"];
$animals2 = ["bear","tigar","pig"];
$animal = array_merge($animals1, $animals2);
print_r($animal);

//time, mktime
echo time();
echo "\n";

echo mktime(6,17,17,6,17,1997);
echo "\n";

//date
date_default_timezone_set("Asia/Tokyo");
echo date("Y/m/d h:i:s:") . "\n";

