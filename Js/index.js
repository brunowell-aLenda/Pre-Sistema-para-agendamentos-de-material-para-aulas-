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
//meramente decorativos
var delay;
	$('.menu ul li').hover(function(){
var aparecer = $(this).find('.sub');
		delay = setTimeout(function(){
			aparecer.slideDown(350);
			$('.sbv').animate({top: '120px'}, 350);
		}, 200);
	},function(){
var aparecer = $(this).find('.sub');
		clearTimeout(delay);
		aparecer.slideUp(300);
		$('.sbv').animate({top: '100px'}, 350);
	});
});