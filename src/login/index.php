<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>Entre no Abas.online</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="box">
    <form class="form-signin">
      <img src="images/marca-abas-positiva.svg" class="marca" alt="marca Abas.online" />

      <p>Acesse o Abas</p>

      <div class="alert alert-success" role="alert" style="display: none">
        Sucesso!
      </div>

      <div class="alert alert-danger" role="alert" style="display: none">
        Ops! Dados incorretos.
      </div>

      <div class="form-group">
        <label for="username" class="sr-only">E-mail</label>
        <input type="email" id="username" name="username" class="form-control" placeholder="Email" />
      </div>

      <div class="form-group">
        <label for="password" class="sr-only">Senha</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Senha" />
      </div>

      <button type="submit" class="btn btn-lg btn-block">Acessar</button>

      <p class="mt-3"><a href="#">Esqueceu sua senha?</a></p>
    </form>
  </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>