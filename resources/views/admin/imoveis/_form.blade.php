<div class="row">
    <div class="col">
        @component('form._form_group', ['field' => 'descricao'])
            {{ Form::label('descricao', 'Descrição', ['class' => 'control-label']) }}
            {{ Form::text('descricao', null, ['class' => 'form-control']) }}
        @endcomponent
    </div>
</div>

<div class="row">
    <div class="col  col-lg-4 col-md-4 col-12">
        @component('form._form_group', ['field' => 'inscricao_imobiliaria'])
            {{ Form::label('inscricao_imobiliaria', 'Inscrição imobiliária', ['class' => 'control-label']) }}
            {{ Form::text('inscricao_imobiliaria', null, ['class' => 'form-control']) }}
        @endcomponent
    </div>
    <div class="col col-lg-4 col-md-4 col-12">
        @component('form._form_group', ['field' => 'valor_venda'])
            {{ Form::label('valor_venda', 'Valor para venda', ['class' => 'control-label']) }}
            {{ Form::text('valor_venda', null, ['class' => 'form-control money']) }}
        @endcomponent
    </div>
    <div class="col col-lg-4 col-md-4 col-12">
        @component('form._form_group', ['field' => 'valor_aluguel'])
            {{ Form::label('valor_aluguel', 'Valor para aluguel', ['class' => 'control-label']) }}
            {{ Form::text('valor_aluguel', null, ['class' => 'form-control money']) }}
        @endcomponent
    </div>
</div>

<br>
<p>Endereço</p>

{{ Form::hidden('endereco_id', $imovel['endereco_id']) }}

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
            @if ($imovel['municipio_id'])
                {{ Form::select(
                        'municipio_id',
                        ["{$imovel['municipio_id']}" => "{$imovel['nome']}/{$imovel['uf']}"],
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







