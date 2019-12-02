<?php
$Login = $_POST['Login'];
$Senha = md5($_POST['Senha']);
$conn =new mysqli('localhost','root','','marcenaria');
if ($conn->connect_error) {
            die("Por algum motivo a inscrição não foi efetuada, tente novamente mais tarde.");
        }
echo $Login . " " . $Senha;
  if (isset($Login)) {    
    $verifica = "SELECT * FROM usuarios WHERE email = '$Login' AND senha = '$Senha'";
      if (!$conn->query($verifica)){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos' . '$Login' . ' ' . '$Senha');window.location
        .href='index.php';</script>";
        die();
      }else{
        setcookie("login",$Login);
        header("Location: views/dashboard.php");
      }
  }
?>
