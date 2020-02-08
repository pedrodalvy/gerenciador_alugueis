// marca o item ativo da barra lateral
(function paginaAtiva() {
    if (window.location.href.includes('imovel')) {
        $('#navImovel').addClass('active')
    } else if (window.location.href.includes('proprietarios')) {
        $('#navProprietarios').addClass('active')
    } else if (window.location.href.includes('inquilinos')) {
        $('#navInquilinos').addClass('active')
    } else {
        $('#navHome').addClass('active')
    }
})();
