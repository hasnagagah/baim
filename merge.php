<?php

$strings=array('KjgWZC', 'arf12');

$string=$_GET['alphabet'];
$quantity=$_GET['quantity'];

if(ctype_alpha($string))
{
	print_r(str_split($string,$quantity));	
	echo "<br><br><br>";

	$strings=str_split($string,$quantity);

	foreach($strings as $result)
	{
		$result=count_chars($result,3);

	echo $result."<br>";
	}

	echo "<br><b><br>";




}
else echo "Harus alphabet.<br><br>";

foreach ($strings as $testcase) {
    if (ctype_alpha($testcase)) {
        echo "The string $testcase consists of all letters.\n";
    } else {
        echo "The string $testcase does not consist of all letters.\n";
    }
}




?>
