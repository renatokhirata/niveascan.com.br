<?php include "head.php" ?>
<!-- 4005900889737 -->
<style>:root {
	--cor01: #0033a1;
	--cor02: #0033a1;
	--cor03: #ecc1c8;
}</style>

<body>
<div class="container-fluid containerIntro d-none">
		<div class="row justify-content-center d-flex">
			<div class="col-12 col-md-6">

				<?php include "estrela.php" ?>

				<h1 class="text-center">
					<span>Maravilhoso</span>
				</h1>
				<p class="introAutor text-center">
				<b>
                JWalles
				</b><br>
					08/06/2022
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
    <source type="image/webp" srcset="comp/images/4005900889737/4005900889737_00.webp">
    <source type="image/jpeg" srcset="comp/images/4005900889737/4005900889737_00.png">		
			<img src="comp/images/4005900889737/4005900889737_00.png" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
			<div class="col-12 col-md-9 text-center">
				<h1 class="fade-h1 fade-revealUp">
                Tônico Hidratante Aqua Rose
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
    <source type="image/webp" srcset="comp/images/4005900889737/4005900889737_3.webp">
    <source type="image/jpeg" srcset="comp/images/4005900889737/4005900889737_3.jpg">		
							<img src="comp/images/4005900889737/4005900889737_3.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005900889737/4005900889737_4.webp">
    <source type="image/jpeg" srcset="comp/images/4005900889737/4005900889737_4.jpg">		
							<img src="comp/images/4005900889737/4005900889737_4.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
                        <div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005900889737/4005900889737_5.webp">
    <source type="image/jpeg" srcset="comp/images/4005900889737/4005900889737_5.jpg">		
							<img src="comp/images/4005900889737/4005900889737_5.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005900889737/4005900889737_6.webp">
    <source type="image/jpeg" srcset="comp/images/4005900889737/4005900889737_6.jpg">		
							<img src="comp/images/4005900889737/4005900889737_6.jpg" alt="NIVEA">
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
                Nivea Aqua Rose é um tônico facial hidratante com Água de Rosas Orgânica, conhecida por seu benefício antioxidante. Para todos os tipos de pele. Confira!
				</p>
				<h3 class="fade-revealUp">
                Para que serve?
				</h3>
				<p class="fade-revealUp">
                Com água de rosas orgânica, melhora a aparência dos polos, tonifica e finaliza a limpeza do rosto, além de hidratar intensamente.
				</p>
				<h3 class="fade-revealUp">
					Benefícios e diferenciais
				</h3>
				<div class="beneficios">
					<div class="fade-revealUp">
                    Tonifica e finaliza a limpeza
					</div>
					<div class="fade-revealUp">
                    Não contém álcool etílico 
					</div>
                    <div class="fade-revealUp">
                    Dermatologicamente testado
					</div>
                    <div class="fade-revealUp">
                    Para todos os tipos de pele. 
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
					<div class="modoUsoDiv" style="background-image: url('comp/images/4005900889737/4005900889737_7.jpg')">
					</div>
				</div>
				<div class="d-none d-md-block">
					<div class="modoUsoDiv-desktop" style="background-image: url('comp/images/4005900889737/4005900889737_7.jpg')">
					</div>
				</div>				
				<h3 id="ingredientes" class="ingredientes" onclick="ingredientesClick()">Ingredientes &#x25BE</h3>
				<div id="ingredientesLista" class="ingredientesLista">
					<p>
                    Aqua (Água), Glycerin (Glicerol), Methylpropanediol (Metilpropanodiol), Tapioca Starch (Amido ), Ethylhexyl Salicylate (Octissalato), Butyl Methoxydibenzoylmethane (Avobenzona), Dicaprylyl Carbonate (Carbonato de Dicaprilila), Bis-Ethylhexyloxyphenol Methoxyphenyl Triazine (Bis-Etilexiloxifenol Metoxifenil Triazina), Cetearyl Alcohol (Álcool Cetoestearílico), Ethylhexyl Stearate (Estearato de Octila), Phenylbenzimidazole Sulfonic Acid (Ensulizol), Ethylhexyl Triazone (Etilexil Triazona), Glyceryl Stearate (Monoestearato de Glicerila), Behenyl Alcohol (Álcool Beenílico), Triisostearin (Tri-Isoesterarina), Bakuchiol (Bacuchiol), Creatine (Creatina), 1-Methylhydantoin-2-Imide (1-Metilidantoin-2-Imida), Sodium Hyaluronate (Hialuronato de Sódio), Tocopherol (Tocoferol), Sodium Stearoyl Glutamate (Estearoil Glutamato de Sódio), Ethylhexylglycerin (Etilexilglicerina), 1,2-Hexanediol (1,2-Hexanodiol), Xanthan Gum (Goma Xantana ), Trisodium EDTA (Edetato Trissódico), Sodium Hydroxide (Hidróxido de Sódio), Sodium Chloride (Cloreto de Sódio), Phenoxyethanol (Fenoxietanol), Sodium Sulfate (Sulfato de Sódio), Parfum (Perfume), CI 15985 (Amarelo Crepúsculo), CI 16035 (Vermelho Allura 129).
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
    <source type="image/webp" srcset="comp/images/4005900889737/4005900889737_8.webp">
    <source type="image/jpeg" srcset="comp/images/4005900889737/4005900889737_8.png">	
				<img src="comp/images/4005900889737/4005900889737_8.jpg" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
		</div>
	</div>

	<div class="container-fluid containerE">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-10 text-center">
				<video width="100%" height="auto" controls autoplay muted loop>
					<source src="comp/images/4005900889737/4005900889737_video.mp4" type="video/mp4">
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