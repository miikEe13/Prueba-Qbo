//$(document).on("ready", inicio);

  
//function inicio() {
//  $("#form-create-tarjeta").submit(function (event) {
//        alert("estoy aqui");
//        event.preventDefault();
//        $.ajax({
//			url:$("form").attr("action"),
//			type:$("form").attr("method"),
//			data:$("form").serialize(),
//			success:function(respuesta){
//				alert(respuesta);
//				
//			}
//		});
//
//    });
//}

$( document ).ready(function() {
//		console.log("listo!");
//		console.log($("#form-create-tarjeta"));
		$("#form-create-tarjeta").submit(function (e) {
		e.preventDefault();		
//		alert("submit!");   
                
                $.ajax({
			url:$("form").attr("action"),
			type:$("form").attr("method"),
			data:$("form").serialize(),
			success:function(respuesta){
				alert(respuesta);
				document.getElementById("form-create-tarjeta").reset();
                                
                               			}
                        
                        
		});
    });
});