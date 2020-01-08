@component('form._form_group', ['field' => 'descricao'])
    {{ Form::label('descricao', 'Descrição', ['class' => 'control-label']) }}
    {{ Form::text('descricao', null, ['class' => 'form-control']) }}
@endcomponent

@component('form._form_group', ['field' => 'inscricao_imobiliaria'])
    {{ Form::label('inscricao_imobiliaria', 'Inscrição imobiliária', ['class' => 'control-label']) }}
    {{ Form::text('inscricao_imobiliaria', null, ['class' => 'form-control']) }}
@endcomponent

@component('form._form_group', ['field' => 'valor_venda'])
    {{ Form::label('valor_venda', 'Valor para venda', ['class' => 'control-label']) }}
    {{ Form::text('valor_venda', null, ['class' => 'form-control']) }}
@endcomponent

@component('form._form_group', ['field' => 'valor_aluguel'])
    {{ Form::label('valor_aluguel', 'Valor para aluguel', ['class' => 'control-label']) }}
    {{ Form::text('valor_aluguel', null, ['class' => 'form-control']) }}
@endcomponent

<br>
<p>Endereço</p>

{{ Form::hidden('endereco_id', $imovel['endereco_id']) }}

@component('form._form_group', ['field' => 'cep'])
    {{ Form::label('cep', 'CEP', ['class' => 'control-label']) }}
    {{ Form::text('cep', null, ['class' => 'form-control']) }}
@endcomponent

@component('form._form_group', ['field' => 'logradouro'])
    {{ Form::label('logradouro', 'Logradouro', ['class' => 'control-label']) }}
    {{ Form::text('logradouro', null, ['class' => 'form-control']) }}
@endcomponent

@component('form._form_group', ['field' => 'numero'])
    {{ Form::label('numero', 'Número', ['class' => 'control-label']) }}
    {{ Form::text('numero', null, ['class' => 'form-control']) }}
@endcomponent

@component('form._form_group', ['field' => 'complemento'])
    {{ Form::label('complemento', 'Complemento', ['class' => 'control-label']) }}
    {{ Form::text('complemento', null, ['class' => 'form-control']) }}
@endcomponent

@component('form._form_group', ['field' => 'bairro'])
    {{ Form::label('bairro', 'Bairro', ['class' => 'control-label']) }}
    {{ Form::text('bairro', null, ['class' => 'form-control']) }}
@endcomponent

@component('form._form_group', ['field' => 'municipio_id'])
    {{ Form::label('municipio_id', 'Município', ['class' => 'control-label']) }}
    {{ Form::text('municipio_id', null, ['class' => 'form-control']) }}
@endcomponent

