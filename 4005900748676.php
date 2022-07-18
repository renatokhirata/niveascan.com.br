<?php include "head.php" ?>
<!-- 4005900748676 -->
<style>:root {
	--cor01: #0033a1;
	--cor02: white;
	--cor03: #c03579;
}</style>

<body>
	<div class="container-fluid containerIntro d-none">
		<div class="row justify-content-center d-flex">
			<div class="col-12 col-md-6">

				<?php include "estrela.php" ?>

				<h1 class="text-center">
					<span>A </span>
				</h1>
				<p class="introAutor text-center">
				<b>
					Larissa R
				</b><br>
					20/04/2022 • NIVEA
				</p>
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
    <source type="image/webp" srcset="comp/images/4005900748676/4005900748676_00.webp">
    <source type="image/jpeg" srcset="comp/images/4005900748676/4005900748676_00.png">	
			<img src="comp/images/4005900748676/4005900748676_00.png" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
			<div class="col-12 col-md-9 text-center">
				<h1 class="fade-h1 fade-revealUp">
                Sabonete Facial em Gel MicellAIR Expert
					<br><span>125ml</span>
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
    <source type="image/webp" srcset="comp/images/4005900748676/4005900748676_3.webp">
    <source type="image/jpeg" srcset="comp/images/4005900748676/4005900748676_3.jpeg">	
							<img src="comp/images/4005900748676/4005900748676_3.jpeg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005900748676/4005900748676_4.webp">
    <source type="image/jpeg" srcset="comp/images/4005900748676/4005900748676_4.jpeg">	
							<img src="comp/images/4005900748676/4005900748676_4.jpeg" alt="NIVEA">
</picture>
							</div>
						</div>
                        <div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005900748676/4005900748676_5.webp">
    <source type="image/jpeg" srcset="comp/images/4005900748676/4005900748676_5.jpeg">	
							<img src="comp/images/4005900748676/4005900748676_5.jpeg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005900748676/4005900748676_6.webp">
    <source type="image/jpeg" srcset="comp/images/4005900748676/4005900748676_6.jpeg">	
							<img src="comp/images/4005900748676/4005900748676_6.jpeg" alt="NIVEA">
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
                Sabonete em gel para o rosto com tecnologia MicellAir. Esfolia a pele com todo cuidado, garantindo maciez todos os dias. Conheça + detalhes!
				</p>
				<h3 class="fade-revealUp">
                Para que serve?
				</h3>
				<p class="fade-revealUp">
                <b>Sua fórmula combina ácido lático com esfoliantes naturais que removem impurezas acumuladas na pele durante à noite. Deixa a pele pronta para maquiagem.
				</p>
				<h3 class="fade-revealUp">
					Benefícios e diferenciais
				</h3>
				<div class="beneficios">
					<div class="fade-revealUp">
                    Deixa a pele mais uniforme e bonita
					</div>
                    <div class="fade-revealUp">
                    Com ácido lático
					</div>
                    <div class="fade-revealUp">
                    Não resseca nem irrita a pele
					</div>
                    <div class="fade-revealUp">
                    Dermatologicamente testado
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
					<div class="modoUsoDiv" style="background-image: url('comp/images/4005900748676/4005900748676_7.jpeg')">
					</div>
				</div>
				<div class="d-none d-md-block">
					<div class="modoUsoDiv-desktop" style="background-image: url('comp/images/4005900748676/4005900748676_7.jpeg')">
					</div>
				</div>				
				<h3 id="ingredientes" class="ingredientes" onclick="ingredientesClick()">Ingredientes &#x25BE</h3>
				<div id="ingredientesLista" class="ingredientesLista">
					<p>
                    Não inclui Perfume, Aqua, Isododecane, Glycerin, C15-19 Alkane, Camellia Sinensis Leaf Extract, Vaccinium Myrtillus Fruit Extract, Coco-Caprylate/Caprate, Caprylyl/Capryl Glucoside, Isopropyl Palmitate, Sodium Chloride, Trisodium EDTA, Sodium Hydroxide, Benzethonium Chloride, Phenoxyethanol, CI 60725, CI 6156
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid containerD">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-6 text-center">
				<h1 class="fade-revealUp">Especificações</h1>
				<picture>
    <source type="image/webp" srcset="comp/images/4005900748676/4005900748676_8.webp">
    <source type="image/jpeg" srcset="comp/images/4005900748676/4005900748676_8.jpeg">
				<img src="comp/images/4005900748676/4005900748676_8.jpeg" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
		</div>
	</div>
<!--
	<div class="container-fluid containerE">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-10 text-center">
				<video width="100%" height="auto" controls autoplay muted loop>
					<source src="comp/images/4005900748676/4005900748676-video.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div>
			</div>
		</div> -->

		<div class="container-fluid containerF">
			<div class="row">
				<div class="col-12">
					<h1>Compre o seu</h1>
				</div>
			</div>
		</div>

<?php include "foot.php" ?>