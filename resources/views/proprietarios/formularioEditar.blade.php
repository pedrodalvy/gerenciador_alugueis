<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar cadastro</title>
</head>
<body>

<h3>Editar cadastro</h3>

<form action="{{ route('proprietariosEditar', $proprietario->id) }}" method="post">
    @csrf

    <input type="text" name="nome" placeholder="Nome" value="{{ $proprietario->nome }}">
    <input type="text" name="cpf" placeholder="CPF" value="{{ $proprietario->cpf }}">
    <input type="text" name="email" placeholder="E-mail" value="{{ $proprietario->email }}">
    <br>

    <input type="text" name="telefone" placeholder="Telefone Principal" value="{{ $proprietario->telefone }}">
    <input type="text" name="telefone_adicional" placeholder="Telefone Adicional"
           value="{{ $proprietario->telefone_adicional }}">
    <br>
    <input type="text" name="telefone_contato" placeholder="Telefone para Contato"
           value="{{ $proprietario->telefone_contato }}">
    <input type="text" name="telefone_contato_adicional" placeholder="Telefone para Contato adicional"
           value="{{ $proprietario->telefone_contato_adicional }}">
    <br><br>

    <p>Dados bancários</p>
    <input type="text" name="agencia" placeholder="Agencia" value="{{ $proprietario->agencia }}">
    <input type="text" name="conta" placeholder="Conta" value="{{ $proprietario->conta }}">
    <input type="text" name="operacao" placeholder="Operação" value="{{ $proprietario->operacao }}">
    <br><br>

    <p>Endereço</p>
    <input type="hidden" name="endereco_id" value="{{ $proprietario->endereco_id }}">
    <input type="text" name="cep" placeholder="CEP" value="{{ $proprietarioEndereco->cep }}">
    <input type="text" name="logradouro" placeholder="Logradouro" value="{{ $proprietarioEndereco->logradouro }}">
    <input type="text" name="numero" placeholder="Número" value="{{ $proprietarioEndereco->numero }}">
    <br>

    <input type="text" name="complemento" placeholder="Complemento" value="{{ $proprietarioEndereco->complemento }}">
    <input type="text" name="bairro" placeholder="Bairro" value="{{ $proprietarioEndereco->bairro }}">
    <input type="text" name="municipio_id" placeholder="Município" value="{{ $proprietarioEndereco->municipio_id }}">
    <br><br>

    <button type="submit">Salvar</button>

</form>
<br><br>

<a href="{{ route('proprietariosListar') }}">Voltar</a>

</body>
</html>