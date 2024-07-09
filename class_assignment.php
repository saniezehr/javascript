<?php
$data=[
["ahmed","ahmed@gmail.com",20],
["sani","sani@gmail.com",20],
["iqra","iqra@gmail.com",20],
["ali","ali@gmail.com",20],
["faizan","faizan@gmail.com",20],
["ghazi","ghazi@gmail.com",20],
["haider","haider@gmail.com",20],
["miraal","miraal@gmail.com",20],
["mahnoor","mahnoor@gmail.com",20],
["daniyal","daniyal@gmail.com",20]
   
];

$new=10;

foreach ($data as $value) {
    if($new==0){

    }
    else{
    echo $value[0] . ' ' . $value[1] . ' ' . $value[2] . "<br>";
}
$new;
}

$data=[
    "name"=>"sani",
"email "=>"sani@gmail.com",
"age"=> 16
];
//echo $data["name"]
foreach ($data as $count){
    echo $count;
}
?>