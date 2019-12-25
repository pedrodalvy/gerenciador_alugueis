<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de imóveis</title>
</head>
<body>

<h3>Lista de imóveis</h3>

<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Descrição</th>
        <th>Endereço</th>
        <th>Inscrição imobiliária</th>
        <th>Valor para venda</th>
        <th>Valor para aluguel</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    @forelse($imoveis as $imovel)
        <tr>
            <td>{{ $imovel->id }}</td>
            <td>{{ $imovel->descricao }}</td>
            <td>implemetar endereco</td>
            <td>{{ $imovel->inscricao_imobiliaria }}</td>
            <td>{{ $imovel->valor_venda }}</td>
            <td>{{ $imovel->valor_aluguel }}</td>
            <td>
                <a href="{{ route('imovelFormularioEditar', $imovel->id) }}">Editar</a> |
                <a href="{{ route('imovelRemover', $imovel->id) }}">Remover</a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6">Nenhum imóvel cadastrado</td>
        </tr>
    @endforelse
    </tbody>
</table>
<br><br>

<a href="{{ route('imovelFormularioCadastrar') }}">Novo Imóvel</a>

</body>
</html>