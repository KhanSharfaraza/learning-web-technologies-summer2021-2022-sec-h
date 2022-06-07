<?php
 $num1 = 20;
 $num2 = 15;
 $num3 = 18;

 if ($num1>$num2 && $num1>$num3)
{
  echo "The largest number from three given numbers is: ", $num1, "<br>", "<br>";  
}
else if ($num2>$num1 && $num2>$num3)
{
  echo "The largest number from three given numbers is: ", $num2, "<br>", "<br>"; 
}
else
{
  echo "The largest number from three given numbers is: ", $num3, "<br>", "<br>"; 
}

?>