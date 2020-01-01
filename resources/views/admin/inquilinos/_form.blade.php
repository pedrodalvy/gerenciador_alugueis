@csrf

<div class="form-group">
    <label for="nome">Nome</label>
    <input class="form-control" type="text" name="nome" value="{{ old('nome',$inquilino->nome) }}">
</div>
<div class="form-group">
    <label for="cpf">CPF</label>
    <input class="form-control" type="text" name="cpf" value="{{ old('cpf',$inquilino->cpf) }}">
</div>
<div class="form-group">
    <label for="email">E-mail</label>
    <input class="form-control" type="text" name="email" value="{{ old('email',$inquilino->email) }}">
</div>
<div class="form-group">
    <label for="telefone">Telefone Principal</label>
    <input class="form-control" type="text" name="telefone" value="{{ old('telefone',$inquilino->telefone) }}">
</div>
<div class="form-group">
    <label for="telefone_adicional">Telefone Adicional</label>
    <input class="form-control" type="text" name="telefone_adicional"
           value="{{ old('telefone_adicional',$inquilino->telefone_adicional) }}">
</div>
<div class="form-group">
    <label for="telefone_contato">Telefone para Contato</label>
    <input class="form-control" type="text" name="telefone_contato"
           value="{{ old('telefone_contato',$inquilino->telefone_contato) }}">
</div>
<div class="form-group">
    <label for="telefone_contato_adicional">Telefone para Contato adicional</label>
    <input class="form-control" type="text" name="telefone_contato_adicional"
           value="{{ old('telefone_contato_adicional',$inquilino->telefone_contato_adicional) }}">
</div>
<br><br>


<p>Endereço</p>

<input class="form-control" type="hidden" name="endereco_id" value="{{ $inquilino->endereco_id }}">

<div class="form-group">
    <label for="cep">CEP</label>
    <input class="form-control" type="text" name="cep" value="{{ old('cep',$inquilinoEndereco->cep) }}">
</div>
<div class="form-group">
    <label for="logradouro">Logradouro</label>
    <input class="form-control" type="text" name="logradouro"
           value="{{ old('logradouro',$inquilinoEndereco->logradouro) }}">
</div>
<div class="form-group">
    <label for="numero">Número</label>
    <input class="form-control" type="text" name="numero" value="{{ old('numero',$inquilinoEndereco->numero) }}">
</div>
<div class="form-group">
    <label for="complemento">Complemento</label>
    <input class="form-control" type="text" name="complemento"
           value="{{ old('complemento',$inquilinoEndereco->complemento) }}">
</div>
<div class="form-group">
    <label for="bairro">Bairro</label>
    <input class="form-control" type="text" name="bairro" value="{{ old('bairro',$inquilinoEndereco->bairro) }}">
</div>
<div class="form-group">
    <label for="municipio_id">Município</label>
    <input class="form-control" type="text" name="municipio_id"
           value="{{ old('municipio_id',$inquilinoEndereco->municipio_id) }}">
</div>
