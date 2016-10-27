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

//---Proses Perhitungan---//

// $("#pro").click(function(){
// 	if ($("#c").val() == '/') {
// 		var num1 = $("#a").val(),
// 			num2 = $("#b").val(),
// 		result = parseInt(num1) / parseInt(num2);
// 		$(".result").val(result);
// 	}else if($("#c").val() == '*') {
// 		var num1 = $("#a").val(),
// 			num2 = $("#b").val(),
// 		result = parseInt(num1) * parseInt(num2);
// 		$(".result").val(result);		
// 	}else if($("#c").val() == '+') {
// 		var num1 = $("#a").val(),
// 			num2 = $("#b").val(),
// 		result = parseInt(num1) + parseInt(num2);
// 		$(".result").val(result);		
// 	}else if($("#c").val() == '-') {
// 		var num1 = $("#a").val(),
// 			num2 = $("#b").val(),
// 		result = parseInt(num1) - parseInt(num2);
// 		$(".result").val(result);		
// 	}else {
// 		alert("Operator salah");
// 	}
// })

// INPUT //
$('input[type=button]').click(function(){

	//value button
	var nilbutton = $(this).val();

	//value layar
	var layarsaatini = $('#hasil').val();

	//
	var layar = $('#hasil');

	if (nilbutton == '=') {
		layar.val(eval(layarsaatini));
	} else if (nilbutton == 'C') {
		layar.val('');
	} else {
		layar.val(layarsaatini + nilbutton);
	} 
		// var hasil = $('#hasil').val() + $(this).val();
		// $('#hasil').val(hasil);
})

// HAPUS //
