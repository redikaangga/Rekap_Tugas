if(window.jQuery){
	console.log('jQuery berjalan');
}
else{
	console.log('jQuery tidak ada');
}

// $("#prosest").click(function(e){
// 	$.ajax ({
// 		method:"POST",
// 		url:"proses.php",
// 		data:{angkaper: 3, angkadua: 2}
// 	})
// 	.done(function(msg){
// 		console.log(msg);
// 	});
// 	e.preventDefault();
// });

$("#formpegawai").submit(function(e){
	var pegawai = $(this).serialize();//serialize = ambil semua yang ada di form
	$.ajax ({
		method: "POST",
		url: "proses.php",
		data: pegawai
	})
	.done(function(msg){
		alert(msg);
		console.log(msg);
	});
	e.preventDefault();
});