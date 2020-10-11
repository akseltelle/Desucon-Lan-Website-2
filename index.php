<?php

include 'header.php';

include_once 'MinecraftServerStatus/status.class.php';

$menuitem = 'hjem';

?>
<center>
	<h1>Velkommen til Desucon's Minecraft Server!</h1>
	<h2>Her kan du finne alle konkurransene, server filene og informasjon om serveren.</h2>
	<h3>Hvis du har noen spørsmål kan du kontakte oss i Crewet, så vil du bli ledet til de ansvarlige for minecraft serveren.</h3>
	<br>
	<h2>Er du klar? Bruk IP adressen nedenfor for å koble til!</h2>
	<div class="row">
		<div class="col-md-5"></div>
		<div class="col-md-2">
			<center>
				<input align="center" type="text" id="ip" name="ip" class="form-control" value="mc.desucon.no" autocomplete="off" onfocus="this.select();" onmouseup="return false;" readonly required>
				<?php
				$status = new MinecraftServerStatus();
				$response = $status->getStatus('mc.desucon.no');
				if(!$response) {
					echo"<font style='color: red;'>Serveren er offline!</font>";
				} else {
					echo"
					<font style='color: green;'>".$response['players']." / ".$response['maxplayers']."</font>";
				}
				?>
			</center>
		</div>
		<div class="col-md-5"></div>
	</div>
	<h3>Vet du ikke hva minecraft er? Da kan du <a href="https://no.wikipedia.org/wiki/Minecraft" target="_blank">lese mer om spillet her</a>, og <a href="https://minecraft.net/no/store/minecraft/" target="_blank">kjøpe spillet her</a>.
	<br><br>
	<h2>Offisiell Trailer:</h2>
	<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MmB9b5njVbA" allowfullscreen></iframe>
	</div>
</center>
<?php include 'footer.php'; ?>