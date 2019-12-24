<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar imóvel</title>
</head>
<body>

<h3>Cadastrar imóvel</h3>

<form action="{{ route('imovelCadastrar') }}" method="post">
    @csrf

    <input type="text" name="descricao" placeholder="Descrição">
    <input type="text" name="inscricao_imobiliaria" placeholder="Inscrição imobiliária">
    <br>

    <input type="text" name="valor_venda" placeholder="Valor para venda">
    <input type="text" name="valor_aluguel" placeholder="Valor para aluguel">
    <br><br>


    <p>Endereço</p>
    <input type="text" name="cep" placeholder="CEP">
    <input type="text" name="logradouro" placeholder="Logradouro">
    <input type="text" name="numero" placeholder="Número">
    <br>

    <input type="text" name="complemento" placeholder="Complemento">
    <input type="text" name="bairro" placeholder="Bairro">
    <input type="text" name="municipio_id" placeholder="Município">
    <br><br>

    <button type="submit">Cadastrar</button>

</form>
<br><br>

<a href="{{ route('imovelListar') }}">Voltar</a>

</body>
</html>