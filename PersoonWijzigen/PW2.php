<?phprequire_once('../dbconfigStamboom.php');$persoonkeuzeDoorgeven = $_POST["persoonkeuze"];$relatie = $_POST["relatie"];$persoon_id = $_POST["persoon_id"];$partner_id = $_POST["partner_id"];$geslacht = $_POST["geslacht"];$voornaam = $_POST["voornaam"];$tweedenaam = $_POST["tweedenaam"];$derdenaam = $_POST["derdenaam"];$voorvoegsel_achternaam = $_POST["voorvoegsel_achternaam"];$achternaam = $_POST["achternaam"];$voorvoegsel_meisjesnaam = $_POST["voorvoegsel_meisjesnaam"];$meisjesnaam = $_POST["meisjesnaam"];$geboortedatum = $_POST["geboortedatum"];$doopdatum = $_POST["doopdatum"];$geboorteplaats = $_POST["geboorteplaats"];$doopplaats = $_POST["doopplaats"];$sterfdatum = $_POST["sterfdatum"];$sterfplaats = $_POST["sterfplaats"];$beroep1 = $_POST["beroep1"];$beroep2 = $_POST["beroep2"];$beroep3 = $_POST["beroep3"];$opmerking1 = $_POST["opmerking1"];$opmerking2 = $_POST["opmerking2"];$documentatie1 = $_POST["documentatie1"];$documentatie2 = $_POST["documentatie2"];$foto1 = $_POST["foto1"];$partner1 = $_POST["partner1"];$huwlijksdatum1 = $_POST["huwlijksdatum1"];$partner2 = $_POST["partner2"];$huwlijksdatum2 = $_POST["huwlijksdatum2"];$partner3 = $_POST["partner3"];$huwlijksdatum3 = $_POST["huwlijksdatum3"];$db = new mysqli('localhost', 'root', '', 'stamboom'); if ($db->connect_errno > 0) {	echo 'Fout! : ' . $db->connect_error;}	$sql = "SELECT `partner_id` , `geslacht` , `voornaam` , `tweedenaam` , `derdenaam` , `voorvoegsel_achternaam` , `achternaam`  , `voorvoegsel_meisjesnaam`, `meisjesnaam` , `geboortedatum` , `doopdatum` , `geboorteplaats` , `doopplaats` , `sterfdatum` , `sterfplaats` , `beroep1` , `beroep2` , `beroep3` , `opmerking1` , `opmerking2` , `documentatie1` , `documentatie2` , `foto1` , `partner1` , `huwlijksdatum1` , `partner2` , `huwlijksdatum2` , `partner3` , `huwlijksdatum3`	FROM `personenregister`	WHERE `persoon_id` = $_POST[persoonkeuze]";	$resultaat = $db->query($sql); 	if (!$resultaat) {		echo "Fout: ': " . $db->error . "<br/>";	}while($row = $resultaat->fetch_assoc()){		$partner_id = $row['partner_id'];		$geslacht = $row['geslacht'];		$voornaam = $row['voornaam'];		$tweedenaam = $row['tweedenaam'];		$derdenaam = $row['derdenaam'];		$voorvoegsel_achternaam = $row['voorvoegsel_achternaam'];		$achternaam = $row['achternaam'];		$voorvoegsel_meisjesnaam = $row['voorvoegsel_meisjesnaam'];		$meisjesnaam = $row['meisjesnaam'];		$geboortedatum = $row['geboortedatum'];		$doopdatum = $row['doopdatum'];		$geboorteplaats = $row['geboorteplaats'];		$doopplaats = $row['doopplaats'];		$sterfdatum = $row['sterfdatum'];		$sterfplaats = $row['sterfplaats'];		$beroep1 = $row['beroep1'];		$beroep2 = $row['beroep2'];		$beroep3 = $row['beroep3'];		$opmerking1 = $row['opmerking1'];		$opmerking2 = $row['opmerking2'];		$documentatie1 = $row['documentatie1'];		$documentatie2 = $row['documentatie2'];		$foto1 = $row['foto1'];		$partner1 = $row['partner1'];		$huwlijksdatum1 = $row['huwlijksdatum1'];		$partner2 = $row['partner2'];		$huwlijksdatum2 = $row['huwlijksdatum2'];		$partner3 = $row['partner3'];		$huwlijksdatum3 = $row['huwlijksdatum3'];		$vader = $row['vader'];		$moeder = $row['moeder'];		$broerzus1 = $row['broerzus1'];		$broerzus2 = $row['broerzus2'];	}if ($partner_id != 0){ // selecteer gegevens van partner als die niet leeg is	$partner_idPartner = $row['partner_id'];	$geslachtPartner = $row['geslacht'];	$voornaamPartner = $row['voornaam'];	$tweedenaamPartner = $row['tweedenaam'];	$derdenaamPartner = $row['derdenaam'];	$voorvoegsel_achternaamPartner = $row['voorvoegsel_achternaam'];	$achternaamPartner = $row['achternaam'];	$voorvoegsel_meisjesnaamPartner = $row['voorvoegsel_meisjesnaam'];	$meisjesnaamPartner = $row['meisjesnaam'];		$sql1 = "SELECT `voornaam` , `tweedenaam` , `derdenaam` , `voorvoegsel_achternaam` , `achternaam`  , `voorvoegsel_meisjesnaam`, `meisjesnaam`	FROM `personenregister`	WHERE `persoon_id` = $partner_id"; 	$resultaat1 = $db->query($sql1); 	if (!$resultaat1) {		echo "Fout: ': " . $db->error . "<br/>"; 	}	while($row = $resultaat1->fetch_assoc()){		$voornaamPartner = $row['voornaam'];		$tweedenaamPartner = $row['tweedenaam'];		$derdenaamPartner = $row['derdenaam'];		$voorvoegsel_achternaamPartner = $row['voorvoegsel_achternaam'];		$achternaamPartner = $row['achternaam'];		$voorvoegsel_meisjesnaamPartner = $row['voorvoegsel_meisjesnaam'];		$meisjesnaamPartner = $row['meisjesnaam'];	}}?><html> <head> 	<title>Persoon wijzigen</title> 	<link rel="icon"       type="image/png"       href="<?php echo $path; ?>../img/ZwitsalBasje.jpg" />	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 	<link rel="stylesheet" href="<?php echo $path; ?>../css/style.css" type="text/css" /></head> <body><div id="main_container" >	<div id="header_container" >		<img src="<?php echo $path; ?>../img/Veltens.png" alt="logo" title="Veltens"  width="96px" align="center"/>		<img src="<?php echo $path; ?>../img/BAFWARE.png" alt="logo" title="BAFWARE"  width="500px" align="center"/>		<img src="<?php echo $path; ?>../img/ZwitsalBasje.jpg" alt="logo" title="ZwitsalBasje.jpg"  width="96px" align="center"/>	</div>	<div id="input_container" >		<div width="100%" >			<table width="100%" border="1" cellpadding="3" cellspacing="1">				<tr> 					<td width="10%" bgcolor="#C5CED3"><a href="<?php echo $path; ?>/stamboom.php">home</a></td>					<td width="10%" bgcolor="#D6DDE0">persoon toevoegen/wijzigen</td>  					<td width="10%" bgcolor="#E6EAEC"></td>					<td width="10%" bgcolor="#EDEEF1"></td> 					<td width="10%" bgcolor="#F4F5F7">Veltens stamboom</td>					<td width="10%" bgcolor="#F4F5F7">nummereringslogica</td> 					<td width="10%" bgcolor="#EDEEF1"></td>					<td width="30%" bgcolor="#EDEEF1"></td>				</tr>			</table>			<table width="100%" border="0" cellspacing="1" cellpadding="0" rowspan="3">				<tr>					<td colspan="0" width="100%" height="35px" align="left" >					</td>				</tr>			</table>			<form name="input" action="<?php echo $path; ?>/PersoonWijzigen/PW3.php" method="post">			<input type="hidden" name="persoonkeuzeDoorgeven" value="<?php echo $_POST["persoonkeuze"]; ?>"/>			<table width="100%" border="0" cellspacing="1" cellpadding="0" rowspan="3">				<tr>					<td colspan="0" width="20%" align="right" >								<B>Huidige gegevens :</B> (*) Geslacht :</p>					</td>					<td colspan="0" width="5%" align="left" >						<p><input type="text" name="geslacht" value="<?php echo $geslacht; ?>"/></p>					</td>					<td colspan="0" width="50%" align="center" valign="center">						<p><H3> <?php echo $voornaam; ?> <?php echo $tweedenaam; ?> <?php echo $derdenaam; ?> <?php echo $voorvoegsel_achternaam; ?> <?php echo $achternaam; ?> - <?php echo $voorvoegsel_meisjesnaam; ?> <?php echo $meisjesnaam; ?></H3></p>						<p>partner van :</p>								<p><H3> <?php echo $voornaamPartner; ?> <?php echo $tweedenaamPartner; ?> <?php echo $derdenaamPartner; ?> <?php echo $voorvoegsel_achternaamPartner; ?> <?php echo $achternaamPartner; ?> - <?php echo $voorvoegsel_meisjesnaamPartner; ?> <?php echo $meisjesnaamPartner; ?></H3></p>					</td>				</tr>				<tr>					<td align="right" >						<p>(*) Voornaam :</p>					</td>					<td align="left" >						<input type="text" name="voornaam" value="<?php echo $voornaam; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Tweede naam :</p>					</td>					<td align="left" >						<input type="text" name="tweedenaam" value="<?php echo $tweedenaam; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Derde naam :</p>					</td>					<td align="left" >						<input type="text" name="derdenaam" value="<?php echo $derdenaam; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Voorvoegsel achternaam :</p>					</td>					<td align="left" >					<input type="text" name="voorvoegsel_achternaam" value="<?php echo $voorvoegsel_achternaam; ?>"/>						</td>				</tr>				<tr>					<td align="right" >						<p>(*1) Achternaam :</p>					</td>					<td align="left" >						<input type="text" name="achternaam" value="<?php echo $achternaam; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Voorvoegsel meisjesnaam :</p>					</td>					<td align="left" >						<input type="text" name="voorvoegsel_meisjesnaam" value="<?php echo $voorvoegsel_meisjesnaam; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>(*1) Meisjesnaam :</p>					</td>					<td align="left" >						<input type="text" name="meisjesnaam" value="<?php echo $meisjesnaam; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Geboortedatum :</p>					</td>					<td align="left" >						<input type="text" name="geboortedatum" value="<?php echo $geboortedatum; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Doopdatum :</p>					</td>					<td align="left" >						<input type="text" name="doopdatum" value="<?php echo $doopdatum; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Geboorteplaats :</p>					</td>					<td align="left" >						<input type="text" name="geboorteplaats" value="<?php echo $geboorteplaats; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Doopplaats :</p>					</td>					<td align="left" >						<input type="text" name="doopplaats" value="<?php echo $doopplaats; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Sterfdatum :</p>					</td>					<td align="left" >						<input type="text" name="sterfdatum" value="<?php echo $sterfdatum; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Sterfplaats :</p>					</td>					<td align="left" >						<input type="text" name="sterfplaats" value="<?php echo $sterfplaats; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Beroep 1 :</p>					</td>					<td align="left" >						<input type="text" name="beroep1" value="<?php echo $beroep1; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Beroep 2 :</p>					</td>					<td align="left" >						<input type="text" name="beroep2" value="<?php echo $beroep2; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Beroep 3 :</p>					</td>					<td align="left" >						<input type="text" name="beroep3" value="<?php echo $beroep3; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Opmerking 1 :</p>					</td>					<td align="left" >						<input type="text" name="opmerking1" value="<?php echo $opmerking1; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Opmerking 2 :</p>					</td>					<td align="left" >						<input type="text" name="opmerking2" value="<?php echo $opmerking2; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Documentatie 1 :</p>					</td>					<td align="left" >						<input type="text" name="documentatie2" value="<?php echo $documentatie1; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Documentatie 2 :</p>					</td>					<td align="left" >						<input type="text" name="documentatie2" value="<?php echo $documentatie2; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Foto 1 :</p>					</td>					<td align="left" >						<input type="text" name="foto1" value="<?php echo $foto1; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Partner 1 :</p>					</td>					<td align="left" >						<input type="text" name="partner1" value="<?php echo $partner1; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Huwelijksdatum 1 :</p>					</td>					<td align="left" >						<input type="text" name="huwlijksdatum1" value="<?php echo $huwlijksdatum1; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Partner 2 :</p>					</td>					<td align="left" >						<input type="text" name="partner2" value="<?php echo $partner2; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Huwelijksdatum 2 :</p>					</td>					<td align="left" >						<input type="text" name="huwlijksdatum2" value="<?php echo $huwlijksdatum2; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Partner 3 :</p>					</td>					<td align="left" >						<input type="text" name="partner3" value="<?php echo $partner3; ?>"/>					</td>				</tr>				<tr>					<td align="right" >						<p>Huwelijksdatum 3 :</p>					</td>					<td align="left" >						<input type="text" name="huwlijksdatum3" value="<?php echo $huwlijksdatum3; ?>"/>					</td>					<td align="left" >						<input type="submit" name="Wijzigen" value="wijzigen" /><br/>					</td>					<td align="left" width="5%" >											</td>				</tr>				<tr>					<td align="right" >					</td>				</tr>				<tr>					<td >						 <?php						// echo '<pre>';						// echo '<br/>';						// print_r($_POST);						// echo '</pre>'; ?>					</td>				</tr>			</table>			</form>		</div>	</div>	<div id="footer_container" >		<a href="<?php echo $path; ?>/stamboom.php">terug</a>	</div></div></body> </html> 