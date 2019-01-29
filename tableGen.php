<?php
  define ('DB_HOST', 'localhost'); // определяем хост
  define ('DB_USER', 'root'); // определяем пользователянты
  define ('DB_PASSWORD', ''); // пароль пользователя
  define ('DB_NAME', 'client_base'); // имя базы данных
  $mysqli = @new mysqli (DB_HOST, DB_USER, DB_PASSWORD , DB_NAME); // установить соединение
  if($mysqli->connect_errno) exit('Ошибка соединения с БД');
  $mysqli->set_charset('utf8'); // устранение проблем с кодировкой
  if (empty($_GET["searchString"])) {
      $result = $mysqli->query('SELECT * FROM `cb_orders`');
    }
  else {
    $reqvest = '"%'.$_GET['searchString'].'%"';
    $result = $mysqli->query("SELECT * FROM `cb_orders` WHERE `Заказчик` like $reqvest");
  }
      echo '<table class="table table-hover table-bordered">
             <div class="сustomers">
              <tr>
                  <td ><b>№</b></td>
                  <td><b>Заказчик</b></td>
                  <td><b>Дата заказа</b></td>
                  <td><b>Контактное лицо</b></td>
                  <td class="col-md-2"><b>Почта/телефон</b></td>
                  <td class="col-md-3"><b>Товары</b></td>
                  <td><b>Цена</b></td>
              </tr>
             </div>';
      while ($row = mysqli_fetch_array($result))
      {
          $pole1=$row[0];
          $pole2=$row[1];
          $pole3=$row[2];
          $pole4=$row[3];
          $pole5=$row[4];
          $pole6=$row[5]; //product
          $pole7=$row[6];
          echo "<tr>
                  <td>$pole1</td>
                  <td>$pole2</td>
                  <td>".date('j.m.Y (H:i)',$pole3)."</td>
                  <td>$pole4</td>
                  <td>$pole5</td>
                  <td>$pole6</td>
                  <td>$pole7</td>
                </tr>";
      }
  echo "</table>";
 ?>
