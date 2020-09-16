<?
require_once 'connection.php';
$inv_id = $_REQUEST["InvId"];
$tm=getdate(time()+9*3600);
$date="$tm[year]-$tm[mon]-$tm[mday] $tm[hours]:$tm[minutes]:$tm[seconds]";

$my_crc = strtoupper(md5("$out_summ:$inv_id:$mrh_pass2:Shp_item=$shp_item"));
$link = mysqli_connect($host, $user, $password, $database) 
	        or die("Ошибкaа " . mysqli_error($link)); 
$update_status_sum = "UPDATE `user_info` SET `status` = '0' WHERE `user_info`.`id` = '".$inv_id."'";
mysqli_query($link, $update_status_sum);
$update_status_date = "UPDATE `user_info` SET `finish_date` = '$date' WHERE `user_info`.`id` = '".$inv_id."'";
mysqli_query($link, $update_status_date);

echo "Вы отказались от оплаты. Заказ# $inv_id\n";
echo "You have refused payment. Order# $inv_id\n";

?>


