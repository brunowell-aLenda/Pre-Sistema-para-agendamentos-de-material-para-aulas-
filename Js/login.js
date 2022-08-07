// Validação de formulários
function validacao(){
	if  (document.fm.nome.value == '') {
		document.fm.nome.focus();
		alert("Preencha o campo nome.");
		return false;
	}

	if (document.fm.senha.value == '') {
		document.fm.senha.focus();
		alert("Preencha o campo senha.");
		return false;
	}
}
//Focar o campo nome ao carregar a página
function foco(){
	$('html, body').animate({scrollTop:0}, 0);
	document.fm.nome.focus();
}
//Carregamento da página
$(window).on('load', function(){
	$('.estado').fadeOut('slow');
	$('.carregamento').delay(500).fadeOut('slow');
});
//Data
var data = new Date();
var mes = data.getMonth() + 1;
var day = data.getDay();
var dia_n = data.getDate();
var bug_fixed;
var day_pt;
//Podemos trocar isso e otimizar utilizando vetores!
if (day == 0) {
	day_pt = "Domingo";
}
if (day == 1) {
	day_pt = "Segunda Feira";
}
if (day == 2) {
	day_pt = "Terça Feira";
}
if (day == 3) {
	day_pt = "Quarta Feira";
}
if (day == 4) {
	day_pt = "Quinta Feira";
}
if (day == 5) {
	day_pt = "Sexta Feira";
}
if (day == 6) {
	day_pt = "Sábado";
}
$(document).ready(function(){
	$('#d').text(dia_n+"/"+mes+"/"+(data.getYear()+1900)+" - "+day_pt);
});