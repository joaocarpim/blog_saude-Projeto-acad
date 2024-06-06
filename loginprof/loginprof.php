<?php
  
    if(isset($_POST['submit']))
    {
     include_once('../config.php');

      $nome = $_POST['nome'];
      $area = $_POST['area'];
      $ident_prof = $_POST['ident_prof'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
      $senha = $_POST['senha'];

      $result = mysqli_query($conexao, "INSERT INTO profissionais(nome,area,ident_prof,email,telefone,senha) 
      VALUES ('$nome','$area','$ident_prof','$email','$telefone','$senha')");
    }
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <title>Login profissional</title>
</head>

<body>
    <div class="container">
        <form action="loginprof.php" method="POST" id="signup">
            <h2 id="title">Cadastro Profissional</h2>
            <input type="text" name="nome" id="nome" placeholder="Nome" required/>
            <i class="fas fa-user iName"></i>
            <input type="text" name="area" id="area" placeholder="Área de atuação" required/>
            <i class="fas fa-graduation-cap iArea"></i>
            <input type="text" name="ident_prof" id="ident_prof" placeholder="Identificação profissional" required/>
            <i class="fas fa-address-card iDoctor"></i>
            <input type="text" name="email" id="email" placeholder="Email" required/>
            <i class="fas fa-envelope iEmail"></i>
            <input type="text" name="telefone" id="telefone" placeholder="Telefone" required/>
            <i class="fa-solid fa-phone iTelefone"></i>
            <input type="password" name="senha" id="senha" placeholder="Senha" required/>
            <i class="fas fa-lock iPassword"></i>
            <input type="password" name="senha" id="senha" placeholder="Confirmar senha" required/>
            <i class="fas fa-lock iPassword2"></i>
            <div class="divCheck">
                <input type="checkbox" required/>
                <a href="../termos.html">Eu li e concordo com os termos de uso </a>
            </div>
            <input type="submit" name="submit" id="submit" value="Criar conta">
            <a href="../login/index.php"><button type="button">Voltar</button></a>
        </form>
    </div>
</body>

</html>
