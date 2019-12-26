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

<form action="{{ route('inquilinoEditar', $inquilino->id) }}" method="post">
    @csrf

    <input type="text" name="nome" placeholder="Nome" value="{{ $inquilino->nome }}">
    <input type="text" name="cpf" placeholder="CPF" value="{{ $inquilino->cpf }}">
    <input type="text" name="email" placeholder="E-mail" value="{{ $inquilino->email }}">
    <br>

    <input type="text" name="telefone" placeholder="Telefone Principal" value="{{ $inquilino->telefone }}">
    <input type="text" name="telefone_adicional" placeholder="Telefone Adicional"
           value="{{ $inquilino->telefone_adicional }}">
    <br>
    <input type="text" name="telefone_contato" placeholder="Telefone para Contato"
           value="{{ $inquilino->telefone_contato }}">
    <input type="text" name="telefone_contato_adicional" placeholder="Telefone para Contato adicional"
           value="{{ $inquilino->telefone_contato_adicional }}">
    <br><br>

    <p>Endereço</p>
    <input type="hidden" name="endereco_id" value="{{ $inquilino->endereco_id }}">
    <input type="text" name="cep" placeholder="CEP" value="{{ $inquilinoEndereco->cep }}">
    <input type="text" name="logradouro" placeholder="Logradouro" value="{{ $inquilinoEndereco->logradouro }}">
    <input type="text" name="numero" placeholder="Número" value="{{ $inquilinoEndereco->numero }}">
    <br>

    <input type="text" name="complemento" placeholder="Complemento" value="{{ $inquilinoEndereco->complemento }}">
    <input type="text" name="bairro" placeholder="Bairro" value="{{ $inquilinoEndereco->bairro }}">
    <input type="text" name="municipio_id" placeholder="Município" value="{{ $inquilinoEndereco->municipio_id }}">
    <br><br>

    <button type="submit">Salvar</button>

</form>
<br><br>

<a href="{{ route('inquilinoListar') }}">Voltar</a>

</body>
</html>