			<!-- footer -->
			<footer class="footer">

				<div class="newsletter-add">
					<div class="content-windows">
						<div class="content-mobile">
							<h3 class="title-section">SUSCRÍBETE A NUESTRO NEWSLETTER</h3>
							<form>
								<input type="text" placeholder="Nombre" class="input-form">
								<input type="correo" placeholder="Correo Electrónico" class="input-form">
								<input type="submit" class="button-news" value="Suscribir">
							</form>
						</div>
					</div>
				</div>

				<div class="contact-footer">
					<div class="content-windows">
						<h3 class="title-section">Contactanos</h3>
						<form>
							<div class="left-form">
								<input type="text" placeholder="Nombre" class="input-form">
								<input type="correo" placeholder="Correo Electrónico" class="input-form">
								<input type="text" placeholder="Asunto" class="input-form">
							</div>
							<div class="right-form">
								<textarea cols="30" rows="8" placeholder="Mensaje" class="input-form"></textarea>
								<input type="submit" class="button-blue" value="Suscribir">
							</div> 
						</form>
					</div>
				</div>

				<div class="menu-footer">
					<div class="content-windows">
						<nav class="nav-footer">
							<?php html5blank_nav(); ?>
						</nav>
					</div> 
				</div>
				<div class="info-footer">
					
				</div>
				<div class="copy-right">
					<div class="copy-info">Coppyright © 2016. All Rights Reserved. Powered by Montana Studio</div>
				</div>

			</footer>

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<script>

			var swiper = new Swiper('.slider-home', {
		        pagination: '.swiper-pagination',
		        paginationClickable: true,
		        nextButton: '.swiper-button-next',
		        prevButton: '.swiper-button-prev',
		        spaceBetween: 30
		    });

        </script>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
