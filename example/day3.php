<?php
小括號 () 裡面放的是條件
大括號 {} 裡面放的是要做的事
如果 ( 下雨 ) { 就帶傘 }
$weather = "rainning";
if($weather == "rainning") { echo "bring an umbrella"; }
if( 裡面專門放條件 )
條件的比較用兩個等號 == 代表相等，如果想判斷是否不相等用 !=
這句的意思是 這個變數天氣 等於 字串 "下雨"
如果要做的事情很多，我們習慣這樣寫比較整齊：
if($weather == "rainning") {
  echo "bring an umbrella";
  echo "wear a raincoat";
  echo "wear rain boots";
  那有如果我要寫不下雨的情況呢？
可以加上 else 稱 否則
if($weather == "rainning") {
  echo "bring an umbrella";
  echo "wear a raincoat";
  echo "wear rain boots";
}else{
  echo "yeah~~~~happy";
  echo "streaking";
}
.
$weather = "sunny";
if($weather = "raining"){
   echo "No, it is ".$weather;
}else{
   echo "Yeah, it is ".$weather;
}
?>

