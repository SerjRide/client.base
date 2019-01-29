<!DOCTUPE HTML>
<html>
<head>
    <title>Клиентская База</title>
    <meta http-equiv="Content-Type" content="text/html; charset=uth-8" />
    <meta name="description" content="Моя статистика" />
    <meta name="keywords" content="Моя статистика" />
    <link href="http://mysite.local/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link type="text/css" rel="stylesheet" href="http://client.base/css/main.css">
</head>
<body>
<?=file_get_contents("http://client.base/nav/nav.php")?>
<div class="container-fluid">
<div class="collapse row" id="addOrderPanel"  >
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading"><b>Добавить заказ</b></div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-6">
            <div class="panel panel-info">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-6">
                      <label for="client">Заказчик <span class="text-danger">*</span></label>
                      <input class="form-control" type="text" name="client" required/>
                      <label for="client">Контактное лицо <span class="text-danger">*</span></label>
                      <input class="form-control" type="text" name="contact" required/>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Почта / Телефон <span class="text-danger">*</span></label>
                      <input class="form-control" type="text" name="email" required/>
                      <label for="client">Товар <span class="text-danger">*</span></label>
                      <select class="form-control" type="text" name="product" required>
                        <option></option>
                        <option value="book">Буклеты</option>
                        <option value="vis">Визитки</option>
                        <option value="fly">Листовки</option>
                        <option value="lay">Макет</option>
                        <option value="posters">Плакаты</option>
                        <option value="stamp">Печати</option>
                        <option value="stamps">Штампы</option>
                        <option value="table">Таблички</option>
                        <option value="wform">Широкоформатка</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Изначально скрытые меню -->
          <!-- Визитки -->
          <div class="col-md-6" id="visForm" style="display:none">
              <div class="panel panel-info">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="visTech">Технология печати</label>
                        <select class="form-control" name="visTech" action="#">
                          <option>Цифровая печать</option>
                          <option>Офсетная печать</option>
                        </select>
                        <label for="visCount">Количество</label>
                        <select class="form-control" name="visCount">
                          <option>50</option>
                          <option>100</option>
                          <option>200</option>
                          <option>300</option>
                          <option>400</option>
                          <option>500</option>
                          <option>600</option>
                          <option>700</option>
                          <option>800</option>
                          <option>900</option>
                          <option>1000</option>
                          <option>2000</option>
                        </select>
                        <label for="visFormat">Формат</label>
                        <select class="form-control" name="visFormat">
                          <option>90х50</option>
                          <option>85х55</option>
                          <option>Другой формат</option>
                        </select>
                      </div>
                   <div class="col-md-4">
                     <label for="visPaper">Бумага</label>
                     <select class="form-control" name="visPaper">
                       <option>Обычная</option>
                       <option>Лён-Слоновая кость</option>
                       <option>Лён-Бриллиант</option>
                       <option>touch-cover</option>
                     </select>
                     <label for="visColor">Цветность</label>
                     <select class="form-control" name="visColor">
                      <option>1+0</option>
                      <option>1+1</option>
                      <option>4+0</option>
                      <option>4+4</option>
                    </select>
                   </div>
                   <div class="col-md-4">
                     <label for="visLam">Ламинация</label>
                     <select class="form-control" name="visLam">
                       <option></option>
                       <option>Матовая</option>
                       <option>Глянцевая</option>
                     </select>
                    <label for="visCorners">Скругление углов</label>
                    <input class="checkbox" type="checkbox" name="visCorners" value="true">
                   </div>
                   <div class="col-md-4">
                     <br/><br/>
                     <input class="form-control btn btn-info addProduct" type="button" name="addVis" value="Добавить"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Листовки -->
          <div class="col-md-6" id="flyForm" style="display:none">
              <div class="panel panel-info">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="flyTech">Технология печати</label>
                        <select class="form-control" name="flyTech">
                          <option>Цифровая печать</option>
                          <option>Офсетная печать</option>
                        </select>
                        <label for="flyCount">Количество</label>
                        <select class="form-control" name="flyCount">
                          <option>50</option>
                          <option>100</option>
                          <option>200</option>
                          <option>300</option>
                          <option>400</option>
                          <option>500</option>
                          <option>600</option>
                          <option>700</option>
                          <option>800</option>
                          <option>900</option>
                          <option>1000</option>
                          <option>2000</option>
                        </select>
                   </div>
                   <div class="col-md-4">
                    <label for="flyColor">Цветность</label>
                    <select class="form-control" name="flyColor">
                      <option>1+0</option>
                      <option>1+1</option>
                      <option>4+0</option>
                      <option>4+4</option>
                    </select>
                    <label for="flyFormat">Формат листовки</label>
                    <select class="form-control" name="flyFormat">
                      <option>A6, 105x148 мм</option>
                      <option>A5, 148x210 мм</option>
                      <option>A4, 210x297 мм</option>
                      <option>210x98 мм</option>
                      <option>150x70 мм</option>
                    </select>
                   </div>
                   <div class="col-md-4">
                     <label for="flyPaper">Бумага</label>
                     <select class="form-control" name="flyPaper">
                       <option>130 г/м² глянц.</option>
                       <option>170 г/м² глянц.</option>
                       <option>300 г/м² глянц.</option>
                     </select>
                    <label for="flyCorners">Скругление углов</label>
                    <input class="checkbox" type="checkbox" name="flyCorners" value="true">
                    <br/><br/>
                    <input class="form-control btn btn-info addProduct" type="button" name="addFly" value="Добавить"/>
                   </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- Буклеты -->
          <div class="col-md-6" id="bookForm" style="display:none">
              <div class="panel panel-info">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="bookTech">Технология печати</label>
                        <select class="form-control" name="bookTech">
                          <option>Цифровая печать</option>
                          <option>Офсетная печать</option>
                        </select>
                        <label for="bookCount">Количество</label>
                        <input class="form-control" type="number" min="1" name="bookCount" value="50"/>
                      </div>
                   <div class="col-md-4">
                     <label for="bookScor">Беговка</label>
                     <select class="form-control" name="bookScor">
                       <option>Книжка</option>
                       <option>Евробуклет</option>
                     </select>
                    <label for="bookColor">Цветность</label>
                    <select class="form-control" name="bookColor">
                      <option>1+0</option>
                      <option>1+1</option>
                      <option>4+0</option>
                      <option>4+4</option>
                    </select>
                   </div>
                   <div class="col-md-4">
                     <label for="bookPaper">Бумага</label>
                     <select class="form-control" name="bookPaper">
                       <option>130 г/м² глянц.</option>
                       <option>170 г/м² глянц.</option>
                       <option>300 г/м² глянц.</option>
                     </select>
                    <label for="visCorners">Скругление углов</label>
                    <input class="checkbox" type="checkbox" name="bookCorners" value="true">
                    <br/><br/>
                    <input class="form-control btn btn-info addProduct" type="button" name="addBook" value="Добавить"/>
                   </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- Макет -->
          <div class="col-md-6" id="layForm" style="display:none">
              <div class="panel panel-info">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="layProduct">Продукт</label>
                        <select class="form-control" name="layProduct">
                          <option>Буклет</option>
                          <option>Визитка</option>
                          <option>Листовка</option>
                          <option>Плакат</option>
                          <option>Печать</option>
                          <option>Штамп</option>
                          <option>Табличка</option>
                          <option>Широкоформатка</option>
                        </select>
                   </div>
                   <div class="col-md-4">
                     <label for="layDif">Сложность</label>
                     <select class="form-control" name="layDif">
                       <option>Лёгкий (По образцу)</option>
                       <option>Средний (C нуля)</option>
                       <option>Сложный</option>
                     </select>
                   </div>
                   <div class="col-md-4">
                     <label for="layFixPrice">Фикс. цена, руб.</label>
                     <input class="form-control" type="number" min="0" name="layFixPrice"/>
                    <br/>
                    <input class="form-control btn btn-info addProduct" type="button" name="addLay" value="Добавить"/>
                   </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- Плакаты -->
          <div class="col-md-6" id="postForm" style="display:none">
              <div class="panel panel-info">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="postCount">Количество</label>
                        <input class="form-control" type="number" min="1" name="postCount" value="1"/>
                   </div>
                   <div class="col-md-4">
                     <label for="postPaper">Бумага</label>
                     <select class="form-control" name="postPaper">
                       <option>130 г/м² глянц.</option>
                       <option>170 г/м² глянц.</option>
                       <option>300 г/м² глянц.</option>
                       <option>Плоттер</option>
                     </select>
                     <label for="postTech">Технология печати</label>
                     <select class="form-control" name="postTech">
                       <option>Цифровая печать</option>
                       <option>Офсетная печать</option>
                     </select>
                   </div>
                   <div class="col-md-4">
                     <label for="postColor">Цветность</label>
                     <select class="form-control" name="postColor">
                       <option>1+0</option>
                       <option selected>4+0</option>
                     </select>
                    <br/>
                    <input class="form-control btn btn-info addProduct" type="button" name="addPost" value="Добавить"/>
                   </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- Печати -->
          <div class="col-md-6" id="stampForm" style="display:none">
              <div class="panel panel-info">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="stampCount">Количество</label>
                        <input class="form-control" type="number" min="1" name="stampCount" value="1"/>
                   </div>
                   <div class="col-md-4">
                     <label for="stampType">Тип</label>
                     <select class="form-control" name="stampType">
                       <option>Ручная</option>
                       <option>Автомат</option>
                     </select>
                   </div>
                   <div class="col-md-4">
                     <label for="stampRig">Оснастка, mm</label>
                     <select class="form-control" name="stampRig">
                       <option value="30">30 &Oslash;</option>
                       <option value="40" selected>40 &Oslash;</option>
                     </select>
                    <br/>
                    <input class="form-control btn btn-info addProduct" type="button" name="addStamp" value="Добавить"/>
                   </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- Штампы -->
          <div class="col-md-6" id="stampsForm" style="display:none">
              <div class="panel panel-info">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="stampsCount">Количество</label>
                        <input class="form-control" type="number" min="1" name="stampsCount" value="1"/>
                   </div>
                   <div class="col-md-4">
                     <label for="stampsType">Тип</label>
                     <select class="form-control" name="stampsType">
                       <option>Автомат</option>
                       <option>Ручная</option>
                     </select>
                   </div>
                   <div class="col-md-4">
                     <label for="stampsRig">Оснастка, mm</label>
                     <select class="form-control" name="stampsRig">
                       <option>38x14</option>
                       <option>47x18</option>
                       <option>59x23</option>
                       <option>60x40</option>
                       <option>70x25</option>
                       <option>69x10</option>
                       <option>75x15</option>
                       <option>75x38</option>
                       <option>69x50</option>
                     </select>
                    <br/>
                    <input class="form-control btn btn-info addProduct" type="button" name="addStamps" value="Добавить"/>
                   </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- Широкоформатка -->
          <div class="col-md-6" id="wformForm" style="display:none">
              <div class="panel panel-info">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="wformCount">Количество</label>
                        <input class="form-control" type="number" min="1" name="wformCount" value="1"/>
                        <label for="wformPaper">Бумага</label>
                        <select class="form-control" name="wformPaper">
                          <option>Обычная</option>
                          <option>Баннер</option>
                          <option>Плоттер</option>
                        </select>
                   </div>
                   <div class="col-md-4">
                    <label for="wformColor">Цветность</label>
                    <select class="form-control" name="wformColor">
                      <option>1+0</option>
                      <option selected>4+0</option>
                    </select>
                    <label for="wformFormat">Формат</label>
                    <select class="form-control" name="wformFormat">
                      <option>A2, 420x594</option>
                      <option>A1, 594x841</option>
                      <option>A0, 841x1189</option>
                      <option>Другой</option>
                    </select>
                   </div>
                   <div class="col-md-4">
                     <label for="wformCut">Резка</label>
                     <input class="checkbox" type="checkbox" name="wformCut" value="true">
                    <br/><br/>
                    <input class="form-control btn btn-info addProduct" type="button" name="addWform" value="Добавить"/>
                   </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- Таблички -->
          <div class="col-md-6" id="tableForm" style="display:none">
              <div class="panel panel-info">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="tableCount">Количество</label>
                        <input class="form-control" type="number" min="1" name="tableCount" value="1"/>
                   </div>
                   <div class="col-md-4">
                    <label for="tableColor">Цветность</label>
                    <select class="form-control" name="tableColor">
                      <option>1+0</option>
                      <option selected>4+0</option>
                    </select>
                   </div>
                   <div class="col-md-4">
                     <label for="tableFormat">Формат</label>
                     <select class="form-control" name="tableFormat">
                       <option>A4, 210x297</option>
                       <option>A3, 297x420</option>
                       <option>A2, 420x594</option>
                       <option>Другой</option>
                     </select>
                     <br/><br/>
                    <input class="form-control btn btn-info addProduct" type="button" name="addTable" value="Добавить"/>
                   </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-md-12" id="statusStringBlock" style="display:none">
            <div class="panel-body">
              <p class="text-success" id="statusString"></p>
              <div class="myClear"></div>
              <input id="addOrder" class="btn btn-sm btn-success" type="submit" value="Добавить Заказ"/>
              <div class="text-success" id="summaString"></div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
