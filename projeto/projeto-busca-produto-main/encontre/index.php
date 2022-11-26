
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-5.2.1-dist\css\bootstrap.css" rel="stylesheet"><!--bootstrap local-->
    <script src="bootstrap-5.2.1-dist\js\bootstrap.js"defer></script>
    <link rel="stylesheet" href="css\style.css">
    <link rel="shortcut icon" href="busca.png" type="image/x-icon">
    <title> Busca Produto</title>
  </head>
  <script>
  
  document.addEventListener('contextmenu', event => event.preventDefault());//bloqueia botão direito do mouse
  
      function startTime()// função de puxar o horário e mostrar a hora
      {
      var today=new Date();
      var h=today.getHours();
      var m=today.getMinutes();
      var s=today.getSeconds();
      // adicione um zero na frente de números<10
      m=checkTime(m);
      s=checkTime(s);
      document.getElementById('txt').innerHTML="<p><b>"+today.toLocaleDateString()+" "+h+":"+m+":"+s+"</b></p>";
      t=setTimeout('startTime()',500);
      }
      function checkTime(i)
      {
      if (i<10)
      {
      i="0" + i;
      }
      return i;
      }

      
  

  </script>
  <body onload="startTime()">
    <header>
      <div id="txt"class="hora"><!-- vai colocar o horário nessa div -->
      </div>
      <div class="position-absolute top-0 start-0">
        <img class="logo" src="images\seu-logo-aqui-1.png" alt="">
      </div>
    </header>
    <main>
      <div class ="position-absolute top-50 start-50 translate-middle">
        <img class="carrinho" src="images\carrinho.png" alt="">
      </div>
        <?php
          include('form.php');// estou incluindo a página de busca no index, o buscador
        ?>
    </main>
  <footer>

  </footer>
 </body>   
</html>

