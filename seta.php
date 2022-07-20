<style>
.arrowOut {
	opacity: 0;
    width: 14px;
    display: block;
    margin: 10px auto;
}
.arrowIn {
	animation: scroll .5s ease-in alternate infinite;
	fill: var(--cor02);
}
@keyframes scroll {
  0% {transform: translateY(0);}
  100% {transform: translateY(10px);}
}
</style>

<svg class="arrowOut" version="1.1" id="svg-arrow-down" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 22 35" style="enable-background:new 0 0 22 35;" xml:space="preserve">
<polygon class="arrowIn" points="20.58,11.584 12.004,20.158 12.004,0 9.996,0 9.996,20.158 1.42,11.584 0,13.004 11,24 22,13.004 "></polygon>
</svg>

<script>
	$(window).scroll(function(e) {
  frames = 17;
  step = ($("body").height() - $(window).height()) / frames;
  scrollStep = parseInt($(window).scrollTop() / step);
  maskPosition = 100 / frames * scrollStep;
  $("#cover").css({
    "mask-position": maskPosition + "% 50%",
    "-webkit-mask-position": maskPosition + "% 50%"
  });
});
</script>
