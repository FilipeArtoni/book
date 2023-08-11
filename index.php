<html>
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="estilo.php">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"crossorigin="anonymous">

    <title>Books</title>
    <link rel="icon" href="imagens/logo.png">
  </head>

  <body background="imagens/fundo.png">
    <nav class="navbar navbar-dark bg-warning">
      <a class="navbar-brand" href="#">
        <img src="imagens/logo.png" width="60" height="60">
        <h1 class="books">Books</h1>
      </a>
    </nav>

    <div class="container primary"> <!-- Ínicio Container -->
          
      <div class="card-login sombreado-login"> <!-- Ínicio Card-Login -->
        <div class="card"> <!-- Ínicio Card -->

          <!-- Ínicio Card-Header -->
          <div class="card-header"> 
            Login
          </div> 
          <!-- Fim Card-Header -->

          <!-- Ínicio Card-Body -->
          <div class="card-body"> 
            <form action="login.php" method="post">
              <div class="form-group">
                <input name="email" type="text" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>

              <input class="btn btn-lg btn-info btn-block" type="submit" name="submit" value="Entrar">
            </form>
          </div>
          <!-- Fim Card-Body -->

        </div> <!-- Fim Card -->
      </div> <!-- Fim Card-Login -->
          
      <div class="cadastro"> <!-- Início Cadastro -->
        <div class="card-cadastro">
          <div class="card">
            <!-- Ínicio Card-Header -->
            <div class="card-header">
              Cadastro
            </div>
            <!-- Fim Card-Header -->

            <!-- Ínicio Card-Login -->
            <div class="card-login2">
              <form action="cadastro.php" method="post">

                <div class="form-group">
                  Digite seu nome
                  <input name="nome" type="nome" class="form-control" placeholder="Nome">
                </div>

                <div class="form-group">
                  Digite um email
                  <input name="email" type="e-mail" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  Digite uma senha
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" id="submit"></button>
                            
              </form>
            </div>
            <!-- Fim Card-Login -->
          </div>
        </div>
      </div> <!-- Fim Cadastro -->

    </div> <!-- Fim Container -->

  </body>
</html>