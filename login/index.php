<?php
    if(isset($_POST['submit']))
    {
     include_once('../config.php');
     

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) 
      VALUES ('$nome','$email','$senha')");
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
    <title>Login</title>
</head>
<body>

    <div class="container">
        <div class="buttonsForm">
            <div class="btnColor"></div>
                <button id="btnSignin">Entrar</button>
                <button id="btnSignup">Cadastro</button>
        </div>

        <form action="../testlogin.php" method="POST" id="signin">
            <input type="text" name="email" placeholder="Email" required/>
            <i class="fas fa-envelope iEmail2"></i>
            <input type="password" name="senha" placeholder="Senha" required/>
            <i class="fas fa-lock iPassword3"></i>
            <input type="submit" name="submit" id="submit" value="Entrar">
        </form>
        
        <form action ="index.php" method="POST" id="signup">
            <input type="text" name="nome" id="nome" placeholder="Nome" required/>
            <i class="fas fa-user iName"></i>
            <input type="text" name="email" id="email" placeholder="Email" required />
            <i class="fas fa-envelope iEmail"></i>
            <input type="password" name="senha" id="senha" placeholder="Senha" required />
            <i class="fas fa-lock iPassword"></i>
            <input type="password" name="senha" id="senha" placeholder="Confirmar senha" required />
            <i class="fas fa-lock iPassword2"></i>
            <div class="divCheck">
                <input type="checkbox" required/>
                <a href="../termos.html">Eu li e concordo com os termos de uso </a>
            </div>
            <input type="submit" name="submit" id="submit" value="Criar conta">
            <a href="../loginprof/loginprof.php"><button type="button">Se cadastrar como profissional</button></a>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>
