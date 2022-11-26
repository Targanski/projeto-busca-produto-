  
    <div class="Busca">
        <h2><i>Busca Produto</i></h2>
    </div>
        <form method="POST"action="session.php"><!--o que for escrito vai ser armazenado no método post que vai direcionar para a session, onde estará armazenada a palavra-->
            <input type="hidden" name="acao" value="pesquisar">
            <label for="validationTextarea" class="form-label">
                <section class="caixa-search position-absolute  start-50 translate-middle  w-25 "><!--estilização do bootstrap, tamanho, onde começa e termina o botão-->
                    <input id="validationTextarea" class="form-control rounded-pill border border-primary"type="text" name="pesquisar" autocomplete="off" placeholder="Digite o nome do produto"required><!--Faz validação de campo, assim tem que preencher o campo para fazer a busca-->
                        <button class="botao-search btn btn-primary position-absolute top-50 start-100 translate-middle rounded-5 h-100 w-25"type="submit">
                            <i><img src="bootstrap-icons-1.9.1\search.svg" alt=""></i><!--ícone do botão de busca-->
                        </button>
                </section>
            </label>
        </form>
    