</div>
  <div class="col-md-12">
      <form id="hiddenForm" action="index.php" method="get">
            <input id="hiddenName" type="hidden" name="name" class="form-control"/>
            <input id="hiddenContact" type="hidden" name="contact" class="form-control"/>
            <input id="hiddenEmail" type="hidden" name="email" class="form-control"/>
            <input id="hiddenSumm" type="hidden" name="summ" class="form-control"/>
            <input style="height:92px; resize:none " name="product" type="hidden" id="hiddenProduct" class="form-control"></input>
      </form>
  </div>
</div>
</div>
 <div class="col-md-12">
  <?php $exp = 0; ?>
    <?php
        if (!empty($_GET['add'])) echo file_get_contents("http://client.base/nav/bc.php");
        elseif (!empty($_GET['change'])) {
            echo '<div class="options"><h2>Изменить заказ ';
            if (empty($_GET['change']) || $_GET['change'] == '1') echo '';
            else echo '№'.$_GET['change'];
            echo '</b><br/></h2>';
            echo file_get_contents("http://client.base/nav/change.php");
        }
        elseif (!empty($_GET['del'])) echo file_get_contents("http://client.base/nav/del.php");

    ?>
    <?php
        define ('DB_HOST', 'localhost'); // определяем хост
        define ('DB_USER', 'root'); // определяем пользователянты
        define ('DB_PASSWORD', ''); // пароль пользователя
        define ('DB_NAME', 'client_base'); // имя базы данных
        $mysqli = @new mysqli (DB_HOST, DB_USER, DB_PASSWORD , DB_NAME); // установить соединение
        if($mysqli->connect_errno) exit('Ошибка соединения с БД');
        $mysqli->set_charset('utf8'); // устранение проблем с кодировкой
  //---------------------------Приём GET-значений--------------------------------------------------------------------------
  //---------------------------MySQL Запрос на генерацию строки--------------------------------------------------------------------------
        if(!empty($_GET['name']))
        {
            $name = $mysqli->real_escape_string(htmlspecialchars($_GET['name']));
            $contact = $mysqli->real_escape_string(@htmlspecialchars($_GET['contact']));
            $email = $mysqli->real_escape_string(@htmlspecialchars($_GET['email']));
            $summ= $mysqli->real_escape_string(@htmlspecialchars($_GET['summ']));
            $product = $mysqli->real_escape_string($_GET['product']);
            $query = $query = "INSERT INTO `cb_orders` (`id`, `Заказчик`, `Дата_заказа`, `Контактное лицо`, `Контакты`, `Продукт`,  `Цена`)
                                                VALUES (NULL,   '$name',  UNIX_TIMESTAMP(),'$contact',     '$email',   '$product','$summ');";
            $result = $mysqli->query($query);
        }
    ?>
    <div class="clear"></div>
    <div class="table-responsive table-up">
    <?php
  //-------------------------------Удаление заказа из базы------------------------------------------------------------
    if (isset($_GET['del']) && $_GET['del'] == 'Удалить'){
        $id = $mysqli->real_escape_string(htmlspecialchars($_GET['id']));
        $id_query = "DELETE FROM `cb_orders` WHERE `cb_orders`.`id` = $id";
        $id_result = $mysqli->query($id_query);
        if ($id_result == true) echo "<p><em>Заказ успешно удален</em></p>";
        else echo '<p><strong>Заказ не найден</strong></p>';
    }
     if(isset($_GET['add']) && $_GET['add'] == 'Добавить')
     {
         if ($result == true) echo "<em>Заказ успешно добавлен<br/>Стоимость: </b>$summ руб.</em>";
            else echo '<strong>Неизвестная ошибка</strong>';
     }
  //-------------------------------Изменение данных в таблице------------------------------------------------------------
    if(!empty($_GET['change'])){
        $query_change = "";
        $id_result = $mysqli->query($query_change);
        if ($id_result == true) echo '<p><em>Заказ №'.$_GET['del'].' успешно удален</em></p>';
        else echo '';
     }
  //-------------------------------Генерация таблицы------------------------------------------------------------
    if(empty($_POST['search'])) {
      $result = $mysqli->query('SELECT * FROM `cb_orders`');
    }
    if(empty($_GET['search'])) {
      $result = $mysqli->query('SELECT * FROM `cb_orders`');
    }
    else {
      $reqvest = '"%'.$_GET['search'].'%"';
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
  </div>
  </div>
</div>
</div>
</div>
<?php $mysqli->close();?>
<?=file_get_contents("http://client.base/js/scripts.php")?>

</body>
</html>
