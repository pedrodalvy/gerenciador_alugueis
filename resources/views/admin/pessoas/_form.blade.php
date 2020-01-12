@component('form._form_group', ['field' => 'nome'])
    {!! Form::label('nome', 'Nome', ['class' => 'control-label']) !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
@endcomponent

@component('form._form_group', ['field' => 'email'])
    {!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
@endcomponent

@component('form._form_group', ['field' => 'cpf'])
    {!! Form::label('cpf', 'CPF', ['class' => 'control-label']) !!}
    {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
@endcomponent

@component('form._form_group', ['field' => 'rg'])
    {!! Form::label('rg', 'RG', ['class' => 'control-label']) !!}
    {!! Form::text('rg', null, ['class' => 'form-control']) !!}
@endcomponent

@component('form._form_group', ['field' => 'orgao_rg'])
    {!! Form::label('orgao_rg', 'Orgão Emissor', ['class' => 'control-label']) !!}
    {!! Form::text('orgao_rg', null, ['class' => 'form-control']) !!}
@endcomponent

@component('form._form_group', ['field' => 'telefone'])
    {!! Form::label('telefone', 'Telefone', ['class' => 'control-label']) !!}
    {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
@endcomponent

@component('form._form_group', ['field' => 'telefone_sec'])
    {!! Form::label('telefone_sec', 'Telefone para Contato', ['class' => 'control-label']) !!}
    {!! Form::text('telefone_sec', null, ['class' => 'form-control']) !!}
@endcomponent

<div class="radio {{ $errors->has('sexo') ? 'has-error' : '' }}">
    Sexo:
    <label>
        {{ Form::radio('sexo', 'f') }} Feminino
    </label>
    <label>
        {{ Form::radio('sexo', 'm') }} Masculino
    </label>
</div>

@component('form._form_group', ['field' => 'telefone_sec'])
    @php($estadoCivil = array_merge([0 => 'Selecione uma opção'], App\Models\Pessoa::ESTADO_CIVIL))

    {!! Form::label('estado_civil', 'Estado Civil', ['class' => 'control-label']) !!}
    {!! Form::select('estado_civil', $estadoCivil, null, ['class' => 'form-control']) !!}
@endcomponent
