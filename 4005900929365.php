<?php include "head.php" ?>
<!-- 4005900929365 -->
<style>:root {
	--cor01: #0033a1;
	--cor02: white;
	--cor03: #d1898e
}</style>

<body>
        <div class="container-fluid containerIntro d-none">
		<div class="row justify-content-center d-flex">
			<div class="col-12 col-md-6">

				<?php include "estrela.php" ?>

				<h1 class="text-center">
				<span>Melhor</span>	
				
            </h1>
				<p class="introAutor text-center">
				<b>
                Carla
				</b><br>
                31/12/2021 • NIVEA
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
    <source type="image/webp" srcset="comp/images/4005900929365/4005900929365_00.webp">
    <source type="image/jpeg" srcset="comp/images/4005900929365/4005900929365_00.png">	
			<img src="comp/images/4005900929365/4005900929365_00.png" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
			<div class="col-12 col-md-9 text-center">
				<h1 class="fade-h1 fade-revealUp">
                Hidratante Corporal Beleza Radiante Pele Uniforme
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
    <source type="image/webp" srcset="comp/images/4005900929365/4005900929365_3.webp">
    <source type="image/jpeg" srcset="comp/images/4005900929365/4005900929365_3.jpg">	
							<img src="comp/images/4005900929365/4005900929365_3.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005900929365/4005900929365_4.webp">
    <source type="image/jpeg" srcset="comp/images/4005900929365/4005900929365_4.jpg">	
							<img src="comp/images/4005900929365/4005900929365_4.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
                        <div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005900929365/4005900929365_5.webp">
    <source type="image/jpeg" srcset="comp/images/4005900929365/4005900929365_5.jpg">	
							<img src="comp/images/4005900929365/4005900929365_5.jpg" alt="NIVEA">
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
                Hidratante corporal desenvolvido especialmente para a beleza da pele negra. Reduz a aparência de marcas escurecidas, uniformizando a pele. Contém FPS 15: protege contra os raios UVA e UVB. Para peles secas.
				</p>
				<h3 class="fade-revealUp">
                Para que serve?
				</h3>
				<p class="fade-revealUp">
                Formulado com Vitamina C, Extrato de Pérolas e FPS 15, promove 48h de hidratação profunda além de uniformizar o tom da pele em 2 semanas*.
                <br>*Teste de percepção. Resultados dependem do uso contínuo do produto.</br>
				</p>
				<h3 class="fade-revealUp">
					Benefícios e diferenciais
				</h3>
				<div class="beneficios">
                    <div class="fade-revealUp">
                    48h hidratação profunda
					</div>
                    <div class="fade-revealUp">
                    Uniformiza o tom da pele em 2 semanas*
					</div>
                    <div class="fade-revealUp">
                    Ajuda na reparação das áreas ressecadas
					</div>
                    <div class="fade-revealUp">
                    Fórmula enriquecida com Vitamina C e Extrato de Pérola
					</div>
                    <p class="fade-revealUp">
                    *Teste de percepção. Resultados dependem do uso contínuo do produto.
				</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid containerC">
		<div class="row d-flex justify-content-center">
			<div class="col-12 text-center">
				<h1>Modo de uso</h1>
				<div class="d-block d-md-none">
					<div class="modoUsoDiv" style="background-image: url('comp/images/4005900929365/40059009293656.jpg')">
					</div>
				</div>
				<div class="d-none d-md-block">
					<div class="modoUsoDiv-desktop" style="background-image: url('comp/images/4005900929365/4005900929365_6.jpg')">
					</div>
				</div>				
				<h3 id="ingredientes" class="ingredientes" onclick="ingredientesClick()">Ingredientes &#x25BE</h3>
				<div id="ingredientesLista" class="ingredientesLista">
					<p>
                    Aqua (Água), Glycerin (Glicerol), C12-15 Alkyl Benzoate (Benzoato de Alquila C12-15), Alcohol (Álcool Etílico), Butyl Methoxydibenzoylmethane (Avobenzona), Cetyl Alcohol (Álcool Cetílico), Dimethicone (Dimeticona), Octocrylene (Octocrileno), Phenylbenzimidazole Sulfonic Acid (Ensulizol), Palmitic Acid (Ácido Palmítico),  Stearic Acid (Ácido Esteárico), Cetyl Palmitate (Palmitato de Cetila), Glyceryl Stearate (Monoestearato de Glicerila), Phenoxyethanol (Fenoxietanol), Tapioca Starch (Amido), Sodium Hydroxide (Hidróxido de Sódio), Carbomer (Carbômer), Methylparaben (Metilparabeno), Sodium Metabisulfite (Metabissulfito de Sódio), Trisodium EDTA (Edetato Trissódico), 4-Butylresorcinol (4-Butilresorcina), Ethylparaben (Etilparabeno), Myristic Acid (Ácido Mirístico), Arachidic Acid (Ácido Eicosanoico), Potassium Lactate (Lactato de Potássio), Oleic Acid (Ácido Oleico), Lactic Acid (Ácido Láctico), Sodium Ascorbyl Phosphate (Ascorbil Fosfato de Sódio), Hydrolyzed Pearl (Pérola Hidrolisada), Maltodextrin (Maltodextrina), Citrus Limon Juice (Suco de Citrus Limon), PEG-40 Hydrogenated Castor Oil (Óleo de Rícino Hidrogenado Etoxilado), Trideceth-9 (Polietilenoglicol-9 Éter de Álcool Tridecílico), Curcuma Aromatica Root Oil (Óleo da Raiz de Curcuma Aromatica), Decylene Glycol (Decilenoglicol), Ascorbic Acid (Ácido Ascórbico), 1, 2-Hexanediol (1,2-Hexanodiol), Parfum (Perfume)
		</div>
	</div>

	<div class="container-fluid containerD">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-6 text-center">
				<h1 class="fade-revealUp">Especificações</h1>
				<picture>
    <source type="image/webp" srcset="comp/images/4005900929365/4005900929365_7.webp">
    <source type="image/jpeg" srcset="comp/images/4005900929365/4005900929365_7.jpg">
				<img src="comp/images/4005900929365/4005900929365_7.jpg" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
		</div>
	</div>
	<div class="container-fluid containerE">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-10 text-center">
				<video width="100%" height="auto" controls autoplay muted loop>
					<source src="comp/images/4005900929365/4005900929365_video.mp4" type="video/mp4">
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