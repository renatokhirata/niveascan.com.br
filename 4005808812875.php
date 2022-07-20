<?php include "head.php" ?>
<!-- 4005808812875 -->
<style>:root {
	--cor01: #0033a1;
	--cor02: #0033a1;
	--cor03: #facd00;
}</style>

<body>
	<div class="container-fluid containerIntro d-none">
		<div class="row justify-content-center d-flex">
			<div class="col-12 col-md-6">

				<?php include "estrela.php" ?>

				<h1 class="text-center">
					<span>Ótimo</span>                    
				</h1>
				<p class="introAutor text-center">
				<b>
                Yasmin
				</b><br>
                05/01/2021 • NIVEA
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
    <source type="image/webp" srcset="comp/images/4005808812875/4005808812875_00.webp">
    <source type="image/jpeg" srcset="comp/images/4005808812875/4005808812875_00.png">	
			<img src="comp/images/4005808812875/4005808812875_00.png" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
			<div class="col-12 col-md-9 text-center">
				<h1 class="fade-h1 fade-revealUp">
                Creme Facial Antissinais Dia Q10 Plus
					<br><span>50g</span>
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
    <source type="image/webp" srcset="comp/images/4005808812875/4005808812875_3.webp">
    <source type="image/jpeg" srcset="comp/images/4005808812875/4005808812875_3.jpg">	
							<img src="comp/images/4005808812875/4005808812875_3.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
                        <div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005808812875/4005808812875_4.webp">
    <source type="image/jpeg" srcset="comp/images/4005808812875/4005808812875_4.jpg">	
							<img src="comp/images/4005808812875/4005808812875_4.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005808812875/4005808812875_5.webp">
    <source type="image/jpeg" srcset="comp/images/4005808812875/4005808812875_5.jpg">	
							<img src="comp/images/4005808812875/4005808812875_5.jpg" alt="NIVEA">
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
                <b>Creme para os olhos que reduz rugas e linhas de expressão em 4 semanas. Deixa a região dos olhos com aparência descansada e radiante. Todo cuidado <b>NIVEA</b> para você!
				</p>
				<h3 class="fade-revealUp">
                Para que serve?
				</h3>
				<p class="fade-revealUp">
                Com Q10, Vitamina C e Vitamina E, três poderosos antioxidantes que oxigenam e renovam a pele. Combate o envelhecimento e alivia sinais de cansaço.
				</p>
				<h3 class="fade-revealUp">
					Benefícios e diferenciais
				</h3>
				<div class="beneficios">
					<div class="fade-revealUp">
                    Anti-rugas + Energizante
					</div>
					<div class="fade-revealUp">
                    Aparência descansada na área dos olhos
					</div>
                    <div class="fade-revealUp">
                    Para todos os tipos de pele
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
					<div class="modoUsoDiv" style="background-image: url('comp/images/4005808812875/4005808812875_6.jpg')">
					</div>
				</div>
				<div class="d-none d-md-block">
					<div class="modoUsoDiv-desktop" style="background-image: url('comp/images/4005808812875/4005808812875_6.jpg')">
					</div>
				</div>				
				<h3 id="ingredientes" class="ingredientes" onclick="ingredientesClick()">Ingredientes &#x25BE</h3>
				<div id="ingredientesLista" class="ingredientesLista">
					<p>
                    Aqua, Homosalate, Octocrylene, Glycerin, Cyclomethicone, Ethylhexyl Salicylate, Methylpropanediol, Tapioca Starch, Butyl Methoxydibenzoylmethane, Phenylbenzimidazole Sulfonic Acid, Behenyl Alcohol, Cetearyl Alcohol, Ubiquinone, Creatine, 1-Methylhydantoin-2-Imide, Tocopheryl Acetate, Xanthan Gum, 1,2-Hexanediol, Trisodium EDTA, Sodium Chloride, Phenoxyethanol, Benzyl Alcohol, d-Limonene, Parfum
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid containerD">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-6 text-center">
				<h1 class="fade-revealUp">Especificações</h1>
				<picture>
    <source type="image/webp" srcset="comp/images/4005808812875/4005808812875_7.webp">
    <source type="image/jpeg" srcset="comp/images/4005808812875/4005808812875_7.jpg">
				<img src="comp/images/4005808812875/4005808812875_7.jpg" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
		</div>
	</div>
    <!--
	<div class="container-fluid containerE">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-10 text-center">
				<video width="100%" height="auto" controls autoplay muted loop>
					<source src="comp/images/4005808812875/4005808812875_video.mp4" type="video/mp4">
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