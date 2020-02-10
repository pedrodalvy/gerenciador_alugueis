<div class="row">
    <div class="col col-lg-3 col-md-3 col-12">
        @component('form._form_group', ['field' => 'nome'])
            {!! Form::label('nome', 'Nome', ['class' => 'control-label']) !!}
            {!! Form::text('nome', null, ['class' => 'form-control']) !!}
        @endcomponent
    </div>
    <div class="col col-lg-3 col-md-2 col-12">
        @component('form._form_group', ['field' => 'email'])
            {!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        @endcomponent
    </div>
</div>

<div class="row">
    <div class="col col-lg-2 col-md-2 col-12">
        @component('form._form_group', ['field' => 'cpf'])
            {!! Form::label('cpf', 'CPF', ['class' => 'control-label']) !!}
            {!! Form::text('cpf', null, ['class' => 'form-control cpf']) !!}
        @endcomponent
    </div>
    <div class="col col-lg-2 col-md-2 col-12">
        @component('form._form_group', ['field' => 'rg'])
            {!! Form::label('rg', 'RG', ['class' => 'control-label']) !!}
            {!! Form::text('rg', null, ['class' => 'form-control']) !!}
        @endcomponent
    </div>
    <div class="col col-lg-2 col-md-2 col-12">
        @component('form._form_group', ['field' => 'orgao_rg'])
            {!! Form::label('orgao_rg', 'Orgão Emissor', ['class' => 'control-label']) !!}
            {!! Form::text('orgao_rg', null, ['class' => 'form-control']) !!}
        @endcomponent
    </div>
</div>


<div class="row">
    <div class="col col-lg-3 col-md-2 col-12">
        @component('form._form_group', ['field' => 'telefone'])
            {!! Form::label('telefone', 'Telefone', ['class' => 'control-label']) !!}
            {!! Form::text('telefone', null, ['class' => 'form-control phone']) !!}
        @endcomponent
    </div>
    <div class="col col-lg-3 col-md-2 col-12">
        @component('form._form_group', ['field' => 'telefone_sec'])
            {!! Form::label('telefone_sec', 'Telefone para Contato', ['class' => 'control-label']) !!}
            {!! Form::text('telefone_sec', null, ['class' => 'form-control phone']) !!}
        @endcomponent
    </div>
</div>

<div class="row">
    <div class="col col-lg-3 col-md-2 col-12">
        <div class="radio {{ $errors->has('sexo') ? 'has-error' : '' }}">
            Sexo:
            <div class="row mt-3">
                <div class="col col-lg-4 col-md-4 col-12">
                    <label>
                        {{ Form::radio('sexo', 'f') }} Feminino
                    </label>
                </div>
                <div class="col col-lg-4 col-md-4 col-12">
                    <label>
                        {{ Form::radio('sexo', 'm') }} Masculino
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="col col-lg-3 col-md-2 col-12">
        @component('form._form_group', ['field' => 'telefone_sec'])
            @php($estadoCivil = array_merge([0 => 'Selecione uma opção'], App\Models\Pessoa::ESTADO_CIVIL))

            {!! Form::label('estado_civil', 'Estado Civil', ['class' => 'control-label']) !!}
            {!! Form::select('estado_civil', $estadoCivil, null, ['class' => 'form-control']) !!}
        @endcomponent
    </div>
</div>


{{--{!! Form::hidden('usar_endereco', 'sim') !!}--}}