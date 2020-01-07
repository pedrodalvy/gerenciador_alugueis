@component('form._form_group', ['field' => 'nome'])
    {!! Form::label('nome', 'Nome', ['class' => 'control-label']) !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
@endcomponent

@component('form._form_group', ['field' => 'cpf'])
    {!! Form::label('cpf', 'CPF', ['class' => 'control-label']) !!}
    {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
@endcomponent

@component('form._form_group', ['field' => 'email'])
    {!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
@endcomponent

@component('form._form_group', ['field' => 'telefone'])
    {!! Form::label('telefone', 'Telefone Principal', ['class' => 'control-label']) !!}
    {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
@endcomponent

@component('form._form_group', ['field' => 'telefone_adicional'])
    {!! Form::label('telefone_adicional', 'Telefone Adicional', ['class' => 'control-label']) !!}
    {!! Form::text('telefone_adicional', null, ['class' => 'form-control']) !!}
@endcomponent

@component('form._form_group', ['field' => 'telefone_contato'])
    {!! Form::label('telefone_contato', 'Telefone para Contato', ['class' => 'control-label']) !!}
    {!! Form::text('telefone_contato', null, ['class' => 'form-control']) !!}
@endcomponent

@component('form._form_group', ['field' => 'telefone_contato_adicional'])
    {!! Form::label('telefone_contato_adicional', 'Telefone para Contato adicional', ['class' => 'control-label']) !!}
    {!! Form::text('telefone_contato_adicional', null, ['class' => 'form-control']) !!}
@endcomponent
<br><br>


<p>Endereço</p>

{!! Form::hidden('endereco_id', $inquilino['endereco_id']) !!}

@component('form._form_group', ['field' => 'cep'])
    {!! Form::label('cep', 'CEP', ['class' => 'control-label']) !!}
    {!! Form::text('cep', null, ['class' => 'form-control']) !!}
@endcomponent

@component('form._form_group', ['field' => 'logradouro'])
    {!! Form::label('logradouro', 'Logradouro', ['class' => 'control-label']) !!}
    {!! Form::text('logradouro', null, ['class' => 'form-control']) !!}
@endcomponent

@component('form._form_group', ['field' => 'numero'])
    {!! Form::label('numero', 'Número', ['class' => 'control-label']) !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
@endcomponent

@component('form._form_group', ['field' => 'complemento'])
    {!! Form::label('complemento', 'Complemento', ['class' => 'control-label']) !!}
    {!! Form::text('complemento', null, ['class' => 'form-control']) !!}
@endcomponent

@component('form._form_group', ['field' => 'bairro'])
    {!! Form::label('bairro', 'Bairro', ['class' => 'control-label']) !!}
    {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
@endcomponent

@component('form._form_group', ['field' => 'municipio_id'])
    {!! Form::label('municipio_id', 'Município', ['class' => 'control-label']) !!}
    {!! Form::text('municipio_id', null, ['class' => 'form-control']) !!}
@endcomponent