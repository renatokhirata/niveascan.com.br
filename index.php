<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="comp/css/style.css">
</head>
<body>
	<div id="resultado">
		<a class='botao inativo'>Escaneie o código de barras</a>
	</div>
	<div id="camera"></div>
	
	<script src="comp/js/quagga.min.js"></script>
	<script>
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
		  		readers : ["code_128_reader"]
		  	}
		}, function(err) {
			if (err) {
				console.log(err);
				return
			}
			console.log("Initialization finished. Ready to start");
			Quagga.start();
		});

		Quagga.onDetected(function(data){
			var page = data.codeResult.code;
			var link = "<a class='botao' target='_blank' href='" + page + ".html'>Clique aqui " + page + "</a>";
			document.querySelector('#resultado').innerHTML = link;
			console.log(link);
		});
	</script>	

</body>
</html>