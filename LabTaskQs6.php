<?php

 $arr= [1,2,3,4];
 $find=4;

 echo "The array: ", "<br>", "<br>";



 for ($i=0; $i<4; $i++)
 {
 	echo $arr[$i], " ", "<br>", "<br>";

 }
 echo "Element to be searched: ", " ", $find, "<br>", "<br>";

for ($i=0; $i<4; $i++)
{
 	if ($arr[$i]==$find)
 	{
 		echo $find, " ", "is in index no. ", $i;
 	}
 	
 }

?>