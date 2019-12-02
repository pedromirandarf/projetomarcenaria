<?php

$BASE_LOGIN = <<<EOF
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Marcenaria
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
  </head>
<!-- Não há Navbar no index é somente uma página de login -->

<body class="">
  
    <nav class="navbar navbar-light bg-primary">
        <div class="container">
          <a class="navbar-brand" href="#">Login Marcenaria</a>
        </div>
      </nav>
  
  <div class="row">
<!--
 Card com as informações de login 
-->
  <div class="col-md-6 ml-auto mr-auto  text-center" >
    <div class="card">
      <br>
      <br>
        <div class="card-header card-header-yellow">
            <h3 class="card-title" style="color:#666667">Login</h3>
        </div>
        <div class="card-body">
            <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="" />
                  </a>
                </div>
                <div class="card-body">
                    <form action="login.php" method="POST">
                    
                      <div class="form-group">
                          <label for="email">Login</label>
                          <input type="email" class="form-control" name="Login" aria-describedby="emailHelp" placeholder="nome.sobrenome@atlasjr.com.br">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Senha</label>
                          <input type="password" class="form-control" name="Senha" placeholder="Password">
                        </div>
                        <div class="checkbox">
                             <input type="checkbox" class="checkbox" name="Conectado">
                             <label for="mantenhaconectado">Me Mantenha Conectado</label>
                          </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                        <button class="btn btn-primary">Esqueci a Senha</button>
                      

                        
                      </form>
                      <a class="link" href="views/new_user.php">
                          <i class="material-icons">person</i>
                          <p>Cadastro</p>
                        </a>
                        <a class="btn btn-primary btn-round" target ="_blank" href="https://www.youtube.com/embed/SFJIn1GCWrQ">Tutorial</a>
                     
                      
                              
                        </div>
                </div>
              </div>
        </div>
    </div>
  </div>
</div>
<!--
 Cards menores com informações 
-->


<!--
 Rodapé
-->
  </div>
      <footer class="footer">
          <div class="card card-nav-tabs">
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>Sua meta é ser o melhor do mundo naquilo que você faz. Não existem alternativas.</p>
                  <p class="blockquote-footer" href="">Desenvolvido por: <span href="https://www.facebook.com/pedrocelsom">Pedro Miranda</span>  &  <span>Tadeu Rangel</span> </p>
                </blockquote>
              </div>
            </div>
      </footer>
    </div>
  </div>
</body>

</html>
EOF;

echo $BASE_LOGIN;
?>