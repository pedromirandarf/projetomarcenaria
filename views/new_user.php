<?php 
$data = <<<EOF
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Marcenaria
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
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
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Novo Usuário</h4>
          <p class="card-category">Insira os dados com ATENÇÃO</p>
        </div>
        <div class="card-body">
          <form action="conexao/conect.php" method="POST">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Email</label>
                  <input type="email" name="Email" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Nome</label>
                  <input type="text" name="Nome" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Senha</label>
                  <input type="password" name="Senha" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Endereço</label>
                  <input type="text" name="Endereco" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">CPF</label>
                  <input type="text" name="CPF" class="form-control">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Cadastrar</button>
          </form>
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

echo $data;


?>
