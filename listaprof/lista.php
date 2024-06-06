<?php
  include_once('../config.php');

  if(!empty($_GET['search']))
  {
    $data = $_GET['search'];
    $sql = "SELECT * FROM profissionais WHERE nome LIKE '%$data%' or area LIKE '%$data%' ORDER BY ident_prof DESC";
  }
  else
  {
    $sql = "SELECT * FROM profissionais ORDER BY ident_prof DESC";
  }
  $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../quemsomos/style.css">

    <title>Profissionais</title>
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
            <a class="nav-link" href="./lista.php">Profissionais</a>
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

    <div class="m-5">
        <table class="table table-hover text-white">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Área</th>
                <th>Identificação profissional</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>" .$user_data['nome']."</td>";
                        echo "<td>" .$user_data['area']."</td>";
                        echo "<td>" .$user_data['ident_prof']."</td>";
                        echo "<td>" .$user_data['email']."</td>";
                        echo "<td>" .$user_data['telefone']."</td>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <footer class="footer fixed-bottom">
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
    window.location = 'lista.php?search=' +search.value;
  }
</script>

</html>