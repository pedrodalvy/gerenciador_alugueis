<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar proprietario</title>
</head>
<body>

<h3>Cadastrar proprietario</h3>

<form action="{{ route('proprietariosCadastrar') }}" method="post">
    @csrf

    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="cpf" placeholder="CPF">
    <input type="text" name="email" placeholder="E-mail">
    <br>

    <input type="text" name="telefone" placeholder="Telefone Principal">
    <input type="text" name="telefone_adicional" placeholder="Telefone Adicional">
    <br>
    <input type="text" name="telefone_contato" placeholder="Telefone para Contato">
    <input type="text" name="telefone_contato_adicional" placeholder="Telefone para Contato adicional">
    <br><br>

    <p>Dados bancários</p>
    <input type="text" name="agencia" placeholder="Agencia">
    <input type="text" name="conta" placeholder="Conta">
    <input type="text" name="operacao" placeholder="Operação">
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

<a href="{{ route('proprietariosListar') }}">Voltar</a>

</body>
</html>