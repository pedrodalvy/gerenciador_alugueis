@csrf

<div class="form-group">
    <label for="descricao">Descrição</label>
    <input class="form-control" type="text" name="descricao" placeholder="Descrição"
           value="{{ old('descricao', $imovel->descricao) }}">
</div>

<div class="form-group">
    <label for="inscricao_imobiliaria">Inscrição imobiliária</label>
    <input class="form-control" type="text" name="inscricao_imobiliaria" placeholder="Inscrição imobiliária"
           value="{{ old('inscricao_imobiliaria', $imovel->inscricao_imobiliaria) }}">
</div>

<div class="form-group">
    <label for="valor_venda">Valor para venda</label>
    <input class="form-control" type="text" name="valor_venda" placeholder="Valor para venda"
           value="{{ old('valor_venda', $imovel->valor_venda) }}">
</div>

<div class="form-group">
    <label for="valor_aluguel">Valor para aluguel</label>
    <input class="form-control" type="text" name="valor_aluguel" placeholder="Valor para aluguel"
           value="{{ old('valor_aluguel', $imovel->valor_aluguel) }}">
</div>


<p>Endereço</p>

<input class="form-control" type="hidden" name="endereco_id" value="{{ old('endereco_id', $imovel->endereco_id) }}">

<div class="form-group">
    <label for="cep">CEP</label>
    <input class="form-control" type="text" name="cep" placeholder="CEP" value="{{ old('cep', $imovelEndereco->cep) }}">
</div>

<div class="form-group">
    <label for="logradouro">Logradouro</label>
    <input class="form-control" type="text" name="logradouro" placeholder="Logradouro"
           value="{{ old('logradouro', $imovelEndereco->logradouro) }}">
</div>

<div class="form-group">
    <label for="numero">Número</label>
    <input class="form-control" type="text" name="numero" placeholder="Número"
           value="{{ old('numero', $imovelEndereco->numero) }}">
</div>

<div class="form-group">
    <label for="complemento">Complemento</label>
    <input class="form-control" type="text" name="complemento" placeholder="Complemento"
           value="{{ old('complemento', $imovelEndereco->complemento) }}">
</div>

<div class="form-group">
    <label for="bairro">Bairro</label>
    <input class="form-control" type="text" name="bairro" placeholder="Bairro"
           value="{{ old('bairro', $imovelEndereco->bairro) }}">
</div>

<div class="form-group">
    <label for="municipio_id">Município</label>
    <input class="form-control" type="text" name="municipio_id" placeholder="Município"
           value="{{ old('municipio_id', $imovelEndereco->municipio_id) }}">
</div>
