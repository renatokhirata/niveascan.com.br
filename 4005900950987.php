<?php include "head.php" ?>
<!-- 4005900950987 -->
<style>:root {
	--cor01: #0033a1;
	--cor02: #0033a1;
	--cor03: #d6c8c5;
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
    <source type="image/webp" srcset="comp/images/4005900950987/4005900950987_00.webp">
    <source type="image/jpeg" srcset="comp/images/4005900950987/4005900950987_00.png">		
			<img src="comp/images/4005900950987/4005900950987_00.png" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
			<div class="col-12 col-md-9 text-center">
				<h1 class="fade-h1 fade-revealUp">
                Hidratante Facial 7 em 1 Beleza Radiante
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
    <source type="image/webp" srcset="comp/images/4005900950987/4005900950987_3.webp">
    <source type="image/jpeg" srcset="comp/images/4005900950987/4005900950987_3.jpg">		
							<img src="comp/images/4005900950987/4005900950987_3.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005900950987/4005900950987_4.webp">
    <source type="image/jpeg" srcset="comp/images/4005900950987/4005900950987_4.jpg">		
							<img src="comp/images/4005900950987/4005900950987_4.jpg" alt="NIVEA">
</picture>
							</div>
						</div>
						<div class="carousel-item">
							<div class="carousel-imgctn">
							<picture>
    <source type="image/webp" srcset="comp/images/4005900950987/4005900950987_5.webp">
    <source type="image/jpeg" srcset="comp/images/4005900950987/4005900950987_5.jpg">		
							<img src="comp/images/4005900950987/4005900950987_5.jpg" alt="NIVEA">
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
					O que ???
				</h3>
				<p class="fade-revealUp">
                Creme hidratante desenvolvido especialmente para as necessidades da pele negra. Ideal para pele oleosa, pois controla a oleosidade e promove um efeito matte.
				</p>
				<h3 class="fade-revealUp">
                Para que serve?
				</h3>
				<p class="fade-revealUp">
                Sua f??rmula com ??cido Hialur??nico, Extrato de P??rolas e C??rcuma oferece 7 benef??cios em 1:
                <br>1) Reduz a apar??ncia de marcas escurecidas*;
                <br>2) Controla a oleosidade;
                <br>3) Uniformiza o tom de pele;
                <br>4) Ilumina;
                <br>5) Hidrata;
                <br>6) Com prote????o UVA/UVB;
                <br>7) Efeito Matte
                <br>*Teste de percep????o.
				</p>
				<h3 class="fade-revealUp">
					Benef??cios e diferenciais
				</h3>
				<div class="beneficios">
					<div class="fade-revealUp">
                    Controla a oleosidade e promove um efeito matte
					</div>
					<div class="fade-revealUp">
                    Uniformiza o tom de pele, ilumina e hidrata
					</div>
                    <div class="fade-revealUp">
                    Oferece prote????o UVA/UB
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
					<div class="modoUsoDiv" style="background-image: url('comp/images/4005900950987/4005900950987_6.jpg')">
					</div>
				</div>
				<div class="d-none d-md-block">
					<div class="modoUsoDiv-desktop" style="background-image: url('comp/images/4005900950987/4005900950987_6.jpg')">
					</div>
				</div>				
				<h3 id="ingredientes" class="ingredientes" onclick="ingredientesClick()">Ingredientes &#x25BE</h3>
				<div id="ingredientesLista" class="ingredientesLista">
					<p>
                    Aqua (??gua), Palmitic Acid (??cido Palm??tico), Stearic Acid (??cido Este??rico), Ethylhexyl Salicylate (Octissalato), Glycerin (Glicerol), C12-15 Alkyl Benzoate (Benzoato de Alquila C12-15), Glyceryl Stearate (Monoestearato de Glicerila), Tapioca Starch (Amido), Laureth-23 (Lauromacrogol 400), Phenoxyethanol (Fenoxietanol), Potassium Hydroxide (Hidr??xido de Pot??ssio), Butyl Methoxydibenzoylmethane (Avobenzona), Dimethicone (Dimeticona), Myristic Acid (??cido Mir??stico), Methylparaben (Metilparabeno), Arachidic Acid (??cido Eicosanoico), Sodium Polyacrylate (Poliacrilato de S??dio), Trisodium EDTA (Edetato Triss??dico), Ethylhexylglycerin (Etilexilglicerina), Oleic Acid (??cido Oleico), Sodium Ascorbyl Phosphate (Ascorbil Fosfato de S??dio), Hydrolyzed Pearl (P??rola Hidrolisada), Sodium Hyaluronate (Hialuronato de S??dio), PEG-40 Hydrogenated Castor Oil (??leo de R??cino Hidrogenado Etoxilado), Trideceth-9 (Polietilenoglicol-9 ??ter de ??lcool Tridec??lico), Curcuma Aromatica Root Oil (??leo da Raiz de Curcuma Aromatica), Decylene Glycol (Decilenoglicol), 1,2-Hexanediol (1,2-Hexanodiol), Parfum (Perfume), CI 77891 (Di??xido de Tit??nio)
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid containerD">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-6 text-center">
				<h1 class="fade-revealUp">Especifica????es</h1>
				<picture>
    <source type="image/webp" srcset="comp/images/4005900950987/4005900950987_7.webp">
    <source type="image/jpeg" srcset="comp/images/4005900950987/4005900950987_7.jpg">	
				<img src="comp/images/4005900950987/4005900950987_7.jpg" style="max-width: 100%;" alt="NIVEA" class="fade-revealUp">
</picture>
			</div>
		</div>
	</div>

	<!--<div class="container-fluid containerE">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-10 text-center">
				<video width="100%" height="auto" controls autoplay muted loop>
					<source src="comp/images/4005900950987/4005900950987_video.mp4" type="video/mp4">
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