function fn_excluir(){
	$('.form_excluir').submit(function () {
		return confirm("Click ok para continuar")
	});
}
function load_modal(nome, empresa){
	$('#nome').val(nome);
	$('empresa').val(empresa);
}