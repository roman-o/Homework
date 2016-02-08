 <meta charset="utf-8">
 
 <?php
 
$arr = array ('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
echo "<p>столбец ключей</p>";
foreach ($arr as $k => $v){
	echo $k."<br>";}
echo "<p>столбец элементов</p>";
foreach ($arr as  $v){
	echo $v."<br>";}