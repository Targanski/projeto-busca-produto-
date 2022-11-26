              <style>
                *{background-color:black;};
                
              </style>
                <script>

                document.addEventListener('contextmenu', event => event.preventDefault());//bloqueia botão direito do mouse
                setTimeout(() => {
                  window.location.href="../index.php";
                }, 15000);

                </script>
              <div>
                <img  src ="../images/erro.png"style="width:300px;margin:20px;border-radius:100%;padding-top:10%; padding-left:5%;"><!--Imagem da página de erro que vai ser buscada na página de resultado-->
              <style>
                p{margin-top: -250px;text-align: center;padding-left: 10px;}
                
              </style>
                
                <p style="color:white;">Busca não retornou resultado!<br>
                <a href="../index.php"style="text-decoration:none;">clique aqui</a> para voltar para a página inicial.
              </div>
              <script>
                
              </script>