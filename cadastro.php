<?php

$email = $_POST['email'];

$senha = MD5($_POST['senha']);

$nome = $_POST['nome'];

$cpf = $_POST['cpf'];

$connect = mysqli_connect('localhost','root','','welljobs');

$query_select = "SELECT email , cpf FROM usuarios WHERE email = '$email' OR cpf = '$cpf'";

$select = mysqli_query($connect,$query_select);

$array = mysqli_fetch_array($select);

$emailarray = $array['email'];

$cpfarray = $array['cpf'];

if(($emailarray == $email)||($cpfarray == $cpf)){

        echo"<script language='javascript' type='text/javascript'>alert('Esse email ou cpf já existe');window.location.href='index.php';</script>";

        die();
      }else{

        $query = "INSERT INTO usuarios (email,senha,nome,cpf) VALUES ('$email','$senha','$nome','$cpf')";

        $insert = mysqli_query($connect,$query);

        if($insert){

          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";

        }else{

          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='index.php'</script>";

        }

      }

?>