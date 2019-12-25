<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de proprietários</title>
</head>
<body>

<h3>Lista de proprietários</h3>

<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    @forelse($proprietarios as $proprietario)
        <tr>
            <td>{{ $proprietario->id }}</td>
            <td>{{ $proprietario->nome }}</td>
            <td>{{ $proprietario->cpf }}</td>
            <td>{{ $proprietario->email }}</td>
            <td>{{ $proprietario->telefone }}</td>
            <td>
                <a href="{{ route('proprietariosFormularioEditar', $proprietario->id) }}">Editar</a> |
                <a href="{{ route('proprietariosRemover', $proprietario->id) }}">Remover</a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6">Nenhum proprietário cadastrado</td>
        </tr>
    @endforelse
    </tbody>
</table>
<br><br>

<a href="{{ route('proprietariosFormularioCadastrar') }}">Novo Proprietário</a>

</body>
</html>