<?php
$data="hello world 2";
// length
echo strlen($data );
echo"<br>";
// word count
echo str_word_count($data );
echo"<br>";

//explode
$data2="index.php";
$filename=explode(".",$data2);
print_r($filename);
echo$filename[count($filename)-1];
echo"<br>";

//
// implode
$data3=["hello","world"];
echo implode(" ",$data3);
echo"<br>";

$data4="hello world";
// reverse
echo strrev($data4);
echo"<br>";

// uppercase
echo ucwords($data4);
echo"<br>";

// replace
echo str_replace("hello" , "hi" , $data4);

?>