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
						<p>Si desea consultarnos por uno o varios productos, por favor complete el formulario a continuación y le estaremos respondiendo a la brevedad. </p>
						<form action="/" method="post" class="form-box">
							<input type="hidden" name="subject" value="<?= $title; ?>">
							<div class="form-group">
								<input type="text" name="name" placeholder="Su nombre" class="form-control">
							</div>
							<div class="form-group">
								<input type="email" name="email" placeholder="E-mail" class="form-control">
							</div>
							<div class="form-group">
								<input type="tel" name="phone" placeholder="Teléfono de contacto" class="form-control">
							</div>
							<div class="form-group lg">
								<textarea name="message" placeholder="Su mensaje" class="form-control"></textarea>
							</div>
							<button type="submit" class="btn btn-blue">ENVIAR MENSAJE</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</article>
</div>
