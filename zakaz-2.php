<?
require_once 'connection.php';
$path = 'photo/';
// Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
 // Загрузка файла и вывод сообщения
 if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']))
 echo 'Что-то пошло не так';
 else
 
	
	
	    // подключаемся к серверу
	    $link = mysqli_connect($host, $user, $password, $database) 
	        or die("Ошибкaа " . mysqli_error($link)); 
	    $url = 'http://mult.tstgrupp.tmweb.ru/photo/'.$_FILES['picture']['name'];
	    // экранирования символов для mysql
	    $url = htmlentities(mysqli_real_escape_string($link, $url));
	    $series = htmlentities(mysqli_real_escape_string($link, $_POST['seria']));
	    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
	    $phone = htmlentities(mysqli_real_escape_string($link, $_POST['phone']));
	    $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
	    $pol = htmlentities(mysqli_real_escape_string($link, $_POST['pol']));
	    $prich = htmlentities(mysqli_real_escape_string($link, $_POST['prich']));
	    $color_prich = htmlentities(mysqli_real_escape_string($link, $_POST['color_prich']));
	    $age = htmlentities(mysqli_real_escape_string($link, $_POST['age']));
	    $tm=getdate(time()+9*3600);
		$date="$tm[year]-$tm[mon]-$tm[mday] $tm[hours]:$tm[minutes]:$tm[seconds]";
	     
	    // создание строки запроса
	    $query ="INSERT INTO user_info VALUES(NULL, '$email', '$url', '$series', '', '$name', '$pol', '', '2', '$phone', '$age', '$date', '', '', '', '')";
	     
	    // выполняем запрос
	    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	   	$oredr_id = mysqli_insert_id($link);
	    if($result)
	    {

			// 2.
			// Оплата заданной суммы с выбором валюты на сайте ROBOKASSA
			// Payment of the set sum with a choice of currency on site ROBOKASSA

			// регистрационная информация (логин, пароль #1)
			// registration info (login, password #1)
			$mrh_login = "vmultike";
			$mrh_pass1 = "nhkIzNX1sm87JrM1haS9";

			// номер заказа
			// number of order
			$inv_id = $oredr_id;

			// описание заказа
			// order description
			$inv_desc = "ROBOKASSA Advanced User Guide";

			// сумма заказа
			// sum of order
			$out_summ = "1";

			// тип товара
			// code of goods
			$shp_item = "2";

			// предлагаемая валюта платежа
			// default payment e-currency
			$in_curr = "";

			// язык
			// language
			$culture = "ru";

			// формирование подписи
			// generate signature
			$crc  = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item");

			// форма оплаты товара
			// payment form
			print "<html>".
			      "<form action='https://auth.robokassa.ru/Merchant/Index.aspx' method=POST>".
			      "<input type=hidden name=MerchantLogin value=$mrh_login>".
			      "<input type=hidden name=OutSum value=$out_summ>".
			      "<input type=hidden name=InvId value=$inv_id>".
			      "<input type=hidden name=Description value='$inv_desc'>".
			      "<input type=hidden name=SignatureValue value=$crc>".
			      "<input type=hidden name=Shp_item value='$shp_item'>".
			      "<input type=hidden name=IncCurrLabel value=$in_curr>".
			      "<input type=hidden name=Culture value=$culture>".
			      "<input type=submit value='Pay'>".
			      "</form></html>";

	    }
	    // закрываем подключение
	    mysqli_close($link);
	
		


}

?>