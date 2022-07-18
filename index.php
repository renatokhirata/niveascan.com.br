<?php include "head-home.php" ?>

<!-- 2.0 -->

<div class="home">
	<div id="resultado-modal" class="resultado-modal-bg d-none">
		<div id="resultado" class="resultado-modal-box">
			<div id="encontrado">
				<img id="resultado-image" class="resultado-image" alt="NIVEA" src="">
				<a id="resultado-botao" class="resultado-botao" target="_blank" href="">
					Ver produto
				</a><br>
				<div class="resultado-botao resultado-botao-secondary" onclick="document.location.reload(true)">
					Escanear outro
				</div>
			</div>
			<div id="nao-encontrado" class="d-none">
				<img style="max-width:80px;" src="comp/images/icon-naoencontrado.svg" alt="NIVEA">
				<p>Código não encontrado</p>
				<div class="resultado-botao resultado-botao-secondary" onclick="document.location.reload(true)">
					Escanear novamente
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row py-4">
			<div class="col-12 d-flex justify-content-center">
				<h1><span style="font-weight: 800;">NIVEA</span> Scan</h1>
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 d-flex justify-content-center">
				<div id="cameraStartButtonBg">
					<div id="cameraStart" class="cameraStartButton" onclick="cameraStart()">
						<img src="comp/images/icon-barcode.svg" alt="NIVEA">
						<h3>Aperte aqui<br>para começar</h3>
					</div>
					<div id="cameraHolder"></div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid my-4 py-2">
		<div class="row d-flex justify-content-center">
			<div class="col-10 text-center">
				<h3 class="font-weight-bold">O cuidado com você começa com mais informação.</h3>
				<p>Escaneie o código de barras dos produtos NIVEA para saber mais e descobrir qual é o ideal para a sua rotina de cuidado.</p>
			</div>
		</div>
	</div>
	
</div> <!--END Home -->
<script>
	function orderByOcurrence(arr){
		var counts = {};
		arr.forEach(function(value){
			if(!counts[value]) {
				counts[value] = 0;
			}
			counts[value]++;
		});
		console.log(counts);
		return Object.keys(counts).sort(function(curKey, nextKey){
			return counts[curKey] < counts[nextKey];
		});
	}
	function cameraStart() {
		document.getElementById("cameraHolder").innerHTML = "<div id='camera'><span id='camera-text'>Aponte a câmera para o código de barras</span><div id='barLine'></div>";
		document.getElementById("cameraStartButtonBg").style.background = "white";
		document.getElementById("cameraHolder").style.width = "100%";
		setTimeout(() => {
			document.getElementById("camera-text").style.opacity = "0.9";
			document.getElementById("camera-text").style.top = "50%";
		}, 1500);
		setTimeout(() => {
			document.getElementById("barLine").style.width = "80%";
			document.getElementById("camera-text").style.opacity = 0;
			document.getElementById("camera-text").style.top = "30%";
		}, 4000);
		Quagga.init({
			inputStream : {
				name : "Live",
				type : "LiveStream",
				target: document.querySelector('#camera'),
				constraints: {
					width: 1000,
					height: 1000
				}
			},
			decoder : {
				readers : ["ean_reader","ean_8_reader"]
			},
			locate: true,
			halfSample: true,
  			patchSize: "x-small",
			debug: {
				drawBoundingBox: true,
				showFrequency: true,
				drawScanline: true,
				showPattern: true
			}
		}, 
		function(err) {
			if (err) {
				console.log(err);
				return
			}
			console.log("Initialization finished. Ready to start");
			Quagga.start();

			const track = Quagga.CameraAccess.getActiveTrack(); 
			sleep(5000); 
			var capabilities = track.getCapabilities(); 
			track.applyConstraints({ advanced: [{zoom: capabilities.zoom.max}]}).catch(e => console.log(e));
		});
		
		var lastResult = [];
		lastResult.splice(0, lastResult.length);
		var barCode = [];
		var listValidEAN = ["42176763","42355014","42360407","42360414","42389248","42398004","4005808174478","4005808189342","4005808189625","4005808561162","4005808569878","4005808570928","4005808571147","4005808572175","4005808692576","4005808811212","4005808811717","4005808812875","4005808812899","4005900079664","4005900139849","4005900139856","4005900359261","4005900418777","4005900520920","4005900539724","4005900539731","4005900602220","4005900662019","4005900748676","4005900813046","4005900813053","4005900889713","4005900889720","4005900889737","4005900894779","4005900929358","4005900929679","4005900929686","4005900950987", "4005900782007"]
		Quagga.onDetected(function(data){
			var page = data.codeResult.code;
			lastResult.push(page);
			if (lastResult.length > 5){
				barCode = orderByOcurrence(lastResult)[0];
				Quagga.stop();
				if (listValidEAN.includes(barCode)) {
					console.log("foi:" + barCode);
					document.getElementById("encontrado").classList.remove("d-none");
					document.getElementById("nao-encontrado").classList.add("d-none");
					document.getElementById("resultado-image").setAttribute("src","comp/images/" + barCode + "/" + barCode + "_00.png");
					document.getElementById("resultado-botao").setAttribute("href", barCode);
					document.getElementById("barLine").classList.add("d-none");
					document.getElementById("resultado-modal").classList.remove("d-none");
				} else {
					console.log("não foi:" + barCode);
					document.getElementById("encontrado").classList.add("d-none");
					document.getElementById("nao-encontrado").classList.remove("d-none");
					document.getElementById("resultado-modal").classList.remove("d-none");
				}
			}
		});
		
	}
</script>

<?php include "foot-home.php" ?>