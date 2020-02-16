{{ Form::hidden('endereco_id', $endereco['id']) }}

<div class="row">
    <div class="col col-lg-3 col-md-3 col-12">
        @component('form._form_group', ['field' => 'cep'])
            {{ Form::label('cep', 'CEP', ['class' => 'control-label']) }}
            {{ Form::text('cep', null, ['class' => 'form-control cep']) }}
        @endcomponent
    </div>
    <div class="col col-lg-9 col-md-9 col-12">
        @component('form._form_group', ['field' => 'logradouro'])
            {{ Form::label('logradouro', 'Logradouro', ['class' => 'control-label']) }}
            {{ Form::text('logradouro', null, ['class' => 'form-control']) }}
        @endcomponent
    </div>
</div>

<div class="row">
    <div class="col col-lg-9 col-md-9 col-12">
        @component('form._form_group', ['field' => 'complemento'])
            {{ Form::label('complemento', 'Complemento', ['class' => 'control-label']) }}
            {{ Form::text('complemento', null, ['class' => 'form-control']) }}
        @endcomponent
    </div>

    <div class="col col-lg-3 col-md-3 col-12">
        @component('form._form_group', ['field' => 'numero'])
            {{ Form::label('numero', 'Número', ['class' => 'control-label']) }}
            {{ Form::text('numero', null, ['class' => 'form-control']) }}
        @endcomponent
    </div>

</div>

<div class="row">
    <div class="col col-lg-5 col-md-5 col-12">
        @component('form._form_group', ['field' => 'bairro'])
            {{ Form::label('bairro', 'Bairro', ['class' => 'control-label']) }}
            {{ Form::text('bairro', null, ['class' => 'form-control']) }}
        @endcomponent
    </div>
    <div class="col col-lg-7 col-md-7 col-12">
        @component('form._form_group', ['field' => 'municipio_id'])
            {{ Form::label('municipio_id', 'Município', ['class' => 'control-label']) }}
            @if ($endereco['municipio_id'])
                {{ Form::select(
                        'municipio_id',
                        ["{$endereco['municipio_id']}" => "{$endereco['nome']}/{$endereco['uf']}"],
                        null,
                        ['class' => 'form-control selectMunicipios'])
                }}
            @else
                {{ Form::select(
                        'municipio_id',
                        ["" => "Selecione uma cidade"],
                        null,
                        ['class' => 'form-control selectMunicipios'])
                }}
            @endif

        @endcomponent
    </div>
</div>
