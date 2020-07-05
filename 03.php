
<?php echo 'hello php!';
 $name = "Hiroki";
 if($name = "Hiroki"){
     echo " 私はあなたの名前です";
 }else{
     echo "あなたの名前ではありません";
 }
 
for( $i = 0; $i <= 10000 ; $i++ ){
     $total += $i;
 }
  echo $total;
  
 $fruits = array("banana","lemon","acerala","avocado","cherry");
 foreach($fruits as $fruit){
 echo  $fruits;
 }
 
 


//応用
$start = 1;

$end = 100;

for($i = $start; $i <$end; $i++){

  
  if($i % 5 == 0){
    echo $i;
  }
}