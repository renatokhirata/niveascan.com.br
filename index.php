<?php include "head-home.php" ?>

<div class="container-fluid">
	<div class="row mb-4">
		<div class="col-12 d-flex justify-content-center">
			<div id="resultado">
				<a class='botao inativo'>
					Escaneie o código de barras
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 d-flex justify-content-center">
			<button id="cameraStart" class="cameraStartButton" onclick="cameraStart()">
				Aperte para começar
			</button>
			
			<div id="cameraHolder"></div>
		</div>
	</div>
</div>

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
	function cameraStart() {
		document.getElementById("cameraStart").classList.add ("d-none");
		document.getElementById("cameraHolder").innerHTML = "<div id='camera'></div>";

		Quagga.init({
			inputStream : {
				name : "Live",
				type : "LiveStream",
				target: document.querySelector('#camera'),
				constraints: {
					width: 640,
					height: 300
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
		Quagga.onDetected(function(data){
			var barCode;
			var page = data.codeResult.code;
			var link;
			lastResult.push(page);
			if (lastResult.length > 20){
				barCode = orderByOcurrence(lastResult)[0];
				link = "<a class='botao' target='_blank' href='" + barCode + "'>Clique aqui " + barCode + "</a>";
				Quagga.stop();	
				document.querySelector('#resultado').innerHTML = link;
				console.log(link);
			}
		});

	}
</script>

<?php include "foot-home.php" ?>