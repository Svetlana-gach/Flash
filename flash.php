<?php
Class Flash{

	
	public static function set($name, $massage){ //записать в сессию
	$_SESSION['name'] = $name;
	$_SESSION['massage'] = $massage;
}

	public static function display(){ //отображает сообщение и сразу удаляет значение из сессии
	if (isset($_SESSION["name"])){
		$name = $_SESSION['name'];
		echo "<div class=\"alert alert-{$name} text-dark\" role=\"alert\">{$_SESSION['massage']}<div>";
        unset($_SESSION['name']);
        unset($_SESSION['massage']);
	}
}


}
?>