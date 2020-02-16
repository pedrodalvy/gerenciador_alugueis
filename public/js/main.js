// marca o item ativo da barra lateral
(function paginaAtiva() {
    if (window.location.href.includes('imovel')) {
        $('#navImovel').addClass('active')
    } else if (window.location.href.includes('proprietarios')) {
        $('#navProprietarios').addClass('active')
    } else if (window.location.href.includes('inquilinos')) {
        $('#navInquilinos').addClass('active')
    } else if (window.location.href.includes('pessoas')) {
        $('#navPessoas').addClass('active')
    } else {
        $('#navHome').addClass('active')
    }
})();

$(document).ready(function(){
    $('.money').mask('000.000.000.000.000,00', {reverse: true});
    $('.cep').mask('00000-000');
    $('.cpf').mask('000.000.000-00');


    let maskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 0 0000-0000' : '(00) 0000-00009';
        },
        options = {onKeyPress: function(val, e, field, options) {
                field.mask(maskBehavior.apply({}, arguments), options);
            }
        };

    $('.phone').mask(maskBehavior, options);
});