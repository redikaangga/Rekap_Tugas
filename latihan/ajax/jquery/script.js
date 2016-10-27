if(window.jQuery){
	console.log('jQuery berjalan');
}
else{
	console.log('jQuery tidak ada');
}

// jQuery("h1").click(function(){
// jQuery("h3").hide()
// })
// jQuery(".title").click(function(){
	// alert('Anda mengklik judul');
// jQuery(".title").hover(function(){
// 	console.log('Anda mengklik judul');
	// console.log('Anda mengklik judul');

// $("h1").click(function(){
	// ($(".temp").appendTo($("h3")));
	// console.log($("h3").append(" ini tambahan append"));
	// console.log($("h3").attr());
	// console.log($("h3").text());
	// console.log($("h3").html());
	// console.log$("h3").removeClass("red");
	// console.log$("h3").addClass("red");
	// console.log$("h3").css("font-size", "50px");
// })
//toggle = on/off

$("#nama").keyup(function(){
	// console.log($(this).val());
	var nama = $(this).val();
	$("#namaResult").html(nama);
})