 
 <meta charset="utf-8">
 <?php
 $a = 20;
 $b = 14;
 $operator = "%";
 

 
 if ($operator == "+"){
	 echo $a + $b;
 }
 if ($operator == "-"){
	 echo $a - $b;
 }
 if ($operator == "*"){
	 echo $a * $b;
 }
 if ($operator == "/"){
	 if ($b == 0){echo "ошибка, на ноль делить нельзя";}
	 else {echo $a / $b;}
 }
 if ($operator == "%"){
	 if ($b == 0){echo "ошибка, на ноль % нельзя";}
	 else {echo $a % $b;}
 }
 