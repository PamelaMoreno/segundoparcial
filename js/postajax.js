$(document).ready(function(){
	$('#formulario').validate({
		submitHandler: function() {
                	 $.post("insertar.php",
                	 {
                        	nombre: $('#nombre').val(),
				ciudad: $('#ciudad').val()
               		 },
               		 function(data, status){
        	                alert("Datos: " + data + " Status: " + status);
				$('#formulario').trigger('reset');
	                });
        	},
		rules: {
			nombre: {
				required: true,
				minlength: 3,
				maxlength: 20
			},
			ciudad: {
				required: true,
				minlength: 3,
				maxlength: 20
			},
		},
		messages: {
			nombre: {
				required: "El nombre es obligatorio",
				minlength: "El nombre debe ser de al menos 3 caracteres",
				maxlength: "El nombre debe tener menos de 20 caracteres"
			},
			ciudad: {
				required: "La ciudad es obligatoria",
                                minlength: "La ciudad debe ser de al menos 3 caracteres",
                                maxlength: "La ciudad debe tener menos de 20 caracteres"
			}

		}
	});
});
