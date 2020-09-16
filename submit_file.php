<?php
require_once 'connection.php';

if(isset($_POST['name'],$_FILES['file'])){
  // тут производим сохранение полученных из формы данных. С этой задачей, думаю, сможете справиться самостоятельно,
  // приведу в качестве примера просто возврат принятых сервером данных:
  // Загрузка файла и вывод сообщения
  $extension = end(explode(".", $_FILES['file']['name']));
  $newname = random_int (100000000000000,999999999999999);
  
  // $path = 'photo/';
  // if (!@copy($_FILES['file']['tmp_name'], $path . $_FILES['file']['name'])){
  //   echo 'Что-то пошло не так';
  // }
  // else{
    if (!@copy($_FILES['file']['tmp_name'], $newname.'.'.$extension)){
      echo 'Что-то пошло не так';
    } else{
      move_uploaded_file($_FILES['file']['tmp_name'],'photo/' . $newname.'.'.$extension);
    $link = mysqli_connect($host, $user, $password, $database) 
          or die("Ошибкaа " . mysqli_error($link)); 
      $url = 'http://'.$_SERVER['SERVER_NAME'] . '/photo/'.$newname.'.'.$extension;
      // экранирования символов для mysql 

      $url = htmlentities(mysqli_real_escape_string($link, $url));
      $series = htmlentities(mysqli_real_escape_string($link, $_POST['seria']));
      $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
      $phone = htmlentities(mysqli_real_escape_string($link, $_POST['phone']));
      $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
      $pol = htmlentities(mysqli_real_escape_string($link, $_POST['male']));
      $type = htmlentities(mysqli_real_escape_string($link, $_POST['type_hair']));
      $color_prich = htmlentities(mysqli_real_escape_string($link, $_POST['color_hair']));
      $age = htmlentities(mysqli_real_escape_string($link, $_POST['age']));
      $birthday = htmlentities(mysqli_real_escape_string($link, $_POST['BirthData']));
      $coupon = htmlentities(mysqli_real_escape_string($link, $_POST['coupon']));
      $tm=getdate(time()+9*3600);
      $date="$tm[year]-$tm[mon]-$tm[mday] $tm[hours]:$tm[minutes]:$tm[seconds]";
     
      // создание строки запроса
      // $query ="INSERT INTO user_info VALUES(NULL, '$email', '$url', '$series', '', '$name', '$pol', '1', '$color_prich', '$phone', '$age', '$date', '', '', '', '', '$coupon')";
      $query = "INSERT INTO user_info VALUES(NULL, '$email','$name','$pol','$age','$birthday', '$type', '$color_prich', '','','$series','$phone','$date','','$url', '', '' , '','$coupon')";
       
      // выполняем запрос
      $result = mysqli_query($link, $query) or die("Ошибка232 " . mysqli_error($link)); 
      $seria_cost = $_POST['seria_cost']; 
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
      $inv_desc = "OPLATA ZA 3D MULTIK";

      // сумма заказа
      // sum of order
      // $query2 = "SELECT `promo` from `Partners`";
      $query2 = "SELECT promo FROM Partners";
    //   // // выполняем запрос
       $result2 = mysqli_query($link, $query2) or die("Ошибка232 " . mysqli_error($link)); 
       //$rows = $result2->fetch_assoc();
 while ($row = mysqli_fetch_assoc($result2)) {
	//var_dump($row['promo']);
        if($row['promo'] == $coupon){
          $out_summ_val = intval($seria_cost)*0.5;
          $out_summ = strval($out_summ_val);
	$query3 = "UPDATE Partners SET counter = counter + 1 WHERE promo = '".$coupon."'";
//print_r($query3)
	$update_counter = mysqli_query($link, $query3);
        break 1;
        }
        else {
          $out_summ = $seria_cost;
          }
    }
    // print_r($out_summ);
      // if($coupon == 'multIBWHKKB5'){
      //   $out_summ = "250";
      // }
      // else {
      // $out_summ = "500";
      // }
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
      $req = "<html>".
            "<form class='form_pay' action='https://auth.robokassa.ru/Merchant/Index.aspx' method=POST>".
            "<input type=hidden name=MerchantLogin value=$mrh_login>".
            "<input type=hidden name=OutSum value=$out_summ>".
            "<input type=hidden name=InvId value=$inv_id>".
            "<input type=hidden name=Description value='$inv_desc'>".
            "<input type=hidden name=SignatureValue value=$crc>".
            "<input type=hidden name=Shp_item value='$shp_item'>".
            "<input type=hidden name=IncCurrLabel value=$in_curr>".
            "<input type=hidden name=Culture value=$culture>".
            "<input type=submit value='Pay'>".
            "</form></html>
            <script>$('.form_pay').submit();</script>";

      }
      echo json_encode($req);
      // закрываем подключение
      mysqli_close($link);
      exit;
  }
}
?>
