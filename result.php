<?
require_once 'connection.php';
// регистрационная информация (пароль #2)
// registration info (password #2)
$mrh_pass2 = "Ds0VMxN6s3adZCqi3S4t";

//установка текущего времени
//current date
$tm=getdate(time()+9*3600);
$date="$tm[year]-$tm[mon]-$tm[mday] $tm[hours]:$tm[minutes]:$tm[seconds]";

// чтение параметров
// read parameters
$out_summ = $_REQUEST["OutSum"];
$inv_id = $_REQUEST["InvId"];
$shp_item = $_REQUEST["Shp_item"];
$crc = $_REQUEST["SignatureValue"];
$crc = strtoupper($crc);

$my_crc = strtoupper(md5("$out_summ:$inv_id:$mrh_pass2:Shp_item=$shp_item"));

// проверка корректности подписи
// check signature
if ($my_crc != $crc)
{
  echo "bad sign\n";
  exit();
}

// признак успешно проведенной операции
// success
$link = mysqli_connect($host, $user, $password, $database) 
	        or die("Ошибкaа " . mysqli_error($link)); 
$update_status_sum = "UPDATE `user_info` SET `status` = '1' WHERE `user_info`.`id` = '".$inv_id."'";
$update_status_date = "UPDATE `user_info` SET `finish_date` = '$date' WHERE `user_info`.`id` = '".$inv_id."'";
mysqli_query($link, $update_status_sum);
mysqli_query($link, $update_status_date);

echo "OK$inv_id\n";


?>


