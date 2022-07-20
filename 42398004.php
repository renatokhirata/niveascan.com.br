<?php include "head.php" ?>
<!-- 42398004 -->
<style>:root {
	--cor01: #0033a1;
	--cor02: white;
	--cor03: #78b841;
}</style>

<body>
	<div class="container-fluid containerIntro">
		<div class="row justify-content-center d-flex">
			<div class="col-12 col-md-6">

				<?php include "estrela.php" ?>

				<h1 class="text-center">
					<span>Amei!</span>
                    <span>Comprei </span>
                    <span>o </span>
                    <span>produto </span>
                    <span>ontem </span>
                    <span>a </span>
                    <span>noite </span>
                    <span>e </span>
                    <span>usei </span>
                    <span>logo </span>
                    <span>pela </span>
                    <span>manhã, </span>
                    <span>senti </span>
                    <span>uma </span>
                    <span>sensação </span>
                    <span>deliciosa </span>
                    <span>de </span>
                    <span>frescor, </span>
                    <span>o </span>
                    <span>cheirinho </span>
                    <span>muito </span>
                    <span>agradável...</span> 
                    <span>amei </span>
                    <span>o </span>
                    <span>produto</span>
				</h1>
				<p class="introAutor text-center">
				<b>
                Luciane L
				</b><br>
                13/04/2022 • NIVEA
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
    <source type="image/webp" srcset="comp/images/42398004/42398004_00.webp">
    <source type="image/jpeg" srcset="comp/images/42398004/42398004_00.png">	
			<img src="comp/images/42398004/42398004_00.png" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
			<div class="col-12 col-md-9 text-center">
				<h1 class="fade-h1 fade-revealUp">
                Gel Hidratante Facial
					<br><span>100g</span>
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
    <source type="image/webp" srcset="comp/images/42398004/42398004_3.webp">
    <source type="image/jpeg" srcset="comp/images/42398004/42398004_3.jpg">	
							<img src="comp/images/42398004/42398004_3.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/42398004/42398004_4.webp">
    <source type="image/jpeg" srcset="comp/images/42398004/42398004_4.jpg">	
							<img src="comp/images/42398004/42398004_4.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/42398004/42398004_5.webp">
    <source type="image/jpeg" srcset="comp/images/42398004/42398004_5.jpg">	
							<img src="comp/images/42398004/42398004_5.jpg" alt="NIVEA">
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
                Hidratante em gel com ácido hialurônico e pepino. Textura mais leve que o creme facial. Não obstrui os poros e hidrata por 24h. Cuide bem da sua pele!
				</p>
				<h3 class="fade-revealUp">
                Para que serve?
				</h3>
				<p class="fade-revealUp">
                O novo hidratante facial em gel da Nivea é ideal para pele oleosa. Sua fórmula especial deixa a pele sequinha e bem cuidada por 24h.
				</p>
				<h3 class="fade-revealUp">
					Benefícios e diferenciais
				</h3>
				<div class="beneficios">
					<div class="fade-revealUp">
                    Livre de oleosidade
					</div>
                    <div class="fade-revealUp">
                    Refresca e hidrata a pele do rosto
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
					<div class="modoUsoDiv" style="background-image: url('comp/images/42398004/42398004_6.jpg')">
					</div>
				</div>
				<div class="d-none d-md-block">
					<div class="modoUsoDiv-desktop" style="background-image: url('comp/images/42398004/42398004_6.jpg')">
					</div>
				</div>				
				<h3 id="ingredientes" class="ingredientes" onclick="ingredientesClick()">Ingredientes &#x25BE</h3>
				<div id="ingredientesLista" class="ingredientesLista">
					<p>
                    Aqua, Glycerin, PEG-8, Ceteareth-20, Sodium Hyaluronate, Cucumis Sativus Juice, Ammonium Acryloyldimethyltaurate/VP Copolymer, Phenoxyethanol, Ethylhexylglycerin, Sodium Benzoate, Lactic Acid, Potassium Sorbate, Alpha-Isomethyl Ionone, Citronellol, Linalool, Parfum
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid containerD">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-6 text-center">
				<h1 class="fade-revealUp">Especificações</h1>
				<picture>
    <source type="image/webp" srcset="comp/images/42398004/42398004_7.webp">
    <source type="image/jpeg" srcset="comp/images/42398004/42398004_7.jpg">
				<img src="comp/images/42398004/42398004_7.jpg" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
		</div>
	</div>

	<div class="container-fluid containerE">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-10 text-center">
				<video width="100%" height="auto" controls autoplay muted loop>
					<source src="comp/images/42398004/42398004_video.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div>
			</div>
		</div> 

		<div class="container-fluid containerF">
			<div class="row">
				<div class="col-12">
					<h1>Compre o seu</h1>
				</div>
			</div>
		</div>

<?php include "foot.php" ?>