<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Cadastro</title>
</head>

<body class="text-align">
  <div class="container">

    <h1 class="mb-3 font-weight-bold text-info">Cadastro para entrega</h1>

    <div class="row">
      <div class="col-md">
        <form method="POST" action="cadastrado.php">
          <div class="mb-3">
            <input name="txtNome" id="txtNome" class="form-control" type="text" placeholder="Nome">
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <input name="txtEmail" id="txtEmail" class="form-control" type="email" placeholder="Email">
            </div>
            <div class="col-md-6">
              <input name="txtSenha" class="form-control" type="password" placeholder="Senha">
            </div>
          </div>
          <div class="mb-3">
            <input name="txtRua" class="form-control" type="text" placeholder="Rua">
          </div>
          <div class="mb-3">
            <input name="txtBairro" class="form-control" type="text" placeholder="Bairro">
          </div>
          <div class="row mb-3">
            <div class="col-md-5">
              <input name="txtCidade" class="form-control" type="text" placeholder="Cidade">
            </div>
            <div class="col-md-4">
              <select class="form-control" name="selectEstado">
                <option selected value="selecionar o elemento">Selecione o estado</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
              </select>
            </div>
            <div class="col-md-3">
              <input name="txtCEP" class="form-control" type="text" placeholder="CEP">
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