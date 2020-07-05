<?php
function twotimes($a){
return $a*2;
}
echo twotimes();
?>


// 課題2 //
<p php
function sum($a,$b){
 return  = $a + $b ;
}
echo sum();

?>
    

// 課題3 //


<?php function multiplication($arr){
    $arr = array("1","3","5","7","9");
    foreach($arr as $array)
    return ;
}
echo multiplication()*$arr;
?>





//　課題4 //

<?php function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
    if($max_number < $arr){
    echo $arr;
    }
    }
    return $max_number;
}

//  課題５//


* strip_tags
文字列から HTML および PHP タグを取り除く
strip_tags ( string $str [, mixed $allowable_tags ] ) : string

* array_push
一つ以上の要素を配列の最後に追加する
array_push ( array &$array [, mixed $... ] ) : int

* array_merge
ひとつまたは複数の配列を※マージする
※一つに統合すること
array_merge ([ array $... ] ) : array 
* time, mktime
日付を Unix のタイムスタンプとして取得する
mktime ([ int $hour = date("H") [, int $minute = date("i") [, int $second = date("s") [, int $month = date("n") [, int $day = date("j") [, int $year = date("Y") [, int $is_dst = -1 ]]]]]]] ) : int


* date
ローカルの日付/時刻を書式化する
date ( string $format [, int $timestamp = time() ] ) : string
