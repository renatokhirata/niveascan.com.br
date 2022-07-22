<?php include "head.php" ?>
<!-- 4005808569878 -->
<style>:root {
	--cor01: #0033a1;
	--cor02: white;
	--cor03: #0062b5;
}</style>

<body>
	<div class="container-fluid containerIntro d-none">
		<div class="row justify-content-center d-flex">
			<div class="col-12 col-md-6">

				<?php include "estrela.php" ?>

				<h1 class="text-center">
					<span>Muito</span>				
				</h1>
				<p class="introAutor text-center">
				<b>
					Selma J.
				</b><br>
					21/02/2022 • NIVEA
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
    <source type="image/webp" srcset="comp/images/4005808569878/4005808569878_00.webp">
    <source type="image/jpeg" srcset="comp/images/4005808569878/4005808569878_00.png">	
			<img src="comp/images/4005808569878/4005808569878_00.png" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
			<div class="col-12 col-md-9 text-center">
				<h1 class="fade-h1 fade-revealUp">
                Loção 2 em 1 Leite de Limpeza + Tônico
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
    <source type="image/webp" srcset="comp/images/4005808569878/4005808569878_3.webp">
    <source type="image/jpeg" srcset="comp/images/4005808569878/4005808569878_3.jpg">	
							<img src="comp/images/4005808569878/4005808569878_3.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005808569878/4005808569878_4.webp">
    <source type="image/jpeg" srcset="comp/images/4005808569878/4005808569878_4.jpg">	
							<img src="comp/images/4005808569878/4005808569878_4.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
                        <div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005808569878/4005808569878_5.webp">
    <source type="image/jpeg" srcset="comp/images/4005808569878/4005808569878_5.jpg">	
							<img src="comp/images/4005808569878/4005808569878_5.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005808569878/4005808569878_6.webp">
    <source type="image/jpeg" srcset="comp/images/4005808569878/4005808569878_6.jpg">	
							<img src="comp/images/4005808569878/4005808569878_6.jpg" alt="NIVEA">
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
                <b>Loção 2 em 1: Leite de limpeza + Tônico facial</b> que remove as impurezas e resíduos da maquiagem. Para todos os tipos de pele. Aproveite e garanta a sua!
				</p>
				<h3 class="fade-revealUp">
                Para que serve?
				</h3>
				<p class="fade-revealUp">
                Enriquecido com Vitamina E, ativo antioxidante, e Vitamina B5 que renova a pele, desobstrui os poros e não deixa a sensação oleosa na pele.
				</p>
				<h3 class="fade-revealUp">
					Benefícios e diferenciais
				</h3>
				<div class="beneficios">
					<div class="fade-revealUp">
                    Limpa e tonifica profundamente
					</div>
					<div class="fade-revealUp">
                    Remove resíduos de poluição
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
					<div class="modoUsoDiv" style="background-image: url('comp/images/4005808569878/4005808569878_7.jpg')">
					</div>
				</div>
				<div class="d-none d-md-block">
					<div class="modoUsoDiv-desktop" style="background-image: url('comp/images/4005808569878/4005808569878_7.jpg')">
					</div>
				</div>				
				<h3 id="ingredientes" class="ingredientes" onclick="ingredientesClick()">Ingredientes &#x25BE</h3>
				<div id="ingredientesLista" class="ingredientesLista">
					<p>
                    Aqua, Alcohol Denat, Isopropyl Palmitate, Glycerin, Dimethicone, Glyceryl Stearate SE, Cetearyl Alcohol, Glyceryl Glucoside, Tocopheryl Acetate, Nelumbium Speciosum Flower Extract, Panthenol, Xanthan Gum, Sodium Cetearyl Sulfate, Citric Acid, Propylene Glycol, Methylparaben, Butylphenyl Methylpropional, Geraniol, Alpha-Isomethyl Ionone, Citronellol, Eugenol, Benzyl Alcohol, Parfum REGISTRO ANVISA 25351.426291/2012-55
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
    <source type="image/webp" srcset="comp/images/4005808569878/4005808569878_8.webp">
    <source type="image/jpeg" srcset="comp/images/4005808569878/4005808569878_8.jpg">
				<img src="comp/images/4005808569878/4005808569878_8.jpg" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
		</div>
	</div>

	<div class="container-fluid containerE">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-10 text-center">
				<video width="100%" height="auto" controls autoplay muted loop>
					<source src="comp/images/4005808569878/4005808569878_video.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div>
			</div>
		</div>

		<div class="container-fluid containerF">
			<div class="row">
				<div class="col-12">
				<h1>Aproveite</h1>
				</div>
			</div>
		</div>

<?php include "foot.php" ?>