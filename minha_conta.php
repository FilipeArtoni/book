<html>

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="estilo.php">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Books</title>
    <link rel="icon" href="imagens/logo.png">
</head>

<body background="imagens/fundo.png">


    <nav class="navbar navbar-dark bg-warning"> <!-- Início Nav (01) -->
        <a class="navbar-brand" href="home.php">
            <img src="imagens/logo.png" width="60" height="60">
            <h1 class="books">Books</h1>
        </a>

        <div class="dropdown">
            <button class="btn btn-warning dropdown-toggle botao-perfil" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Minha conta
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="minha_conta.php">Meu Perfil</a>
                <a class="dropdown-item" href="#">Meu Carrinho</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="sair.php">Sair</a>
            </div>
        </div>
    </nav> <!-- Fim Nav (01) -->


    <div class="container container-lateral-esquerdo" style="width: 208px; margin-left: -15px"> <!-- Início Container Lateral-Esquerdo -->

        <nav class="navbar bg-warning navegacao-lateral"> <!-- Início Navegação Lateral -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <h4>Categorias</h4>
                </li>
                <li class="nav-item">
                    <a href="categoria_infantil.php" class="nav-link">
                        Infantil
                    </a>
                </li>
                <li class="nav-item">
                    <a href="categoria_suspense.php" class="nav-link">
                        Suspense
                    </a>
                </li>
                <li class="nav-item">
                    <a href="categoria_ficcao_cientifica.php" class="nav-link">
                        Ficção Científica
                    </a>
                </li>
                <li class="nav-item">
                    <a href="categoria_terror.php" class="nav-link">
                        Terror
                    </a>
                </li>
                <li class="nav-item">
                    <a href="categoria_romance.php" class="nav-link">
                        Romance
                    </a>
                </li>
                <li class="nav-item">
                    <a href="categoria_historia.php" class="nav-link">
                        História
                    </a>
                </li>
            </ul>

        </nav> <!-- Fim Navegação Lateral -->
    </div> <!-- Fim Container Lateral-Esquerdo -->

    <div class="container bg-light" style="height: 1230px; width: 500px; margin-top: 50px; box-shadow: 2px 2px 30px 7px black;">
        <form>
            <div class="form-group" style="margin-top: 15px; text-align: center;">
                <label style="font-size: 1.3em;"><strong>Sua Conta</strong></label>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control" placeholder="E-mail">
                <button class="btn btn-success" type="submit">Editar</button>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input name="senha" type="password" class="form-control" placeholder="Senha">
                <button class="btn btn-success" type="submit">Editar</button>
            </div>
            <div class="form-group">
                <label>CPF</label>
                <input name="cpf" type="cpf" class="form-control" placeholder="CPF">
                <button class="btn btn-success" type="submit">Editar</button>
            </div>
            <div class="form-group">
                <label>Endereço</label>
                <input name="endereco" type="address" class="form-control" placeholder="Endereco">
                <button class="btn btn-success" type="submit">Editar</button>
            </div>
            <div class="form-group">
                <label>Número</label>
                <input name="numero" type="number" class="form-control" placeholder="Numero">
                <button class="btn btn-success" type="submit">Editar</button>
            </div>
            <div class="form-group">
                <label>Complemento</label>
                <input name="complemento" type="address" class="form-control" placeholder="Complemento">
                <button class="btn btn-success" type="submit">Editar</button>
            </div>
            <div class="form-group">
                <label>Estado</label>
                <input name="estado" type="address" class="form-control" placeholder="Estado">
                <button class="btn btn-success" type="submit">Editar</button>
            </div>
            <div class="form-group">
                <label>Cidade</label>
                <input name="cidade" type="address" class="form-control" placeholder="Cidade">
                <button class="btn btn-success" type="submit">Editar</button>
            </div>
            <div class="form-group">
                <label>Número de telefone</label>
                <input name="telefone" type="number" class="form-control" placeholder="Telefone">
                <button class="btn btn-success" type="submit">Editar</button>
            </div>

            <button class="btn btn-info btn-block" type="submit" style="margin-bottom: 20px">Salvar</button>
        </form>
    </div>

    <div class="container container-lateral-direito bg-light" style="margin-top: -1200; margin-left: 500px; width: 220px;"> <!-- Fim Container Lateral-Direito -->

        <form>
            <div class="form-group">
                <label for="exampleFormControlTextarea1"><strong> Projeto de ESTUDO!!!</strong></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Deixe uma sugestão"></textarea>
            </div>
            <button class="btn btn-lg btn-block btn-info" type="submit">Enviar</button>
        </form>
    </div> <!-- Fim Container Lateral-Direito -->



    <footer class="bg-dark py-md-5 mt-5" style="float: left; width: 1345px">

        <div class="container py-4 py-md-5 px-4 px-md-3">
            <div class="row text-light">

                <div class="col-6 col-lg-3 mb-3">
                    <h5>Conheça-nos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="rodape/informacoes_corporativas.php">Informações corporativas</a>
                        </li>
                        <li class="mb-2">
                            <a href="rodape/carreiras.php">Carreiras</a>
                        </li>
                        <li class="mb-2">
                            <a href="rodape/comunidade.php">Comunidade</a>
                        </li>
                        <li>
                            <a href="rodape/acessibilidade.php">Acessibilidade</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-lg-3 mb-3">
                    <h5>Ganhe dinheiro conosco</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="rodape/publique_seus_livros.php">Publique seus livros</a>
                        </li>
                        <li class="mb-2">
                            <a href="rodape/seja_um_entregador.php">Seja um entregador</a>
                        </li>
                        <li>
                            <a href="rodape/seja_um_associado.php">Seja um associado</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-lg-3 mb-3">
                    <h5>Pagamentos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="rodape/meios_de_pagamento.php">Meios de pagamento</a>
                        </li>
                        <li>
                            <a href="rodape/compre_com_pontos.php">Compre com pontos</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-lg-3 mb-3">
                    <h5>Deixe-nos ajudar você</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="rodape/sua_conta.php">Sua conta</a>
                        </li>
                        <li class="mb-2">
                            <a href="rodape/frete_e_prazo_entrega.php">Frete e prazo de entrega</a>
                        </li>
                        <li class="mb-2">
                            <a href="rodape/devolucoes_e_reembolsos.php">Devoluções e reembolsos</a>
                        </li>
                        <li>
                            <a href="rodape/ajuda.php">Ajuda</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="https://www.facebook.com/filipeeduardo.artoni/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="https://www.instagram.com/filipeart_oni/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="https://www.linkedin.com/in/filipe-artoni-a553491ab/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p style="float: left; margin-top: -55px; margin-left: 400px;
                color: white">
                &copy; 2023 Books. Todos os direitos reservados.
            </p>
        </div>

    </footer>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>