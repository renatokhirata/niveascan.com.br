<?php include "head.php" ?>
<!-- 4005808189625 -->
<style>:root {
	--cor01: #0033a1;
	--cor02: white;
	--cor03: #5eba90;
}</style>

<body>
	<div class="container-fluid containerIntro">
		<div class="row justify-content-center d-flex">
			<div class="col-12 col-md-6">

				<?php include "estrela.php" ?>

				<h1 class="text-center">
					<span>Um </span>
                    <span>dos </span>
                    <span>melhores </span>
                    <span>que </span>
                    <span>já </span>
                    <span>usei!</span>
                    <span>Sabonete </span>
                    <span>muito </span>
                    <span>bom, </span>
                    <span>sensação </span>
                    <span>de </span>
                    <span>pele </span>
                    <span>limpa </span>
                    <span>e </span>
                    <span>sem </span>
                    <span>ficar </span>
                    <span>ressecada </span>
                    <span>ou </span>
                    <span>esticada. </span>
                    <span>Controla </span>
                    <span>muito </span>
                    <span>a </span>
                    <span>oleosidade.</span>
				</h1>
				<p class="introAutor text-center">
				<b>
                Jade B.
				</b><br>
                10/04/2021 • NIVEA
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
				<img src="comp/images/4005808189625/4005808189625_00.png" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
			</div>
			<div class="col-12 col-md-9 text-center">
				<h1 class="fade-h1 fade-revealUp">
                Sabonete em Gel Facial Controle do Brilho
					<br><span>150ml</span>
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
								<img src="comp/images/4005808189625/4005808189625_3.jpg" alt="NIVEA">
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
								<img src="comp/images/4005808189625/4005808189625_4.jpg" alt="NIVEA">
							</div>
						</div>
                        <div class="carousel-item">
							<div class="carousel-imgctn">
								<img src="comp/images/4005808189625/4005808189625_5.jpg" alt="NIVEA">
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
								<img src="comp/images/4005808189625/4005808189625_6.jpg" alt="NIVEA">
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
                Sabonete em gel para o rosto que proporciona uma microesfoliação suave, limpando as impurezas sem agredir ou ressecar a pele. Confira!
				</p>
				<h3 class="fade-revealUp">
                Para que serve?
				</h3>
				<p class="fade-revealUp">
                Fórmula com algas marinhas que reduzem e controlam o brilho, promovendo um efeito matte instantâneo. Tecnologia avançada, limpa sem produzir espuma.
				</p>
				<h3 class="fade-revealUp">
					Benefícios e diferenciais
				</h3>
				<div class="beneficios">
					<div class="fade-revealUp">
                    Indicado para pele mista a oleosa
					</div>
                    <div class="fade-revealUp">
                    Com Vitamina E, necessária para uma pele saudável
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
					<div class="modoUsoDiv" style="background-image: url('comp/images/4005808189625/4005808189625_7.jpg')">
					</div>
				</div>
				<div class="d-none d-md-block">
					<div class="modoUsoDiv-desktop" style="background-image: url('comp/images/4005808189625/4005808189625_7.jpg')">
					</div>
				</div>				
				<h3 id="ingredientes" class="ingredientes" onclick="ingredientesClick()">Ingredientes &#x25BE</h3>
				<div id="ingredientesLista" class="ingredientesLista">
					<p>
                    Aqua, Glycerin, Sodium Laureth Sulfate, Glyceryl Glucoside, Fucus Vesiculosus Extract, Tocopheryl Acetate, Microcrystalline Cellulose, Cellulose, PEG-7 Glyceryl Cocoate, PEG-40 Hydrogenated Castor Oil, Sodium Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Caprylic/Capric Triglyceride, Lactose, Benzophenone-4, Hydroxypropyl Methylcellulose, Sodium Benzoate, Butylphenyl Methylpropional, Geraniol, Benzyl Alcohol, BHT, Parfum, CI 77007, CI 42090, CI 47005, Coco-Glucoside, Sodium Hydroxide
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid containerD">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-6 text-center">
				<h1 class="fade-revealUp">Especificações</h1>
				<img src="comp/images/4005808189625/4005808189625_8.jpg" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
			</div>
		</div>
	</div>
<!--
	<div class="container-fluid containerE">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-10 text-center">
				<video width="100%" height="auto" controls autoplay muted loop>
					<source src="comp/images/4005808189625/4005808189625-video.mp4" type="video/mp4">
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