 <meta charset="utf-8">
<?php
$name = "Roman";
$age = "18" ;

if (is_numeric($age) ){
    if ($age >= 18 && $age <= 59  ) {
	echo "Вам еще работать и работать";
    }
elseif ($age > 59){
	echo "Вам пора на пенсию";
    }
elseif ($age >= 0 && $age <= 17){
    echo "Вам еще рано работать";
    }	
elseif ($age < 0 ){
    echo "Неизвестный возраст";	
    }
}
else {
	echo "Неизвестный возраст";
}

	
	
	
	
	
	