<!-- FOOTER-->

<footer class="footer-app ">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<p>Ubicación: Calle Sevilla 41-43, Jerez de la Frontera. CP 11402</p>
			</div>
			<div class="col-md-3">
				<ul>
					<li class="li-contact"><a href="mailto:info@ajpol.com"><i class="fa fa-envelope"> </i><span>info@ajpol.com</span></a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<li class="li-contact"><a href="tel: +956900020 "><i class="fa fa-phone" ></i> <span>956 900 020 / 625 71 73 97</span></a></li>
			</div>
			<div class="col-md-3">
				<div class="get-social gtco-social-icon text-center contacts">

					<ul class="navbar-nav footer-social">
						<li><a href="#"><i class="fa fa-twitter iconos-app"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook-official iconos-app"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram iconos-app"></i></a></li>
						<li><a href="#"><i class="fa fa-whatsapp iconos-app"></i></a></li>
					</ul>

				</div>
			</div>
		</div>
		
	</div>


</footer>
<div class="copy-app">
	<div class="text-center ">
		<p><small class="block">© copyright AJPOL - Aviso legal - Política de Cookies</small></p>
	</div>
</div>
<!-- FOOTER-->



<!-- script para que funcione al 100% el botón ir arriba -->
<script type="text/javascript">
	$(document).ready(function(){
		$('.autoplay').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 3000,
			infinite: true,
			fade: true,
			cssEase: 'linear',
		});
		
	});

</script>
<?php wp_footer();?>
<script>
	new WOW().init();
</script>
</body>
</html>