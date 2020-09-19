<?php
$array_month = ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'];
echo $array_month[7] . "\n";

echo 'hello php';
echo "\n";

$name = 'moriyama';
if($name == 'moriyama') {
    echo "「私は あなたの名前 です」";
} else {
    echo"「あなたの名前ではありません」";
}
echo "\n";


$total = 0;
for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";

$fruits = array("apple", "peach" , "orange" , "kiwi" , "mango") ;
foreach($fruits as $fruit) { 
    echo "要素は" . $fruit;
  
}



$start = 1;
$end = 100;

for ($i = $start; $i <= $end; $i++){
  if($i % 5 == 0) {
    echo $i;
    echo "\n";
  }
}

  
 