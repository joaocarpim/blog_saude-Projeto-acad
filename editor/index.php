<?php
    if(isset($_POST['submit']))
    {
     include_once('../config.php');
     
      $titulo = $_POST['titulo'];
      $texto = $_POST['texto'];
      $area_artigo = $_POST['area_artigo'];
      $profissional = $_POST['profissional'];

      $result = mysqli_query($conexao, "INSERT INTO artigos(titulo,texto,area_artigo,profissional) 
      VALUES ('$titulo','$texto','$area_artigo','$profissional')");
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
    <link rel="stylesheet" href="../quemsomos/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">

    <title>Editor de Artigos de Saúde</title>

  </head>

  <body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">
          <span class="logo-text"><h2>Healthy Living</h2></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="../quemsomos/index.html">Quem somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../calculadoraimc/index.html">Cálculo IMC</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../listaprof/lista.php">Profissionais</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Nutrição</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../artigos/artigonutri.php">Artigos</a></li>
                <li><a class="dropdown-item" href="../artigos/sobrenutri.html">Sobre a área</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Psicologia</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../artigos/artigopsico.php">Artigos</a></li>
                <li><a class="dropdown-item" href="../artigos/sobrepsico.html">Sobre a área</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./index.php">Escrever artigo</a>
            </li>
          </ul>
          <div class="d-flex">
            <a href="../formulario/formulario.php" class="btn btn-success me-3">Formulário</a>
            <a href="../sair.php" class="btn btn-danger me-3">Sair</a>
          </div>
        </div>
      </div>
    </nav>

    <br>
    <br>
    <br>

    <div class="container-fluid p-5 bg-success text-white text-center">
      <h1>Escrever Artigo</h1> 
    </div>

    <div class="container">

      <form action= "index.php" method="POST" id="articleForm">

        <h2 align="center" for="titleInput">Profissional</h2>
        <br>
        <div class="input-group mb-3 input-group-lg">
          <input type="text" name="profissional" id="profissional" class="form-control">
        </div>

        <br>
        <h2 align="center" for="titleInput">Área do artigo</h2>
        <br>
        <div class="input-group mb-3 input-group-lg">
          <input type="text" name="area_artigo" id="area_artigo" class="form-control">
        </div>
    
        <br>
        <h2 align="center" for="titleInput">Título</h2>
        <br>
        <div class="input-group mb-3 input-group-lg">
          <input type="text" name="titulo" id="titulo" class="form-control">
        </div>
       
        <br>
        <h2 align="center" for="contentInput">Conteúdo do Artigo</h2>
        <br>
        <div class="form-floating">
          <textarea class="form-control" name="texto" id="texto"></textarea>
          <label for="comment">Comments</label>
        </div>
        <br>
        <input type="submit" name="submit" id="submit" value="Publicar">
      </form>

    </div>
  </body>

</html>
