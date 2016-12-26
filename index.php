<?php include_once('head.php');
	// No imprime los controles del reproductor.
	$player=false;
 ?>
	<div class="container">
		<!-- Forma para obtener un link RSS -->
		<form action="podcast.php" method="POST">
			<div class="input-field col s6">
				<input id="rss" name="rss" type="text" class="validate">
				<label for="rss">Ingresa un Link RSS</label>
			</div>		
			<button class="btn waves-effect waves-light" type="submit" name="action">Obtener Feed
				<i class="material-icons right">send</i>
			</button>
		</form>

		<div id="feed"></div>
	</div>
</body>

</html>