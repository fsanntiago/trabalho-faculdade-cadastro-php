<?php
$name = $_POST["txtNome"];
$email = $_POST["txtEmail"];
$senha = $_POST["txtSenha"];
$rua = $_POST["txtRua"];
$bairro = $_POST["txtBairro"];
$cidade = $_POST["txtCidade"];
$estado = $_POST["selectEstado"];
$cep = $_POST["txtCEP"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Cadastrado</title>
</head>

<body class="text-align">
  <div class="container">
    <div class="alert alert-success" role="alert">
      Cadastro feito com sucesso.
    </div>
    <h1 class="mb-3 font-weight-bold text-success">Cadastro para entrega</h1>

    <div class="row">
      <div class="col-md">
        <form method="POST" action="cadastrado.php">
          <div class="mb-3">
            <input name="txtNome" class="form-control" type="text" placeholder="Nome" value="<?php echo $name ?>">
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <input class="form-control" type="email" placeholder="Email" value="<?php echo $email ?>">
            </div>
            <div class="col-md-6">
              <input class="form-control" type="password" placeholder="Senha" value="<?php echo  $senha ?>">
            </div>
          </div>
          <div class="mb-3">
            <input class="form-control" type="text" placeholder="Rua" value="<?php echo $rua ?>">
          </div>
          <div class="mb-3">
            <input class="form-control" type="text" placeholder="Bairro" value="<?php echo $bairro ?>">
          </div>
          <div class="row mb-3">
            <div class="col-md-5">
              <input class="form-control" type="text" placeholder="Cidade" value="<?php echo $cidade ?>">
            </div>
            <div class="col-md-4">
              <select class="form-control">
                <option value="$<?php echo $estado ?>"><?php echo $estado ?></option>
              </select>
            </div>
            <div class=" col-md-3">
              <input class="form-control" type="text" placeholder="CEP" value="<?php echo $cep ?>">
            </div>
          </div>

          <button class="btn btn-primary btn-md" type="submit">
            Enviar
          </button>
        </form>
      </div>
    </div>
  </div>


  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>