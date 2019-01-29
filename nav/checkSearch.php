<?php
  define ('DB_HOST', 'localhost'); // определяем хост
  define ('DB_USER', 'root'); // определяем пользователянты
  define ('DB_PASSWORD', ''); // пароль пользователя
  define ('DB_NAME', 'client_base'); // имя базы данных
  $mysqli = @new mysqli (DB_HOST, DB_USER, DB_PASSWORD , DB_NAME); // установить соединение
  if($mysqli->connect_errno) exit('Ошибка соединения с БД');
  $mysqli->set_charset('utf8'); // устранение проблем с кодировкой
  $existing_customers = array();
  $result = $mysqli->query("SELECT `Заказчик` FROM `cb_orders`");
  while($myrow = mysqli_fetch_array($result)) {
  $existing_customers[] = $myrow['Заказчик'];
  }
  for ($i=0;$i<count($existing_customers);$i++){
    $existing_customers[$i];
  }
  if (!in_array($_POST["search"], $existing_customers)) echo "error";
?>
