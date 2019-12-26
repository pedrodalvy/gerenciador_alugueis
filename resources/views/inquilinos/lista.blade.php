<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de inquilinos</title>
</head>
<body>

<h3>Lista de inquilinos</h3>

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
    @forelse($inquilinos as $inquilino)
        <tr>
            <td>{{ $inquilino->id }}</td>
            <td>{{ $inquilino->nome }}</td>
            <td>{{ $inquilino->cpf }}</td>
            <td>{{ $inquilino->email }}</td>
            <td>{{ $inquilino->telefone }}</td>
            <td>
                <a href="{{ route('inquilinoFormularioEditar', $inquilino->id) }}">Editar</a> |
                <a href="{{ route('inquilinoRemover', $inquilino->id) }}">Remover</a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6">Nenhum inquilino cadastrado</td>
        </tr>
    @endforelse
    </tbody>
</table>
<br><br>

<a href="{{ route('inquilinoFormularioCadastrar') }}">Novo Inquilino</a>

</body>
</html>