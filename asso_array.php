<?php
$age=array("ashmar"=>"35","anurag"=>"37","John"=>"43");
echo "anurag is " . $age['anurag'] . " years old.<br>";
// Other way of writing indexed array
$age['Peter']="35";
$age['Ben']="37";
$age['Joe']="43";
echo "Peter is " . $age['Peter'] . " years old.<br><br>";


// writing the content of array having position index and its corresponding value

//$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $x=>$x_value) {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
}

print_r($age);
?>