@csrf

<div class="form-group">
    <label for="nome">Nome</label>
    <input class="form-control" type="text" name="nome" value="{{ old('nome',$proprietario->nome) }}">
</div>
<div class="form-group">
    <label for="cpf">CPF</label>
    <input class="form-control" type="text" name="cpf" value="{{ old('cpf',$proprietario->cpf) }}">
</div>
<div class="form-group">
    <label for="email">E-mail</label>
    <input class="form-control" type="text" name="email" value="{{ old('email',$proprietario->email) }}">
</div>
<div class="form-group">
    <label for="telefone">Telefone Principal</label>
    <input class="form-control" type="text" name="telefone" value="{{ old('telefone',$proprietario->telefone) }}">
</div>
<div class="form-group">
    <label for="telefone_adicional">Telefone Adicional</label>
    <input class="form-control" type="text" name="telefone_adicional"
           value="{{ old('telefone_adicional',$proprietario->telefone_adicional) }}">
</div>
<div class="form-group">
    <label for="telefone_contato">Telefone para Contato</label>
    <input class="form-control" type="text" name="telefone_contato"
           value="{{ old('telefone_contato',$proprietario->telefone_contato) }}">
</div>
<div class="form-group">
    <label for="telefone_contato_adicional">Telefone para Contato adicional</label>
    <input class="form-control" type="text" name="telefone_contato_adicional"
           value="{{ old('telefone_contato_adicional',$proprietario->telefone_contato_adicional) }}">
</div>
<br><br>


<p>Dados bancários</p>

<div class="form-group">
    <label for="agencia">Agencia</label>
    <input class="form-control" type="text" name="agencia" value="{{ old('agencia',$proprietario->agencia) }}">
</div>
<div class="form-group">
    <label for="conta">Conta</label>
    <input class="form-control" type="text" name="conta" value="{{ old('conta',$proprietario->conta) }}">
</div>
<div class="form-group">
    <label for="operacao">Operação</label>
    <input class="form-control" type="text" name="operacao" value="{{ old('operacao',$proprietario->operacao) }}">
</div>
<br><br>


<p>Endereço</p>

<input class="form-control" type="hidden" name="endereco_id" value="{{ $proprietario->endereco_id }}">

<div class="form-group">
    <label for="cep">CEP</label>
    <input class="form-control" type="text" name="cep" value="{{ old('cep',$proprietarioEndereco->cep) }}">
</div>
<div class="form-group">
    <label for="logradouro">Logradouro</label>
    <input class="form-control" type="text" name="logradouro"
           value="{{ old('logradouro',$proprietarioEndereco->logradouro) }}">
</div>
<div class="form-group">
    <label for="numero">Número</label>
    <input class="form-control" type="text" name="numero" value="{{ old('numero',$proprietarioEndereco->numero) }}">
</div>
<div class="form-group">
    <label for="complemento">Complemento</label>
    <input class="form-control" type="text" name="complemento"
           value="{{ old('complemento',$proprietarioEndereco->complemento) }}">
</div>
<div class="form-group">
    <label for="bairro">Bairro</label>
    <input class="form-control" type="text" name="bairro" value="{{ old('bairro',$proprietarioEndereco->bairro) }}">
</div>
<div class="form-group">
    <label for="municipio_id">Município</label>
    <input class="form-control" type="text" name="municipio_id"
           value="{{ old('municipio_id',$proprietarioEndereco->municipio_id) }}">
</div>
