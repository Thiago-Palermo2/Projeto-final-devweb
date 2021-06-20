<?php
include_once "servico/Autenticacao.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .avatar {
  vertical-align:center;
  width: 35px;
  height: 35px;
  border-radius: 52%;
  float: left;
  padding: 2px;
}

 h1 {
color: #4A4E69;
font-family: arial, sans-serif;
font-size: 50px;
font-weight: bold;
text-align: center;
padding:20px;
margin-top: 20px;
}
p.round2 {
  border: 2px solid red;
  border-radius: 8px;
}

corbotao{
    background-color: #4A4E69;
}

body {
    background-color:#C9ADA7;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;

}
    </style>

    <title>Tela de sistema principal</title>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-10"><h1>Bem-vindo usuário</h1></div>
              <div class="col-2">
                  <hr>
                  <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar">
                  <?php
                  
                   echo "<p>".$_SESSION['loginusuario']."</p>";
                    ?>
                    <hr>
              </div>
              <br>
          </div>
                <a class="btn btn-primary btn-lg btn-block" style="background-color:#4A4E69" href="usuario/ConsultaUsuario.php">CRUD USUARIOS</a>
                <br>
        <hr>
        <br>      
              <a href="index.html">voltar</a>
      </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>