<?php include "head.php" ?>
<!-- 4005900079664 -->
<style>:root {
	--cor01: #0033a1;
	--cor02: white;
	--cor03: #fe813f;
}</style>

<body>
	<div class="container-fluid containerIntro">
		<div class="row justify-content-center d-flex">
			<div class="col-12 col-md-6">

				<?php include "estrela.php" ?>

				<h1 class="text-center">
                    <span>São </span>
                    <span>os </span>
                    <span>melhores </span>
                    <span>produtos </span>
                    <span>de </span>
                    <span>beleza!</span>
                    <span>Eu </span>
                    <span>amo </span>
                    <span>os </span>
                    <span>produtos </span>
                    <span>da</span>
                    <span>marca</span> 
                    <span>NIVEA.</span>
				</h1>
				<p class="introAutor text-center">
				<b>
                Patricia
				</b><br>
                06/05/2021 • NIVEA
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
    <source type="image/webp" srcset="comp/images/4005900079664/4005900079664_00.webp">
    <source type="image/jpeg" srcset="comp/images/4005900079664/4005900079664_00.png">	
			<img src="comp/images/4005900079664/4005900079664_00.png" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
			<div class="col-12 col-md-9 text-center">
				<h1 class="fade-h1 fade-revealUp">
                Creme Facial Antissinais Q10 Energy Dia FPS15
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
    <source type="image/webp" srcset="comp/images/4005900079664/4005900079664_3.webp">
    <source type="image/jpeg" srcset="comp/images/4005900079664/4005900079664_3.jpg">	
							<img src="comp/images/4005900079664/4005900079664_3.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
                        <div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005900079664/4005900079664_4.webp">
    <source type="image/jpeg" srcset="comp/images/4005900079664/4005900079664_4.jpg">	
							<img src="comp/images/4005900079664/4005900079664_4.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005900079664/4005900079664_5.webp">
    <source type="image/jpeg" srcset="comp/images/4005900079664/4005900079664_5.jpg">	
							<img src="comp/images/4005900079664/4005900079664_5.jpg" alt="NIVEA">
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
                <b>Creme Facial NIVEA Q10 Energy FPS15</b> reduz rugas profundamente. Sua fórmula exclusiva reduz linhas de expressão e deixa a pele com aparência mais jovem em apenas 4 semanas de uso. Garanta o seu!
				</p>
				<h3 class="fade-revealUp">
                Para que serve?
				</h3>
				<p class="fade-revealUp">
                Três poderosos oxidantes deixam a pele radiante: Q10, Vitamina C e Vitamina E. Protegem contra a formação de rugas e evita o envelhecimento da pele.
				</p>
				<h3 class="fade-revealUp">
					Benefícios e diferenciais
				</h3>
				<div class="beneficios">
					<div class="fade-revealUp">
                    Tem FPS15, protege contra os raios UVA/UVB
					</div>
					<div class="fade-revealUp">
                    Sensação instantânea de pele macia e iluminada
					</div>
                    <div class="fade-revealUp">
                    Pele descansada e saudável
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
					<div class="modoUsoDiv" style="background-image: url('comp/images/4005900079664/4005900079664_6.jpg')">
					</div>
				</div>
				<div class="d-none d-md-block">
					<div class="modoUsoDiv-desktop" style="background-image: url('comp/images/4005900079664/4005900079664_6.jpg')">
					</div>
				</div>				
				<h3 id="ingredientes" class="ingredientes" onclick="ingredientesClick()">Ingredientes &#x25BE</h3>
				<div id="ingredientesLista" class="ingredientesLista">
					<p>
                    Aqua, Glycerin, Ethylhexyl Salicylate, Alcohol Denat., Cetearyl Alcohol, Ethylhexyl Stearate, Glyceryl Stearate Citrate, Butyl Methoxydibenzoylmethane, C12-15 Alkyl Benzoate, Methylpropanediol, Octocrylene, Hydrogenated Coco-Glycerides, Phenylbenzimidazole Sulfonic Acid, Ubiquinone, Sodium Ascorbyl Phosphate, Tocopheryl Acetate, Creatine, 1-Methylhydantoin-2-Imide, 1,2-Hexanediol, Chondrus Crispus Extract, Carbomer, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Trisodium EDTA, Sodium Hydroxide, Phenoxyethanol, Linalool, Limonene, Geraniol, Parfum, CI 16035
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
    <source type="image/webp" srcset="comp/images/4005900079664/4005900079664_7.webp">
    <source type="image/jpeg" srcset="comp/images/4005900079664/4005900079664_7.jpg">
				<img src="comp/images/4005900079664/4005900079664_7.jpg" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
		</div>
	</div>
    
	<div class="container-fluid containerE">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-10 text-center">
				<video width="100%" height="auto" controls autoplay muted loop>
					<source src="comp/images/4005900079664/4005900079664_video.mp4" type="video/mp4">
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