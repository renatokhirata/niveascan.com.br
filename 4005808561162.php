<?php include "head.php" ?>
<!-- 4005808561162 -->
<style>:root {
	--cor01: #0033a1;
	--cor02: white;
	--cor03: #c10059;
}</style>

<body>
	<div class="container-fluid containerIntro d-none">
		<div class="row justify-content-center d-flex">
			<div class="col-12 col-md-6">

				<?php include "estrela.php" ?>
				
				<h1 class="text-center">
					<span>Um </span>
				</h1>
				<p class="introAutor text-center">
				<b>
                Jade B.
				</b><br>
                10/04/2021 • NIVEA
				</p>
				<?php include "seta.php"?>
			</div>
		</div>
	</div>

	<div id="second"></div>
	<div class="container-fluid containerA">
		<div class="row d-flex justify-content-center">
			<div class="col-12 d-flex justify-content-center">
			<picture>
    <source type="image/webp" srcset="comp/images/logo-nivea.webp">
    <source type="image/jpeg" srcset="comp/images/logo-nivea.png">	
			<img src="comp/images/logo-nivea.png" class="nivea-logo" alt="NIVEA">
</picture>
			</div>
			<div class="col-8 col-md-4">
			<picture>
    <source type="image/webp" srcset="comp/images/4005808561162/4005808561162_00.webp">
    <source type="image/jpeg" srcset="comp/images/4005808561162/4005808561162_00.png">	
			<img src="comp/images/4005808561162/4005808561162_00.png" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
			<div class="col-12 col-md-9 text-center">
				<h1 class="fade-h1 fade-revealUp">
                Lenços de Limpeza Demaquilantes 3 em 1 Hidratante
					<br><span>25 un</span>
				</h1>
			</div>
		</div>
	</div>
	<div class="container-fluid containerB">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-12">
				<div id="prodCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005808561162/4005808561162_3.webp">
    <source type="image/jpeg" srcset="comp/images/4005808561162/4005808561162_3.jpg">	
							<img src="comp/images/4005808561162/4005808561162_3.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005808561162/4005808561162_4.webp">
    <source type="image/jpeg" srcset="comp/images/4005808561162/4005808561162_4.jpg">	
							<img src="comp/images/4005808561162/4005808561162_4.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
                        <div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005808561162/4005808561162_5.webp">
    <source type="image/jpeg" srcset="comp/images/4005808561162/4005808561162_5.jpg">	
							<img src="comp/images/4005808561162/4005808561162_5.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005808561162/4005808561162_6.webp">
    <source type="image/jpeg" srcset="comp/images/4005808561162/4005808561162_6.jpg">	
							<img src="comp/images/4005808561162/4005808561162_6.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-target="#prodCarousel" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					</button>
					<button class="carousel-control-next" type="button" data-target="#prodCarousel" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
					</button>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid containerTexto">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-6 text-center">
				<h3 class="fade-revealUp">
					O que é?
				</h3>
				<p class="fade-revealUp">
                Os <b>Lenços de Limpeza Demaquilantes NIVEA 3 em 1</b> removem a maquiagem à prova d'água, limpa profundamente e hidrata a pele. Não precisa lavar o rosto depois. Veja + infos!
				</p>
				<h3 class="fade-revealUp">
                Para que serve?
				</h3>
				<p class="fade-revealUp">
                São 3 benefícios num só produto: Remove a maquiagem à prova d'água, limpa e hidrata a pele com óleo de amêndoas. Fórmula suave.
				</p>
				<h3 class="fade-revealUp">
					Benefícios e diferenciais
				</h3>
				<div class="beneficios">
					<div class="fade-revealUp">
                    Pode ser usado todos os dias
					</div>
                    <div class="fade-revealUp">
                    Com óleo de amêndoas
					</div>
                    <div class="fade-revealUp">
                    Sem álcool etílico
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid containerC">
		<div class="row d-flex justify-content-center">
			<div class="col-12 text-center">
				<h1>Modo de uso</h1>
				<div class="d-block d-md-none">
					<div class="modoUsoDiv" style="background-image: url('comp/images/4005808561162/4005808561162_7.jpg')">
					</div>
				</div>
				<div class="d-none d-md-block">
					<div class="modoUsoDiv-desktop" style="background-image: url('comp/images/4005808561162/4005808561162_7.jpg')">
					</div>
				</div>				
				<h3 id="ingredientes" class="ingredientes" onclick="ingredientesClick()">Ingredientes &#x25BE</h3>
				<div id="ingredientesLista" class="ingredientesLista">
					<p>
                    Não inclui Álcool (Álcool Etílico), Aqua, Isopropyl Stearate, Glycerin, Dimethicone, Methylpropanediol, Panthenol, 1,2-Hexanediol, Phenoxyethanol, Methylparaben, Benzyl Alcohol, Citronellol, Alpha-Isomethyl Ionone, Geraniol, Butylphenyl Methylpropional, Parfum, Lanolin Alcohol (Eucerit<sup>®</sup>), Prunus Amygdalus Dulcis Oil, Sodium Hydroxide, Sodium Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Glyceryl Glucoside, Linalool, Benzyl Salicylate, Hexyl Cinnamal
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid containerD">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-6 text-center">
				<h1 class="fade-revealUp">Especificações</h1>
				<picture>
    <source type="image/webp" srcset="comp/images/4005808561162/4005808561162_8.webp">
    <source type="image/jpeg" srcset="comp/images/4005808561162/4005808561162_8.jpg">
				<img src="comp/images/4005808561162/4005808561162_8.jpg" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
		</div>
	</div>
<!--
	<div class="container-fluid containerE">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-10 text-center">
				<video width="100%" height="auto" controls autoplay muted loop>
					<source src="comp/images/4005808561162/4005808561162-video.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div>
			</div>
		</div> -->

		<div class="container-fluid containerF">
			<div class="row">
				<div class="col-12">
					<h1>Aproveite</h1>
				</div>
			</div>
		</div>

<?php include "foot.php" ?>