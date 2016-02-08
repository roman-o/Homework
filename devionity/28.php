 
 <meta charset="utf-8">

 <?php
 if (empty($_POST['name'])) {
	 echo '  <form action="28.php" method="post">
 Ваше имя:       <input type="text" name="name"/><br>
 Ваш емайл:      <input type="text" name="email"/><br>
 Ваш телефон:	 <input type="text" name="phone"/><br>
    <input type="submit"/> ';}
 else {echo "Добрый день ".$_POST['name'].", Мы свяжимся с Вами по телефону: ".$_POST['phone']."или по емайл: ".$_POST['email'];}
 
 
 