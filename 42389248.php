<?php include "head.php" ?>
<!-- 42389248 -->
<style>:root {
	--cor01: #0033a1;
	--cor02: white;
	--cor03: #181255;
}</style>

<body>
	<div class="container-fluid containerIntro">
		<div class="row justify-content-center d-flex">
			<div class="col-12 col-md-6">

				<?php include "estrela.php" ?>

				<h1 class="text-center">
					<span>Resultado</span> 
                    <span>em </span>
                    <span>poucos </span>
                    <span>dias</span>
                    <span>Estou </span>
                    <span>gostando </span>
                    <span>muito </span>
                    <span>e </span>
                    <span>percebi </span>
                    <span>que </span>
                    <span>meu </span>
                    <span>rosto </span>
                    <span>está </span>
                    <span>com </span>
                    <span>a </span>
                    <span>pele </span>
                    <span>fininha </span>
                    <span>e </span>
                    <span>aveludada. </span>
                    <span>Recomendo. </span>
				</h1>
				<p class="introAutor text-center">
				<b>
                Márcia A
				</b><br>
                25/01/2022 • NIVEA
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
    <source type="image/webp" srcset="comp/images/42389248/42389248_00.webp">
    <source type="image/jpeg" srcset="comp/images/42389248/42389248_00.png">	
			<img src="comp/images/42389248/42389248_00.png" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
			<div class="col-12 col-md-9 text-center">
				<h1 class="fade-h1 fade-revealUp">
                Creme Facial Noturno
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
    <source type="image/webp" srcset="comp/images/42389248/42389248_3.webp">
    <source type="image/jpeg" srcset="comp/images/42389248/42389248_3.jpg">	
							<img src="comp/images/42389248/42389248_3.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/42389248/42389248_4.webp">
    <source type="image/jpeg" srcset="comp/images/42389248/42389248_4.jpg">	
							<img src="comp/images/42389248/42389248_4.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/42389248/42389248_5.webp">
    <source type="image/jpeg" srcset="comp/images/42389248/42389248_5.jpg">	
							<img src="comp/images/42389248/42389248_5.jpg" alt="NIVEA">
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
                <b>Creme facial noturno</b> que proporciona hidratação intensa sem deixar a pele oleosa. Textura leve de rápida absorção. Confira + detalhes!
				</p>
				<h3 class="fade-revealUp">
                Para que serve?
				</h3>
				<p class="fade-revealUp">
                Hidrata profundamente enquanto você dorme. Com Vitamina B5 e tecnologia Hydro Waxes à base de água, renova as células durante a noite.
				</p>
				<h3 class="fade-revealUp">
					Benefícios e diferenciais
				</h3>
				<div class="beneficios">
					<div class="fade-revealUp">
                    Enriquecido com Vitamina B5
					</div>
                    <div class="fade-revealUp">
                    Não deixa a pele oleosa
					</div>
                    <div class="fade-revealUp">
                    Fórmula leve de rápida absorção
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
					<div class="modoUsoDiv" style="background-image: url('comp/images/42389248/42389248_6.jpg')">
					</div>
				</div>
				<div class="d-none d-md-block">
					<div class="modoUsoDiv-desktop" style="background-image: url('comp/images/42389248/42389248_6.jpg')">
					</div>
				</div>				
				<h3 id="ingredientes" class="ingredientes" onclick="ingredientesClick()">Ingredientes &#x25BE</h3>
				<div id="ingredientesLista" class="ingredientesLista">
					<p>
					<br> Não inclui Parabenos, Óleo mineral</br>
					 Aqua, Glycerin, Butyrospermum Parkii Butter, Cetyl Palmitate, Olus Oil, Cetyl Alcohol, Isopropyl Palmitate, Panthenol, Sodium Polyacrylate, Dimethicone, Sodium Hydroxide, Phenoxyethanol, Ethylhexylglycerin, Linalool, d-Limonene, Citronellol, Geraniol, Benzyl Alcohol, Alpha-Isomethyl Ionone, Parfum5
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid containerD">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-6 text-center">
				<h1 class="fade-revealUp">Especificações</h1>
				<picture>
    <source type="image/webp" srcset="comp/images/42389248/42389248_7.webp">
    <source type="image/jpeg" srcset="comp/images/42389248/42389248_7.jpg">
				<img src="comp/images/42389248/42389248_7.jpg" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
		</div>
	</div>

	<div class="container-fluid containerE">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-10 text-center">
				<video width="100%" height="auto" controls autoplay muted loop>
					<source src="comp/images/42389248/42389248-video.mp4" type="video/mp4">
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