<?php include "head-home.php" ?>

<div class="home">
<div id="resultado-modal" class="resultado-modal-bg d-none">
	<div id="resultado" class="resultado-modal-box">
		<a class="botao">
			Escaneie o código de barras
		</a>
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
			<div class="cameraStartButtonBg">
				<div id="cameraStart" class="cameraStartButton" onclick="cameraStart('firstTime')">
					<img src="comp/images/icon-barcode.svg" alt="NIVEA">
					<h3>Aperte aqui<br>para começar</h3>
				</div>
				<div id="cameraHolder"></div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid my-4">
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
		return Object.keys(counts).sort(function(curKey, nextKey){
			return counts[curKey] < counts[nextKey];
		});
	}
	function cameraStart(first) {
		var isItFirstTime = first;
		if (isItFirstTime == "firstTime") {
			document.getElementById("cameraHolder").innerHTML = "<div id='camera'></div>";
		} else {
			document.getElementById("resultado-modal").classList.add("d-none");
		}
		Quagga.init({
			inputStream : {
				name : "Live",
				type : "LiveStream",
				target: document.querySelector('#camera'),
				constraints: {
					width: 390,
					height: 390
				}
			},
			decoder : {
				readers : ["ean_reader"]
			}
		}, 
		function(err) {
			if (err) {
				console.log(err);
				return
			}
			console.log("Initialization finished. Ready to start");
			Quagga.start();
		});

		var lastResult = [];
		var listValidEAN = ["4005900950987","42398004","4005900079664","4005900139849","4005900813046","4005900813053","4005900889720","4005900889737","4005900894779","4005900929358","4005900929679","4005900929686"]
		Quagga.onDetected(function(data){
			var barCode;
			var page = data.codeResult.code;
			var link;
			lastResult.push(page);
			if (lastResult.length > 15){
				barCode = orderByOcurrence(lastResult)[0];
				Quagga.stop();
				if (listValidEAN.includes(barCode)) {
					console.log(barCode);
					link = "<img class='resultado-image' src='comp/images/" + barCode + "/" + barCode + "-00.png' alt='NIVEA'><a class='resultado-botao' target='_blank' href='" + barCode + "'>Ver produto</a><br><button class='resultado-botao-secondary' onclick='cameraStart()'>Escanear outro</button>";
					document.querySelector('#resultado').innerHTML = link;
					document.getElementById("resultado-modal").classList.remove("d-none");
				} else {
					console.log("vish");
				}
			}
		});

	}
</script>

<?php include "foot-home.php" ?>

<!-- <img class='resultado-image' src='comp/images/" + barCode + "/" + barCode + "-00.png' alt='NIVEA'>
<a class='resultado-botao' target='_blank' href='" + barCode + "'>Ver produto</a><br>
<button class='resultado-botao-secondary' onclick='cameraStart()'>Escanear outro</button> -->