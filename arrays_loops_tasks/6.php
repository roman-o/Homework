 <meta charset="utf-8">
 
 <?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
	foreach ($arr as $k => $v){
	$en[] = $k;
	$ru[] = $v;
}

echo "<pre>";
print_r($en);
echo "</pre>";


echo "<pre>";
print_r($ru);
echo "</pre>";
