<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Editar um produto</title>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Crud</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="{{ route('cadastro') }}">Cadastrar <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="{{ route('lista') }}">Lista de itens</a>
      </div>
    </div>
  </nav>
<body>
    <form action="{{ route('alterar_produto', ['id' => $produto->id]) }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Produto</label>
          <input type="name" class="form-control" id="exampleFormControlInput1" name="nome" value="{{ $produto->nome }}">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Custo</label>
          <input type="decimal" class="form-control" id="exampleFormControlInput1" name="custo" value="{{ $produto->custo }}">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Preço</label>
          <input type="decimal" class="form-control" id="exampleFormControlInput1" name="preco" value="{{ $produto->preco }}">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Quantidade</label>
          <input type="integer" class="form-control" id="exampleFormControlInput1" name="quantidade" value="{{ $produto->quantidade }}">
        </div>
        <button class="btn btn-primary">Salvar</button>
        <br>
    </form>
</body>
</html>