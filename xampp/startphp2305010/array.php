<?php

$colors =array("Apple"=>"red","plant"=>"green","sky"=>"blue");

foreach($colors as $value){
    echo " $value <br> ";
}

$color1 =array("1"=>"red",2=>"green","sky"=>2,3=>3);

foreach($color1 as $key => $value){
     echo $key."==>".$value."<br>";
}

echo"<pre>";
print_r($colors);
echo"</pre>";
?>
