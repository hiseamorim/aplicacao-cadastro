<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Cover Template · Bootstrap v5.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Capa</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="#">Início</a>
        <a class="nav-link" href="#">Cadastre-se</a>
        <a class="nav-link" href="#">Log in</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>Capa de página.</h1>
    <p class="lead">A capa é um modelo de uma página para construir páginas iniciais simples e bonitas. Baixe, edite o texto e adicione sua própria foto de fundo em tela cheia para torná-la sua.</p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Saiba mais</a>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Modelo de capa para <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, de <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
  </footer>
</div>

  </body>
</html>

 <!-- navbar.php (Menu Superior de Navegação) -->
 <?php
echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
echo '  <div class="container">';
echo '    <a class="navbar-brand" href="#">Aplicação</a>';
echo '    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
echo '      <span class="navbar-toggler-icon"></span>';
echo '    </button>';
echo '    <div class="collapse navbar-collapse" id="navbarSupportedContent">';
echo '      <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
echo '        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>';
echo '        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
echo '        <li class="nav-item"><a class="nav-link" href="cadastro.php">Cadastro</a></li>';
echo '      </ul>';
echo '    </div>';
echo '</div>';
echo '</nav>';
?>

<!-- login.php (Tela de Login) -->
<?php
require_once 'navbar.php';
?>

<div class="container">
  <h2>Login</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <label for="password">Senha:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Entrar">
  </form>
</div>

<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
  // Verificar se os dados de login são válidos
  // ...
}
?>

<!-- cadastro.php (Tela de Cadastro) -->
<?php
require_once 'navbar.php';
?>

<div class="container">
  <h2>Cadastro</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <label for="password">Senha:</label>
    <input type="password" id="password" name="password"><br><br>
    <label for="tipoUser">Tipo de usuário:</label>
    <select id="tipoUser" name="tipoUser">
      <option value=1>Administrador</option>
      <option value=2>Comum</option>
    </select><br><br>
    <input type="submit" value="Cadastrar">
  </form>
</div>

<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['tipoUser'])) {
  // Verificar se os dados de cadastro são válidos
  // ...
}
?>


