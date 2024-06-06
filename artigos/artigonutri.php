<?php
  include_once('../config.php');

  if(!empty($_GET['search']))
  {
    $data = $_GET['search'];
    $sql = "SELECT * FROM artigos WHERE titulo LIKE '%$data%' or profissional LIKE '%$data%' ORDER BY area_artigo DESC";
  }
  else
  {
    $sql = "SELECT * FROM artigos ORDER BY titulo DESC";
    $sql = "SELECT * FROM artigos WHERE area_artigo ='nutrição'";
  }
  $result = $conexao->query($sql);
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
    <title>Artigos sobre nutrição</title>
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
            <a class="nav-link" href="../editor/index.php">Escrever artigo</a>
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
          <div class="container-fluid p-5 bg-success text-white text-center">
            <h1>ARTIGOS SOBRE NUTRIÇÃO</h1> 
          </div>
      <br>
      <br>

      <div  align="center" class="input-group mb" >
        <input type="search" class="form-control" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-success">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
        </button>
      </div>
          <div class="container mt-5">


            <?php
              while($user_data = mysqli_fetch_assoc($result))
                {
                  echo "<br>";
                  echo "<h1>" .$user_data['titulo']."</h1>";
                  echo "<h5>" .$user_data['texto']."</h5>";
                  echo "<br>";
                  echo "<h5>" . 'Área do artigo: '. $user_data['area_artigo']."</h5>";
                  echo "<h5>" . 'Escrito por: '. $user_data['profissional']."</h5>";
                  echo "<br>";
                }
            ?>
          
          </div>
          <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <h4>Entre em contato conosco</h4>
                        <h6>Email: <a href="mailto:healthylivingfp@gmail.com">healthylivingfp@gmail.com</a></h6>
                        <h6>Telefone: (11) 99153-8304</h6>
                    </div>
                </div>
            </div>
          </footer>
    </body>

    <script>
      var search = document.getElementById('pesquisar');

      search.addEventListener("keydown", function(event) {
        if (event.key === "Enter")
        {
          searchData();
        }
      });

      function searchData()
      {
        window.location = 'artigonutri.php?search=' +search.value;
      }
    </script>
</html>
