<?
	require_once 'connection.php';
	if(1==1){
 
	    // подключаемся к серверу
	    $link = mysqli_connect($host, $user, $password, $database) 
	        or die("Ошибкaа " . mysqli_error($link)); 
	     
	    // экранирования символов для mysql
	    $name = htmlentities(mysqli_real_escape_string($link, 'name'));
	    $company = htmlentities(mysqli_real_escape_string($link, 'company'));
	     
	    // создание строки запроса
	    $query ="INSERT INTO user_info VALUES(NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
	     
	    // выполняем запрос
	    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	    if($result)
	    {
	        echo "<span style='color:blue;'>Данные добавлены</span>";
	    }
	    // закрываем подключение
	    mysqli_close($link);
	}
?>
?>