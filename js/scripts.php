<!-- <script>
    $("#addOrderButton").click(function(){
      if($("#addOrderPanel").css('display') == 'none')
       $("#addOrderPanel").show();
      else $("#addOrderPanel").hide();
    });
</script> -->
<script type="text/javascript">
$("select[name='product']").change(function(){
  if($("select[name='product']").val() === "vis") {
    $('#bookForm').hide(function(){})
    $('#visForm').show(function(){})
    $('#flyForm').hide(function(){})
    $('#layForm').hide(function(){})
    $('#postForm').hide(function(){})
    $('#stampForm').hide(function(){})
    $('#stampsForm').hide(function(){})
    $('#tableForm').hide(function(){})
    $('#wformForm').hide(function(){})
  }
  else if($("select[name='product']").val() === "book") {
    $('#bookForm').show(function(){})
    $('#visForm').hide(function(){})
    $('#flyForm').hide(function(){})
    $('#layForm').hide(function(){})
    $('#postForm').hide(function(){})
    $('#stampForm').hide(function(){})
    $('#stampsForm').hide(function(){})
    $('#tableForm').hide(function(){})
    $('#wformForm').hide(function(){})
  }
  else if($("select[name='product']").val() === "fly") {
    $('#bookForm').hide(function(){})
    $('#visForm').hide(function(){})
    $('#flyForm').show(function(){})
    $('#layForm').hide(function(){})
    $('#postForm').hide(function(){})
    $('#stampForm').hide(function(){})
    $('#stampsForm').hide(function(){})
    $('#tableForm').hide(function(){})
    $('#wformForm').hide(function(){})
  }
  else if($("select[name='product']").val() === "lay") {
    $('#bookForm').hide(function(){})
    $('#visForm').hide(function(){})
    $('#flyForm').hide(function(){})
    $('#layForm').show(function(){})
    $('#postForm').hide(function(){})
    $('#stampForm').hide(function(){})
    $('#stampsForm').hide(function(){})
    $('#tableForm').hide(function(){})
    $('#wformForm').hide(function(){})
  }
  else if($("select[name='product']").val() === "posters") {
    $('#bookForm').hide(function(){})
    $('#visForm').hide(function(){})
    $('#flyForm').hide(function(){})
    $('#layForm').hide(function(){})
    $('#postForm').show(function(){})
    $('#stampForm').hide(function(){})
    $('#stampsForm').hide(function(){})
    $('#tableForm').hide(function(){})
    $('#wformForm').hide(function(){})
  }
  else if($("select[name='product']").val() === "stamp") {
    $('#bookForm').hide(function(){})
    $('#visForm').hide(function(){})
    $('#flyForm').hide(function(){})
    $('#layForm').hide(function(){})
    $('#postForm').hide(function(){})
    $('#stampForm').show(function(){})
    $('#stampsForm').hide(function(){})
    $('#tableForm').hide(function(){})
    $('#wformForm').hide(function(){})
  }
  else if($("select[name='product']").val() === "stamps") {
    $('#bookForm').hide(function(){})
    $('#visForm').hide(function(){})
    $('#flyForm').hide(function(){})
    $('#layForm').hide(function(){})
    $('#postForm').hide(function(){})
    $('#stampForm').hide(function(){})
    $('#stampsForm').show(function(){})
    $('#tableForm').hide(function(){})
    $('#wformForm').hide(function(){})
  }
  else if($("select[name='product']").val() === "table") {
    $('#bookForm').hide(function(){})
    $('#visForm').hide(function(){})
    $('#flyForm').hide(function(){})
    $('#layForm').hide(function(){})
    $('#postForm').hide(function(){})
    $('#stampForm').hide(function(){})
    $('#stampsForm').hide(function(){})
    $('#tableForm').show(function(){})
    $('#wformForm').hide(function(){})
  }
  else if($("select[name='product']").val() === "wform") {
    $('#bookForm').hide(function(){})
    $('#visForm').hide(function(){})
    $('#flyForm').hide(function(){})
    $('#layForm').hide(function(){})
    $('#postForm').hide(function(){})
    $('#stampForm').hide(function(){})
    $('#stampsForm').hide(function(){})
    $('#tableForm').hide(function(){})
    $('#wformForm').show(function(){})
  }
  else {
    $('#bookForm').hide(function(){})
    $('#visForm').hide(function(){})
    $('#flyForm').hide(function(){})
    $('#layForm').hide(function(){})
    $('#postForm').hide(function(){})
    $('#stampForm').hide(function(){})
    $('#stampsForm').hide(function(){})
    $('#tableForm').hide(function(){})
    $('#wformForm').hide(function(){})
  }
});
</script>
<script>
  $("input[name='addVis']").click(function(){
    $('#statusStringBlock').show(function(){});
    let visCount = Number($("select[name='visCount']").val());

    let visColor = $("select[name='visColor']").val();
    if($("select[name='visColor']").val() === "1+0") var visColorCost = 2;
    else if ($("select[name='visColor']").val() === "1+1") var visColorCost = 3.3;
    else if ($("select[name='visColor']").val() === "4+0") var visColorCost = 3.15;
    else if ($("select[name='visColor']").val() === "4+4") var visColorCost = 5.4;

    let Tech = $("select[name='visTech']").val();

    var tCost = visCount * visColorCost;
    let visPaper = $("select[name='visPaper']").val();

    if($("select[name='visPaper']").val() === "Обычная") var visPaperCost = 0;
    else if ($("select[name='visPaper']").val() === "Лён-Слоновая кость") var visPaperCost = 0.2*tCost;
    else if ($("select[name='visPaper']").val() === "Лён-Бриллиант") var visPaperCost = 0.3*tCost;
    else if ($("select[name='visPaper']").val() === "touch-cover") var visPaperCost = 0.4*tCost;

    let visFormat = $("select[name='visFormat']").val();
    if($("select[name='visFormat']").val() === "90х50") var visFormatCost = 0;
    else if ($("select[name='visFormat']").val() === "85х55") var visFormatCost = 0.2*tCost;

    if ( $("select[name='visLam']").val() == '') {
      var visLam = '';
      var visLamCost = 0;
    }
    else if ($("select[name='visLam']").val() == 'Матовая' || $("select[name='visLam']").val() == 'Глянцевая') {
      var visLam = ('<br/>' + $("select[name='visLam']").val() + ' ламинация');
      var visLamCost = 0.2*tCost;
    }

    if($("input[name='visCorners']").prop('checked') == true) {
      var visCorners = '<br/>Cкругление углов';
      var visCornersCost = 0.2*tCost;
    }
    else {
      var visCorners = '';
      var visCornersCost = 0;
    }

    var tCost = (visCount * visColorCost)
      + Number(visPaperCost.toFixed())
      + Number(visFormatCost.toFixed())
      + Number(visLamCost.toFixed())
      + Number(visCornersCost.toFixed())
    ;
    $('#statusString').prepend(
      '<p id="statusItem"><i class="fas fa-plus"></i> Визитки: '
      + visCount + ' штук; (' + visColor + ')'
      + '<br>Формат: ' + visFormat + '<br/>'
      + Tech + '</br>  Бумага: '
      + visPaper + ' ' + ' '
      + visLam
      + visCorners
      + '<br>Цена: ' + tCost + ' руб.</p>'
    );
    if ($('#summaString').hasClass("activeString")){
      summTCost = tCost + Number($(".summCount").text());
      $('.summCount').empty().append(summTCost);
    }
    else{
      var summTCost = tCost; //100
      $('#summaString').addClass("activeString");
      $('#summaString').append('Сумма: <span class="summCount">' + tCost +' </span><i style="font-size:12pt" class="fas fa-ruble-sign"></i>');
    }
  });


  $("input[name='addBook']").click(function(){
    $('#statusStringBlock').show(function(){});
    let bookCount = Number($("input[name='bookCount']").val());

    let bookColor = $("select[name='bookColor']").val();
    // цена за 1
    if($("select[name='bookColor']").val() === "1+0") var bookColorCost = 30;
    else if ($("select[name='bookColor']").val() === "1+1") var bookColorCost = 34.3;
    else if ($("select[name='bookColor']").val() === "4+0") var bookColorCost = 34.15;
    else if ($("select[name='bookColor']").val() === "4+4") var bookColorCost = 36.4;

    let Tech = $("select[name='bookTech']").val();

    var tCost = bookCount * bookColorCost;
    let bookPaper = $("select[name='bookPaper']").val();
    if($("select[name='bookPaper']").val() === "130 г/м² глянц.") var bookPaperCost = 0;
    else if($("select[name='bookPaper']").val() === "170 г/м² глянц.") var bookPaperCost = 0.2*tCost;
    else if($("select[name='bookPaper']").val() === "300 г/м² глянц.") var bookPaperCost = 0.4*tCost;

    let bookScor = $("select[name='bookScor']").val();
    if($("select[name='bookScor']").val() === "Книжка") var bookScorCost = 0.2;
    else if($("select[name='bookScor']").val() === "Евробуклет") var bookScorCost = 0.3*tCost;

    if($("input[name='bookCorners']").prop('checked') == true) {
      var bookCorners = '<br/>Cкругление углов';
      var bookCornersCost = 0.2*tCost;
    }
    else {
      var bookCorners = '';
      var bookCornersCost = 0;
    }

    var tCost = (bookCount * bookColorCost)
      + Number(bookPaperCost.toFixed())
      + Number(bookScorCost.toFixed())
      + Number(bookCornersCost.toFixed())
    ;

    $('#statusString').prepend(
      '<p id="statusItem"><i class="fas fa-plus"></i> Буклеты: '
      + bookCount + ' шт. (' + bookColor + ')</br>'
      + Tech + '</br>'
      + 'Бумага: ' + bookPaper
      + '<br/>Беговка: ' + bookScor
      + bookCorners +'<br/>'
      + 'Цена: ' + tCost + ' руб.</p>'
    );

    if ($('#summaString').hasClass("activeString")){
      summTCost = tCost + Number($(".summCount").text());
      $('.summCount').empty().append(summTCost);
    }
    else{
      var summTCost = tCost; //100
      $('#summaString').addClass("activeString");
      $('#summaString').append('Сумма: <span class="summCount">' + tCost +' </span><i style="font-size:12pt" class="fas fa-ruble-sign"></i>');
    }
  });


  $("input[name='addFly']").click(function(){
    $('#statusStringBlock').show(function(){});
    let Count = $("select[name='flyCount']").val();
    let Paper = $("select[name='flyPaper']").val();
    let Color = $("select[name='flyColor']").val();
    let Format = ('<br/>'+$("select[name='flyFormat']").val());
    let Tech = ('<br/>'+$("select[name='flyTech']").val());

    if($("input[name='flyCorners']").prop('checked') == true) var flyCorners = '<br/>Cкругление углов';
    else var flyCorners = '';
    $('#statusString').prepend('<p id="statusItem"><i class="fas fa-plus"></i> Листовки: ' + Count + ' шт. (' + Color + ')' + Tech + '</br>' + 'Бумага: ' + Paper + Format + flyCorners +'</p>');
  });


  $("input[name='addLay']").click(function(){
    $('#statusStringBlock').show(function(){});
    let Product = $("select[name='layProduct']").val();
    // цена за 1
    if($("select[name='layProduct']").val() === "Буклет") var layProductCost = 1000;
    else if ($("select[name='layProduct']").val() === "Визитка") var layProductCost = 300;
    else if ($("select[name='layProduct']").val() === "Листовка") var layProductCost = 500;
    else if ($("select[name='layProduct']").val() === "Плакат") var layProductCost = 500;
    else if ($("select[name='layProduct']").val() === "Печать") var layProductCost = 300;
    else if ($("select[name='layProduct']").val() === "Штамп") var layProductCost = 150;
    else if ($("select[name='layProduct']").val() === "Табличка") var layProductCost = 300;
    else if ($("select[name='layProduct']").val() === "Широкоформатка") var layProductCost = 300;

    let Dif = $("select[name='layDif']").val();
    if($("select[name='layDif']").val() === "Лёгкий (По образцу)") var layDifCost = 1*layProductCost;
    else if ($("select[name='layDif']").val() === "Средний (C нуля)") var layDifCost = 2*layProductCost;
    else if ($("select[name='layDif']").val() === "Сложный") var layDifCost = 3*layProductCost;

    let layFixPrice = $("input[name='layFixPrice']").val();
    if($("input[name='layFixPrice']").val() == ''){
      var tCost = layDifCost;
    }
    else{
      var tCost = Number($("input[name='layFixPrice']").val());
    }

    $('#statusString').prepend(
      '<p id="statusItem"><i class="fas fa-plus"></i> Макет: '
      + Product  +'<br/>'
      + Dif +'<br/>'
      +'Цена: ' + tCost + ' руб.</p>'
    );

    if ($('#summaString').hasClass("activeString")){
      summTCost = tCost + Number($(".summCount").text());
      $('.summCount').empty().append(summTCost);
    }
    else{
      var summTCost = tCost; //100
      $('#summaString').addClass("activeString");
      $('#summaString').append('Сумма: <span class="summCount">' + tCost +' </span><i style="font-size:12pt" class="fas fa-ruble-sign"></i>');
    }
  });


  $("input[name='addPost']").click(function(){
    $('#statusStringBlock').show(function(){});
    let Count = ($("input[name='postCount']").val() + 'шт. ');
    let Paper = ('<br/>'+$("select[name='postPaper']").val());
    let Color = ('('+$("select[name='postColor']").val()+')');
    let Tech = ('<br/>'+$("select[name='postTech']").val());
    $('#statusString').prepend('<p id="statusItem"><i class="fas fa-plus"></i> Плакаты: ' + Count  + Color + Tech + Paper + '</p>');
  });
  $("input[name='addStamp']").click(function(){
    $('#statusStringBlock').show(function(){});

    let Rig = $("select[name='stampRig']").val();
    if($("select[name='stampRig']").val() === "30") var stampRigCost = 250;
    else if ($("select[name='stampRig']").val() === "40") var stampRigCost = 300;

    let Type = $("select[name='stampType']").val();
    if($("select[name='stampType']").val() === "Ручная") var stampTypeCost = stampRigCost;
    else if ($("select[name='stampType']").val() === "Автомат") var stampTypeCost = 400 + stampRigCost;

    let Count = Number($("input[name='stampCount']").val());

    var tCost = Count * stampTypeCost;

    $('#statusString').prepend(
      '<p id="statusItem"><i class="fas fa-plus"></i> Печать: '
      + Count  + ' шт.<br/>'
      + Rig + ' ('
      + Type + ')<br/>'
      + 'Цена: ' + tCost + ' руб.</p>'
    );

    if ($('#summaString').hasClass("activeString")){
      summTCost = tCost + Number($(".summCount").text());
      $('.summCount').empty().append(summTCost);
    }
    else{
      var summTCost = tCost; //100
      $('#summaString').addClass("activeString");
      $('#summaString').append('Сумма: <span class="summCount">' + tCost +' </span><i style="font-size:12pt" class="fas fa-ruble-sign"></i>');
    }
  });
  $("input[name='addStamps']").click(function(){
    $('#statusStringBlock').show(function(){});
    let Count = $("input[name='stampsCount']").val();
    let Rig = ('<br/>'+$("select[name='stampsRig']").val());
    let Type = (' ('+$("select[name='stampsType']").val()+')');
    $('#statusString').prepend('<p id="statusItem"><i class="fas fa-plus"></i> Штамп: ' + Count  + Rig + Type + '</p>');
  });
  $("input[name='addTable']").click(function(){
    $('#statusStringBlock').show(function(){});
    let Count = ($("input[name='tableCount']").val() + 'шт. ');
    let Color = ('('+$("select[name='tableColor']").val()+')');
    let Format = ('<br/>Формат: ' + $("select[name='tableFormat']").val());
    $('#statusString').prepend('<p id="statusItem"><i class="fas fa-plus"></i> Таблички: ' + Count  + Color + Format + '</p>');
  });
  $("input[name='addWform']").click(function(){
    $('#statusStringBlock').show(function(){});
    let Count = ($("input[name='wformCount']").val() + 'шт. ');
    let Paper = ('<br/>Материал: '+$("select[name='wformPaper']").val());
    let Color = ('('+$("select[name='wformColor']").val()+')');
    let Format = ('<br/>Формат: '+$("select[name='wformFormat']").val());
    if($("input[name='wformCut']").prop('checked') == true) var wformCut = '<br/>Резка';
    else var wformCut = '';
    $('#statusString').prepend('<p id="statusItem"><i class="fas fa-plus"></i> Широкоформатка: ' + Count  + Color + Paper + Format + wformCut + '</p>');
  });
</script>
<script type="text/javascript">
  // $('.addProduct').click(function(){
  // });
  $('#addOrder').click(function(){
    var name = ($('input[name="client"]').val());
    var contact = ($('input[name="contact"]').val());
    var email = ($('input[name="email"]').val());
    var product = ($('#statusString').html());
    var summ = $('.summCount').text();
    $("#hiddenName").val(name);
    $("#hiddenContact").val(contact);
    $("#hiddenEmail").val(email);
    $("#hiddenProduct").val(product + "<div class='myClear'></div>");
    $("#hiddenSumm").val(summ);
    document.getElementById("hiddenForm").submit();
  });

</script>
