<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <style>
    .hidden {
      display: none;
    }
  </style>
  <title>Healthy Living</title>
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
          <a href="../sair.php" class="btn btn-danger me-3">Sair</a>
        </div>
      </div>
    </div>
  </nav>

  <br>
  <br>
  <br>

  <div class="container">
    <form id="formulario" method="post" action="processar_formulario.php">
      <h1 align="center">Formulário Healthy Living</h1>

      <div class="card" id="question1">
        <div class="card-body">
          <h6 class="card-title">Pergunta 1: Qual é a sua faixa etária?</h6>
          <div class="options">
            <input type="radio" id="pergunta1a" name="pergunta1" value="A">
            <label for="pergunta1a">A 0 - 20</label>
            <br>
            <input type="radio" id="pergunta1b" name="pergunta1" value="B">
            <label for="pergunta1b">B 20 - 40</label>
            <br>
            <input type="radio" id="pergunta1c" name="pergunta1" value="C">
            <label for="pergunta1c">C 40 - 60</label>
            <br>
            <input type="radio" id="pergunta1d" name="pergunta1" value="D">
            <label for="pergunta1d">D 60+</label>
          </div>
          <button class="btn btn-primary next-button" onclick="showNextQuestion('question1', 'question2')">Próxima pergunta</button>
        </div>
      </div>
  
      <div class="card hidden" id="question2">
        <div class="card-body">
          <h6 class="card-title">Pergunta 2: Você pratica atividade física?</h6>
          <div class="options">
            <input type="radio" id="pergunta2a" name="pergunta2" value="A">
            <label for="pergunta2a">A Sim</label>
            <br>
            <input type="radio" id="pergunta2b" name="pergunta2" value="B">
            <label for="pergunta2b">B Não</label>
            <br>
            <input type="radio" id="pergunta2c" name="pergunta2" value="C">
            <label for="pergunta2c">C Diariamente</label>
            <br>
            <input type="radio" id="pergunta2d" name="pergunta2" value="D">
            <label for="pergunta2d">D Raramente</label>
          </div>
          <button class="btn btn-primary next-button" onclick="showNextQuestion('question2', 'question1')">Voltar</button>
          <button class="btn btn-primary next-button" onclick="showNextQuestion('question2', 'question3')">Próxima pergunta</button>
        </div>
      </div>
  
      <div class="card hidden" id="question3">
        <div class="card-body">
          <h6 class="card-title">Pergunta 3: Na sua opinião, qual a importância de uma alimentação saudável para a sua saúde?</h6>
          <div class="options">
            <input type="radio" id="pergunta3a" name="pergunta3" value="A">
            <label for="pergunta3a">A Muito Importante</label>
            <br>
            <input type="radio" id="pergunta3b" name="pergunta3" value="B">
            <label for="pergunta3b">B Importante</label>
            <br>
            <input type="radio" id="pergunta3c" name="pergunta3" value="C">
            <label for="pergunta3c">C Pouco Importante</label>
            <br>
            <input type="radio" id="pergunta3d" name="pergunta3" value="D">
            <label for="pergunta3d">D Sem Importância</label>
          </div>
          <button class="btn btn-primary next-button" onclick="showNextQuestion('question3', 'question2')">Voltar</button>
          <button class="btn btn-primary next-button" onclick="showNextQuestion('question3', 'question4')">Próxima pergunta</button>
        </div>
      </div>
  
      <div class="card hidden" id="question4">
        <div class="card-body">
          <h6 class="card-title">Pergunta 4: Você faz uso contínuo de medicação?</h6>
          <div class="options">
            <input type="radio" id="pergunta4a" name="pergunta4" value="A">
            <label for="pergunta4a">A Sim</label>
            <br>
            <input type="radio" id="pergunta4b" name="pergunta4" value="B">
            <label for="pergunta4b">B Não</label>
            <br>
            <input type="radio" id="pergunta4c" name="pergunta4" value="C">
            <label for="pergunta4c">C Já fiz uso de medicação contínua</label>
            <br>
            <input type="radio" id="pergunta4d" name="pergunta4" value="D">
            <label for="pergunta4d">D Nunca fiz uso de medicação contínua</label>
          </div>
          <button class="btn btn-primary next-button" onclick="showNextQuestion('question4', 'question3')">Voltar</button>
          <button class="btn btn-primary next-button" onclick="showNextQuestion('question4', 'question5')">Próxima pergunta</button>
        </div>
      </div>

      <div class="card hidden" id="question5">
        <div class="card-body">
          <h6 class="card-title">Pergunta 5: Você costuma consumir alimentos ultraprocessados?</h6>
          <div class="options">
            <input type="radio" id="pergunta5a" name="pergunta5" value="A">
            <label for="pergunta5a">A Sim, com frequência</label>
            <br>
            <input type="radio" id="pergunta5b" name="pergunta5" value="B">
            <label for="pergunta5b">B Sim, ocasionalmente</label>
            <br>
            <input type="radio" id="pergunta5c" name="pergunta5" value="C">
            <label for="pergunta5c">C Raramente</label>
            <br>
            <input type="radio" id="pergunta5d" name="pergunta5" value="D">
            <label for="pergunta5d">D Não, evito</label>
          </div>
          <button class="btn btn-primary next-button" type="button" onclick="showNextQuestion('question5', 'question4', true)">Voltar</button>
          <button class="btn btn-primary submit-button" type="button" onclick="enviarFormulario()">Enviar</button>
        </div>
      </div>
    </form>
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

  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <script>
    // Funções JavaScript
    function showNextQuestion(currentQuestionId, nextQuestionId, isLast = false) {
      const currentQuestion = document.getElementById(currentQuestionId);
      const nextQuestion = document.getElementById(nextQuestionId);

      currentQuestion.classList.add('hidden');
      nextQuestion.classList.remove('hidden');

      // Se for a última pergunta, altera a ação do formulário para 'processar_formulario.php'
      if (isLast) {
        document.getElementById('formulario').action = 'processar_formulario.php';
      }
    }

    function enviarFormulario() {
      // Adicione uma verificação para garantir que todas as perguntas foram respondidas antes de enviar
      var radioButtons = document.querySelectorAll('input[type=radio]:checked');
      if (radioButtons.length < 5) {
        alert('Por favor, responda a todas as perguntas antes de enviar.');
        return;
      }

      var xhr = new XMLHttpRequest();
      xhr.open("POST", "processar_formulario.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      var formData = new FormData(document.getElementById("formulario"));

      xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
          console.log(xhr.responseText);
        }
      };

      xhr.send(formData);
    }
  </script>
</body>

</html>
