<script>
    (function select2() {
        $('.selectMunicipios').select2({
            minimumInputLength: 3,
            width: '100%',
            theme: 'bootstrap4',
            language: "pt-BR",
            ajax: {
                url: '{{ route('cidadesApi') }}',
                data: function (params) {
                    return {
                        cidade: params.term
                    }
                },
                processResults: function (data) {
                    return {
                        results: data.map(function (cidade) {
                            return {
                                id: cidade.id,
                                text: cidade.nome + '/' + cidade.uf
                            }
                        })
                    }
                }
            }
        });
    })();
</script>