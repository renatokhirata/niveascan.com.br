<?php include "head.php" ?>
<!-- 4005900520920 -->
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
					<span>Simplesmente </span>
				</h1>
				<p class="introAutor text-center">
				<b>
                Fabiana G.
				</b><br>
                06/04/2021 • NIVEA
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
    <source type="image/webp" srcset="comp/images/4005900520920/4005900520920_00.webp">
    <source type="image/jpeg" srcset="comp/images/4005900520920/4005900520920_00.png">	
			<img src="comp/images/4005900520920/4005900520920_00.png" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
			<div class="col-12 col-md-9 text-center">
				<h1 class="fade-h1 fade-revealUp">
                Lenços de Limpeza Demaquilantes Expert MicellAir
					<br><span>20un</span>
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
    <source type="image/webp" srcset="comp/images/4005900520920/4005900520920_8.webp">
    <source type="image/jpeg" srcset="comp/images/4005900520920/4005900520920_8.jpg">	
							<img src="comp/images/4005900520920/4005900520920_3.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005900520920/4005900520920_8.webp">
    <source type="image/jpeg" srcset="comp/images/4005900520920/4005900520920_8.jpg">	
							<img src="comp/images/4005900520920/4005900520920_4.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
                        <div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005900520920/4005900520920_8.webp">
    <source type="image/jpeg" srcset="comp/images/4005900520920/4005900520920_8.jpg">	
							<img src="comp/images/4005900520920/4005900520920_5.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005900520920/4005900520920_8.webp">
    <source type="image/jpeg" srcset="comp/images/4005900520920/4005900520920_8.jpg">	
							<img src="comp/images/4005900520920/4005900520920_6.jpg" alt="NIVEA">
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
                Os <b>Lenços de Limpeza Demaquilantes NIVEA MicellAIR</b> são a solução perfeita para remover a maquiagem à prova d'água. Veja + infos!
				</p>
				<h3 class="fade-revealUp">
                Para que serve?
				</h3>
				<p class="fade-revealUp">
                Use os lenços demaquilantes para tirar a maquiagem. Fórmula com extrato de chá preto e MicellAIR deixa a pele sequinha, livre de oleosidade.
				</p>
				<h3 class="fade-revealUp">
					Benefícios e diferenciais
				</h3>
				<div class="beneficios">
					<div class="fade-revealUp">
                    Remove até as menores partículas de impureza
					</div>
                    <div class="fade-revealUp">
                    Não precisa lavar o rosto depois
					</div>
                    <div class="fade-revealUp">
                    Não deixa a pele oleosa
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
					<div class="modoUsoDiv" style="background-image: url('comp/images/4005900520920/4005900520920_7.jpg')">
					</div>
				</div>
				<div class="d-none d-md-block">
					<div class="modoUsoDiv-desktop" style="background-image: url('comp/images/4005900520920/4005900520920_7.jpg')">
					</div>
				</div>				
				<h3 id="ingredientes" class="ingredientes" onclick="ingredientesClick()">Ingredientes &#x25BE</h3>
				<div id="ingredientesLista" class="ingredientesLista">
					<p>
                    Aqua, Alcohol Denat., PEG-40 Hydrogenated Castor Oil, Camellia Sinensis Leaf Extract, Tocopheryl Acetate, Panthenol, Glycerin, Glyceryl Glucoside, Sorbitol, Poloxamer 124, Decyl Glucoside, Disodium Cocoyl Glutamate, Polyquaternium-10, Propylene Glycol, Sodium Chloride, Sodium Acetate, Trisodium EDTA, Ethylhexylglycerin, 1,2-Hexanediol, Citric Acid, Phenoxyethanol, Linalool, Butylphenyl Methylpropional, Citronellol, Geraniol, Benzyl Alcohol, d-Limonene, Alpha-Isomethyl Ionone, BHT, Parfum
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid containerD">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-6 text-center">
				<h1 class="fade-revealUp">Especificações</h1>
				<picture>
    <source type="image/webp" srcset="comp/images/4005900520920/4005900520920_8.webp">
    <source type="image/jpeg" srcset="comp/images/4005900520920/4005900520920_8.jpg">
				<img src="comp/images/4005900520920/4005900520920_8.jpg" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
		</div>
	</div>
<!--
	<div class="container-fluid containerE">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-10 text-center">
				<video width="100%" height="auto" controls autoplay muted loop>
					<source src="comp/images/4005900520920/4005900520920-video.mp4" type="video/mp4">
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