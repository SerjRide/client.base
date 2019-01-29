<!DOCTUPE HTML>
<html>
<head>
  <title>ClientBase</title>
  <meta http-equiv="Content-Type" content="text/html; charset=uth-8" />
  <meta name="description" content="ClientBase" />
  <meta name="keywords" content="ClientBase" />
  <link href="http://mysite.local/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <!-- BOOTSTRAP v4 -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> -->
  <!-- BOOTSTRAP v3 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- fas icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="http://client.base/css/main.css">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Навигация</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">ClientBase</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <!-- <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="btn" id="b1" href="#">Меню</a>
        </li>
        <li class="nav-item">
          <a class="btn" id="b2" href="#">Меню</a>
        </li>
      </ul> -->
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" name="search" placeholder="Поиск" onkeyup="checkSearch(this.value)">
        </div>
        <button type="submit" class="btn btn-default">Найти</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a id="addOrderButton"  data-toggle="collapse" data-target="#addOrderPanel"><i class="fas fa-plus" style="font-size:14pt"></i></a></li>
        <li><a href="#"><i class="far fa-trash-alt" style="font-size:14pt"></i></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench" style="font-size:14pt"></i></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Старый дизайн</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Подключение скриптов после загрузки head для ускорения работы сайта -->
<!-- JQuery-3.3.1 -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
