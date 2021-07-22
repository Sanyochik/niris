<!-- Author Mamichev Alexandr-->
<!-- date 22.07.2021 -->
<?php
//вызов класса
require_once ('models/city.php');
//создание нового экземпляра класса
$model= new city;
?>
	<html>
	  <head>
<!--подключение css-->
	    <meta charset="utf-8">
	    <link href="/css/style.css" rel="stylesheet">
	    <script src="/js/script.js"></script>
	  </head>
	  <body>
<!-- вывод информации из бд-->
	  	<?= $model->select();?>
<!-- форма для добваления новой записи-->
	  	  <div class="form" onsubmit="validate()">
	      	<form name="form" url="/models/city.php" method="post">
	        	<input id="name" name="name" type="text"  pattern="^[A-Za-zА-Яа-я, \.\(\)\-]{2,80}$">
	        	<input type="submit">
	      	</form>
	      </div>
	</html>