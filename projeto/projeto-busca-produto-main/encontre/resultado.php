
<!doctype html>
  <html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="bootstrap-5.2.1-dist\css\bootstrap.css" rel="stylesheet">
      <link rel="stylesheet" href="css\style.css">
      <script src="bootstrap-5.2.1-dist\js\bootstrap.js"defer></script><!-- script para funcionar os cards e modais no bootstrap -->
  </head>

  

  
  <script>
  
  document.addEventListener('contextmenu', event => event.preventDefault());//bloqueia botão direito do mouse
  setTimeout(() => {
                  window.location.href="index.php";//direcionamento para a página inicial
                }, 30000);


</script>
      <style>
        h4{
        margin-top:10px;
        margin-left:10px;
        }
      </style>
      <h5 class="container text-center"><?=$_POST["pesquisar"]?> : </h5><!--aqui resgata a palavra utilizada na página form-->
  <div class="container text-center"style="margin-top:150px;">
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
      <?php
        if(isset($_POST["acao"])){// se tiver dados que não seja invalidos ele vai retornar uma ação

          if($_POST['acao']=="pesquisar"){// outra verificação de palavras no form.php do metodo acao que tem que ser igual ao pesquisar(as palavras utilizadas)

            $_POST["pesquisar"] = str_replace(' ', '%', $_POST["pesquisar"]);// coloca na busca espaço para ser feita a busca
            $query = mysqli_query($conn, "SELECT 
            produtos.marca,
            produtos.nome_produto,
            produtos.descricao,
            produtos.foto,
            produtos.fk_sessao,
            sessao.nome_sessao,
            sessao.mapa_sessao
            FROM produtos
            INNER JOIN sessao ON (produtos.fk_sessao = sessao.id)
            WHERE produtos.nome_produto LIKE '%".$_POST["pesquisar"]."%'
            OR sessao.nome_sessao LIKE '%".$_POST["pesquisar"]."%'  ORDER BY rand() LIMIT 5;");// query que vai realizar a busca no db itens na tabela produtos que tenha o valor do pesquisar, aleatório com limite de 5 resultados
              if(mysqli_num_rows($query) > 0){// verificação de resultado, se tiver mais que 0 linhas ele retorna resultado, caso não direciona para a página de vazio.php 

              while($row = mysqli_fetch_all($query)){  
                file_put_contents("index.json", json_encode($row)); // no loop vai pegar todos os dados e enviar para um arquivo json, converter para json
                $json = file_get_contents('index.json');// variável para pegar os dados json
                $data = json_decode($json);// decotifica o jason para php

              for($i = 0; $i < count($data); $i++){ // contador que inicia do 0 e vai até o tamanho do que encontrou na busca(5 resultados)
                $title = strval($data[$i][1]);// variável definindo o titulo consultado no jason para string para aparecer de forma nitida no resultado do produto
                $nsessao = strval($data[$i][4]);//numero da sessão
                $sessao = strval($data[$i][5]);// mesma situação do title
                $descricao = strval($data[$i][2]);//descrição do produto
                // o echo vai ser ativado no loop e mostrar cada arquivo individual, com contador para separar de forma correta, cada card com modal para chamar o mapa
                    echo"
                      <div class='card h-50 d-inline-block'>
                        <img class='img-thumbnail' src ='".$data[$i][3]."'>
                          <div class='card-body'>
                            <h5 class='card-title'>$title</h5>
                            <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#staticBackdrop"."$i'>
                              Visualizar mapa
                            </button>
                          </div>
                      </div>
                      <!-- Modal -->
                      <div class='modal fade' id='staticBackdrop"."$i' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                      <div class='modal-dialog'>
                      <div class='modal-content'>
                      <div class='modal-header'>
                        <h5 class='modal-title' id='staticBackdropLabel'>Mapa</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                      </div>
                      <div class='modal-body'>
                        <img class='figure-img img-fluid rounded img-body' src ='".$data[$i][6]."'>
                          <button class='btn  btn-primary border border-primary' type='button' data-bs-toggle='collapse' data-bs-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample'>
                            --> Visualizar Descrição <--
                          </button>
                          <div class='collapse' id='collapseExample'>
                            <div class='card card-body'>
                              <p class='card-text'>Está localizado na sessão <b> $nsessao : $sessao</b></p>
                              <p>''<i>$descricao</i>''</p>
                            </div>
                          </div>
                      </div>
                      <div class='modal-footer'>
                        <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Fechar</button>
                        <a href='index.php'><button type='button' class='btn btn-primary'>Nova busca</button></a>
                      </div>
                      </div>
                      </div>
                      </div>";
            }
        }
          }else{
            header('Location: vazio.php/');// aqui é caso a página não encontre resultado e direciona para a página de erro customizada
            die("Erro");// fecha o processo de direcionamento para não ocorrer erro
              }
        ?>
      </div>
    </div>
<?php    


}
}
mysqli_close($conn);// fecha a conexão com o banco
?>

</body>



