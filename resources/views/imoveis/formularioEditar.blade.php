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

<form action="{{ route('imovelEditar', $imovel->id ) }}" method="post">
    @csrf

    <input type="text" name="descricao" placeholder="Descrição" value="{{ $imovel->descricao }}">
    <input type="text" name="inscricao_imobiliaria" placeholder="Inscrição imobiliária" value="{{ $imovel->inscricao_imobiliaria }}">
    <br>

    <input type="text" name="valor_venda" placeholder="Valor para venda" value="{{ $imovel->valor_venda }}">
    <input type="text" name="valor_aluguel" placeholder="Valor para aluguel" value="{{ $imovel->valor_aluguel }}">
    <br><br>


    <p>Endereço</p>
    <input type="hidden" name="endereco_id" value="{{ $imovel->endereco_id }}">
    <input type="text" name="cep" placeholder="CEP" value="{{ $imovelEndereco->cep }}">
    <input type="text" name="logradouro" placeholder="Logradouro" value="{{ $imovelEndereco->logradouro }}">
    <input type="text" name="numero" placeholder="Número" value="{{ $imovelEndereco->numero }}">
    <br>

    <input type="text" name="complemento" placeholder="Complemento" value="{{ $imovelEndereco->complemento }}">
    <input type="text" name="bairro" placeholder="Bairro" value="{{ $imovelEndereco->bairro }}">
    <input type="text" name="municipio_id" placeholder="Município" value="{{ $imovelEndereco->municipio_id }}">
    <br><br>

    <button type="submit">Salvar</button>

</form>
<br><br>

<a href="{{ route('imovelListar') }}">Voltar</a>

</body>
</html>