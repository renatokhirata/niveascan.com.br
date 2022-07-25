<?php include "head.php" ?>
<!-- 4005900669292 -->
<style>:root {
	--cor01: #0033a1;
	--cor02: white;
	--cor03: #8ebb76;
}</style>

<body>
        <div class="container-fluid containerIntro">
		<div class="row justify-content-center d-flex">
			<div class="col-12 col-md-6">

				<?php include "estrela.php" ?>

				<h1 class="text-center">
				<span>Estou </span>
                <span>apaixonada. </span>
                <span>Minha </span>
                <span>pele </span>
                <span>ficou </span>
                <span>super </span>
                <span>hidratada </span>
                <span>em </span>
                <span>uma </span>
                <span>semana </span>
                <span>de </span>
                <span>uso.</span>	
				
            </h1>
				<p class="introAutor text-center">
				<b>
               Paula
				</b><br>
                26/10/2021 • NIVEA
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
    <source type="image/webp" srcset="comp/images/4005900669292/4005900669292_00.webp">
    <source type="image/jpeg" srcset="comp/images/4005900669292/4005900669292_00.png">	
			<img src="comp/images/4005900669292/4005900669292_00.png" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
			<div class="col-12 col-md-9 text-center">
				<h1 class="fade-h1 fade-revealUp">
                Loção Hidratante Óleos Essenciais Coco & Óleo Monoi 
					<br><span>200ml</span>
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
    <source type="image/webp" srcset="comp/images/4005900669292/4005900669292_3.webp">
    <source type="image/jpeg" srcset="comp/images/4005900669292/4005900669292_3.jpg">	
							<img src="comp/images/4005900669292/4005900669292_3.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005900669292/4005900669292_4.webp">
    <source type="image/jpeg" srcset="comp/images/4005900669292/4005900669292_4.jpg">	
							<img src="comp/images/4005900669292/4005900669292_4.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
                        <div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005900669292/4005900669292_5.webp">
    <source type="image/jpeg" srcset="comp/images/4005900669292/4005900669292_5.jpg">	
							<img src="comp/images/4005900669292/4005900669292_5.jpg" alt="NIVEA">
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
                <b>Loção hidratante NIVEA Óleos Essenciais Coco e Óleo Monoi</b> recupera maciez e brilho da pele seca, nutrindo com cuidado. Hidrata por 24h e ainda perfuma. Garanta o seu!
				</p>
				<h3 class="fade-revealUp">
                Para que serve?
				</h3>
				<p class="fade-revealUp">
                O hidratante para pele seca tem uma fórmula especial que combina Óleo de Monoi com a deliciosa fragrância de Coco.
				</p>
				<h3 class="fade-revealUp">
					Benefícios e diferenciais
				</h3>
				<div class="beneficios">
                    <div class="fade-revealUp">
                    Não deixa a pele oleosa
					</div>
                    <div class="fade-revealUp">
                    Pele macia, perfumada e com brilho
					</div>
                    <div class="fade-revealUp">
                    Textura leve de rápida absorção
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
					<div class="modoUsoDiv" style="background-image: url('comp/images/4005900669292/4005900669292_6.jpg')">
					</div>
				</div>
				<div class="d-none d-md-block">
					<div class="modoUsoDiv-desktop" style="background-image: url('comp/images/4005900669292/4005900669292_6.jpg')">
					</div>
				</div>				
				<h3 id="ingredientes" class="ingredientes" onclick="ingredientesClick()">Ingredientes &#x25BE</h3>
				<div id="ingredientesLista" class="ingredientesLista">
					<p>
                    Aqua, Glycerin, Isopropyl Palmitate, Alcohol, Glyceryl Stearate SE, Cetearyl Alcohol , Gardenia Taitensis Flower Extract, Cocos Nucifera Oil, Tocopherol, Dimethicone, Carbomer, Sodium Cetearyl Sulfate, Sodium Hydroxide, Trisodium EDTA, Phenoxyethanol, Ethylhexylglycerin, Linalool, Coumarin, Benzyl Alcohol, Citronellol, Parfum
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid containerD">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-6 text-center">
				<h1 class="fade-revealUp">Especificações</h1>
				<picture>
    <source type="image/webp" srcset="comp/images/4005900669292/4005900669292_7.webp">
    <source type="image/jpeg" srcset="comp/images/4005900669292/4005900669292_7.jpg">
				<img src="comp/images/4005900669292/4005900669292_8.jpg" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
		</div>
	</div>
<!--
	<div class="container-fluid containerE">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-10 text-center">
				<video width="100%" height="auto" controls autoplay muted loop>
					<source src="comp/images/4005900669292/4005900669292_video.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div>
			</div>
		</div> 
-->
		<div class="container-fluid containerF">
			<div class="row">
				<div class="col-12">
				<h1>Aproveite</h1>
				</div>
			</div>
		</div>

<?php include "foot.php" ?>