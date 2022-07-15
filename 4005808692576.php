<?php include "head.php" ?>
<!-- 4005808692576 -->
<style>:root {
	--cor01: #0033a1;
	--cor02: white;
	--cor03: #006bb9;
}</style>

<body>
	<div class="container-fluid containerIntro">
		<div class="row justify-content-center d-flex">
			<div class="col-12 col-md-6">

				<?php include "estrela.php" ?>

				<h1 class="text-center">
					<span>Super </span>
                    <span>Levinho </span>
                    <span>e </span>
                    <span>eficaz!</span>
                    <span>Excelente </span>
                    <span>produto </span>
                    <span>e </span>
                    <span>de </span>
                    <span>qualidade, </span>
                    <span>cumpre </span>
                    <span>o </span>
                    <span>que </span>
                    <span>promete, </span>
                    <span>quando </span>
                    <span>acabar </span>
                    <span>o </span>
                    <span>meu </span>
                    <span>já </span>
                    <span>vou </span>
                    <span>comprar </span>
                    <span>novamente.</span> 
                    <span>Ah </span>
                    <span>rende </span>
                    <span>bastante. ;) </span>
				</h1>
				<p class="introAutor text-center">
				<b>
                Marie
				</b><br>
                10/06/2022 • NIVEA
				</p>
			</div>
		</div>
	</div>

	<div id="second"></div>
	<div class="container-fluid containerA">
		<div class="row d-flex justify-content-center">
			<div class="col-12 d-flex justify-content-center">
				<img src="comp/images/logo-nivea.png" class="nivea-logo" alt="NIVEA">
			</div>
			<div class="col-8 col-md-4">
				<img src="comp/images/4005808692576/4005808692576_00.png" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
			</div>
			<div class="col-12 col-md-9 text-center">
				<h1 class="fade-h1 fade-revealUp">
                Gel Esfoliante Facial Refrescante
					<br><span>75ml</span>
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
								<img src="comp/images/4005808692576/4005808692576_3.jpg" alt="NIVEA">
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
								<img src="comp/images/4005808692576/4005808692576_4.jpg" alt="NIVEA">
							</div>
						</div>
                        <div class="carousel-item">
							<div class="carousel-imgctn">
								<img src="comp/images/4005808692576/4005808692576_5.jpg" alt="NIVEA">
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
								<img src="comp/images/4005808692576/4005808692576_6.jpg" alt="NIVEA">
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
                Gel esfoliante facial que promove limpeza profunda, removendo as impurezas e as células mortas da pele, sem agredi-la e ressecá-la. Conheça!
				</p>
				<h3 class="fade-revealUp">
                Para que serve?
				</h3>
				<p class="fade-revealUp">
                Esfolia e limpa profundamente a pele, estimulando a renovação celular. O resultado é uma pele macia e renovada todos os dias.
				</p>
				<h3 class="fade-revealUp">
					Benefícios e diferenciais
				</h3>
				<div class="beneficios">
					<div class="fade-revealUp">
                    Auxilia na renovação celular
					</div>
                    <div class="fade-revealUp">
                    Remove as céulas mortas sem irritar a pele
					</div>
                    <div class="fade-revealUp">
                    Com bio blueberry e arroz orgânico
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
					<div class="modoUsoDiv" style="background-image: url('comp/images/4005808692576/4005808692576_7.jpg')">
					</div>
				</div>
				<div class="d-none d-md-block">
					<div class="modoUsoDiv-desktop" style="background-image: url('comp/images/4005808692576/4005808692576_7.jpg')">
					</div>
				</div>				
				<h3 id="ingredientes" class="ingredientes" onclick="ingredientesClick()">Ingredientes &#x25BE</h3>
				<div id="ingredientesLista" class="ingredientesLista">
					<p>
                    Aqua, Isopropyl Stearate, Glyceryl Glucoside, Nelumbium Speciosum Flower Extract, Panthenol, Tocopheryl Acetate, Glycerin, VP/Hexadecene Copolymer, Sodium Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Propylene Glycol, Ethylhexylglycerin, Phenoxyethanol, Linalool, Benzyl Alcohol, Geraniol, Citronellol, Alpha-Isomethyl Ionone, Hexyl Cinnamal, Butylphenyl Methylpropional, Benzyl Salicylate, Parfum, Sodium Hydroxide, Methylparaben
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid containerD">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-6 text-center">
				<h1 class="fade-revealUp">Especificações</h1>
				<img src="comp/images/4005808692576/4005808692576_8.jpg" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
			</div>
		</div>
	</div>
<!--
	<div class="container-fluid containerE">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-10 text-center">
				<video width="100%" height="auto" controls autoplay muted loop>
					<source src="comp/images/4005808692576/4005808692576-video.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div>
			</div>
		</div> 
-->
		<div class="container-fluid containerF">
			<div class="row">
				<div class="col-12">
					<h1>Compre o seu</h1>
				</div>
			</div>
		</div>

<?php include "foot.php" ?>