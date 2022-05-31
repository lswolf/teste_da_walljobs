<?php

  $email = $_POST['email'];

  $entrar = $_POST['entrar'];

  $senha = md5($_POST['senha']);

  $connect = mysqli_connect('localhost','root','','welljobs');

    if (isset($entrar)) {

      $verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");

        if (mysqli_num_rows($verifica)<=0){

          echo"<script language='javascript' type='text/javascript'>alert('email e/ou senha incorretos');window.location.href='index.php';</script>";

         

        }else{

            echo"<script language='javascript' type='text/javascript'>alert('Bem Vindo! pena que não tem para aonde ir agora kk ¯\_(ツ)_/');window.location.href='index.php';</script>";
        

        }

    }
    mysqli_close($connect);
?>