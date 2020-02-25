function fn_excluir(){
	$('.form_excluir').submit(function () {
		return confirm("Click ok para continuar")
	});
}
function load_modal(nome, empresa, id){
	$('#text_id').val(id);
	$('#text_nome').val(nome);
	$('#text_empresa').val(empresa);
}