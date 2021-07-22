<!-- Author Mamichev Alexandr-->
<!-- date 22.07.2021 -->
<?php
//просто класс
	class City
	{
//функция подключения к базе данных
		public function db_connect()
		{
			global $connection;
			$connection = new mysqli('localhost','root','root','niris');
   		}
//функция добавления записей в базу данных
		public function insert()
		{
			global $connection;
			$insert ="INSERT INTO city (name) VALUES ('".$_POST['name']."')";
			if($connection->query($insert) === true)
				{
				}else
				{
					echo"Такой город уже присутствует";
					echo $this->connection->error;
				}
		}
//выборка информации из базы данных
		public function select()
		{
			global $connection;
			$select = "SELECT * FROM city";
			$info = mysqli_fetch_all($connection->query($select));
			echo "<table class='table'><tr><td class='table'>Города:</td><tr>";
			foreach($info as $key => $value) {
				echo "<tr><td class='table'>$value[1]</td></tr>";
			}
			echo"</table>";
		}
	}
//создаём новый экземпляр класса и подключаемся к бд
	$model = new city;
	$model->db_connect();
//проверка на то, отправленно ли что-то в форме
	if(ISSET ($_POST['name'])&& $_POST['name'] !=""){
		$model = new city;
		$model->insert();
	}

