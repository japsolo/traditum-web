<script src="assets/js/jquery-3.2.1.js"></script>
<div class="full-contact-form-wrapper">
	<article>
		<div class="container">
			<div class="btn-contact-wrap">
				<button type="button" class="show-contact-form">
					<i class="fas fa-chevron-up"></i>
					<span>Formulario de contacto</span>
				</button>
			</div>
		</div>

		<div class="contact-form-wrapper" id="contact-us">
			<div class="contact-form-bg">
				<div class="container">
					<div class="contact-form-box">
						<h2>Contacto</h2>
						<p>Envíenos un mensaje y cuéntenos lo que necesita. Nos estaremos poniendo en contacto a la brevedad. <br> Si prefiere escribirnos puede hacerlo a <span><a href="mailto:info@traditum.com">info@traditum.com</a></span> o llamarnos al 3220-7200. <br><br> Para atención a prestadores contactese al <b>CENTRO DE ATENCIÓN AL PRESTADOR 0810-222-1122 O AL CORREO</b> <span><a href="mailto:prestadores@traditum.com">prestadores@traditum.com</a></span></p>
						<form id="contact-form" action="/" method="post" class="form-box">
							<input type="hidden" name="subject" value="<?= $title; ?>">
							<div class="form-group">
								<input type="text" id="name" name="name" placeholder="Su nombre" class="form-control">
							</div>
							<div class="form-group">
								<input type="email" id="email" name="email" placeholder="E-mail" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" id="phone" name="phone" placeholder="Teléfono de contacto" class="form-control">
							</div>
							<div class="form-group lg">
								<textarea id="message" name="message" placeholder="Su mensaje" class="form-control"></textarea>
							</div>
							<button type="submit" class="btn btn-blue">ENVIAR MENSAJE</button>
						</form>
						<div class="Overlay"><img src="assets/images/ajax.gif" /></div>
						<div class="Message"><h2></h2></div>
					</div>
				</div>
			</div>
		</div>
	</article>
</div>

<script src="assets/js/crypto-js.min.js"></script>
<script src="assets/js/tripledes.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$(".Overlay").hide();

	$("#contact-form").validate({
		event: "blur",
		rules: {
			'name': "required",
			'email': "required email",
			'phone':"required",
			'message': "required"},
		messages: {
			'name': "Por favor, indica tu nombre",
			'email': "Por favor, indica una direcci&oacute;n de e-mail v&aacute;lida",
			'phone':"Por favor, ingrese un n&uacute;mero de tel&eacute;fono",
			'message': "Por favor, ingrese un mensaje"
		},
		debug: true,
		errorElement: "label",
		submitHandler: function(form){

			event.preventDefault();
				 
			console.log("Inicio de envio de mail ");

			var apiurl = "<?php echo getenv("URLMail"); ?>";
			var username = "<?php echo getenv("UserMail"); ?>";
			var password = "<?php echo getenv("PassMail"); ?>";
			var txtName = $('#name').val();
			var txtEmail = $('#email').val();
			var txtPhone = $('#phone').val();
			var txtMensaje = $('#message').val();
			var g = new Date();
			var txtFecha = g.getDate() + "/" + (g.getMonth() +1) + "/" + g.getFullYear() + " " + g.getHours()+":"+g.getMinutes()+":"+g.getSeconds();

			$(".Overlay").show();

			$.ajax({
				type: 'POST',
				url: apiurl + 'login',
				dataType: 'json',
				async: false,
				data: '{}',
				beforeSend: function (xhr) {
				    xhr.setRequestHeader ("Authorization", "Basic " + btoa(username + ":" + password));
				}, 
				success: function (data) {
					if (data.result == "error") {
						console.log(data);
						$(".Message").empty().append("<h2>No hemos podido enviar este mensaje. Por favor intentelo nuevamente.</h2><input type='button' id='btnClose' value='Cerrar'>");
						
					} else {
						var token = data.access_token;

						var data = {
							FechaHora: txtFecha,
							Aplicacion:"Institucional",
							TipoMensaje:"Institucional",
							Datos:{
								Nombre: txtName,
								Mail: txtEmail,
								Telefono: txtPhone,
								Mensaje: txtMensaje
							}
						};

						$.ajax({
							url: apiurl + 'Mail',
							data: JSON.stringify(data),
							type: 'POST',
							contentType: 'application/json',
							beforeSend: function (xhr) {
							    xhr.setRequestHeader ("Authorization", "Bearer " + token);
							}, 
							success: function (data) {
								$(".Overlay").hide();
								if (data.result == "error") {
									console.log(data);
									$(".Message").empty().append("<h2>No hemos podido enviar este mensaje. Por favor intentelo nuevamente.</h2><input type='button' id='btnClose' value='Cerrar'>");
									
								} else {
									console.log(data);
									$(".Message").empty().append("<h2>Muchas gracias por contactarnos, su mensaje fue enviado exitosamente!</h2>");
								}
								$("form").hide("blind");
								$(".Message").show("blind");
								window.setTimeout(function () {
									$("form").show("blind");
									$(".Message").hide("blind");
									$("form").get(0).reset();
								}, 3000);
							},
							error: function (error) {
								$(".Overlay").hide();
								console.log(error);
								$(".Message").empty().append("<h2>No hemos podido enviar este mensaje. Por favor intentelo nuevamente.</h2><input type='button' id='btnClose' value='Cerrar'>");
								$("form").hide("blind");
								$(".Message").show("blind");
								window.setTimeout(function () {
									$("form").show("blind");
									$(".Message").hide("blind");
									$("form").get(0).reset();
								}, 3000);
							}
						});
					};
				},
				error: function (error) {
					$(".Overlay").hide();
					console.log(error);
					$(".Message").empty().append("<h2>No hemos podido enviar este mensaje. Por favor intentelo nuevamente.</h2><input type='button' id='btnClose' value='Cerrar'>");
					$("form").hide("blind");
					$(".Message").show("blind");
					window.setTimeout(function () {
						$("form").show("blind");
						$(".Message").hide("blind");
						$("form").get(0).reset();
					}, 3000);
				}
			});
		}
	});

	$("#email").on("change", function () {
        if ($("#email").val() != '' && $("#email").val() != null) {
			$("label[for='email']").removeClass("has-error");
            $("label[for='email']").hide();
        }
        else {
			$("label[for='email']").addClass("has-error");
            $("label[for='email']").show();
        }
	});
});

</script>