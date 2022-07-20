<script type="text/javascript" src="comp/js/gsap.min.js"></script>
<script type="text/javascript" src="comp/js/gsapScrollTrigger.js"></script>
<script type="text/javascript" src="comp/js/fade.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<script>
	// $(window).on("load",function () {setTimeout(function(){window.location.href = "#second";},4200)});
	function ingredientesClick(){
		var x = document.getElementById("ingredientesLista");
		if (x.style.display === "none") {
			x.style.display = "block";
		} else {
			x.style.display = "none";
		}
	}
</script>

</body>
</html>