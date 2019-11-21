<?php
echo "Hello World"; 
?>


$value=3;
switch($value){
  case 1:
    echo "ゴールドです。";
    break;

  case 2:
    echo "シルバーです。";
    break;

  case 3:
    echo "ブロンズです。";
    break;

  default:
    echo "資格なしです。";
}


$val=array("AAA","BBB");

echo $val[1];


<?php
$val=array("バラ","コスモス","ヒマワリ");

unset($val[0]);

echo $val[0];

?>


unset($val[1]);

echo $val[1]