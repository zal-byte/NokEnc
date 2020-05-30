	<?php
		error_reporting(0);
		$text = "";
		if(isset($_POST["submit_decode"])){
			$val = $_POST["value"];
			$key = array("2"=>"A", "22"=>"B", "222"=>"C","3"=>"D","33"=>"E","333"=>"F"
	,"4"=>"G","44"=>"H","444"=>"I","5"=>"J","55"=>"K","555"=>"L","6"=>"M","66"=>"N","666"=>"O","7"=>"P","77"=>"Q","777"=>"R","7777"=>"S","8"=>"T","88"=>"U","888"=>"V","9"=>"W","99"=>"Y","999"=>"Y","9999"=>"Z","0"=>" ");

		$explods = explode(" ",$val);
	
		foreach($explods as $well){
			if(strlen($well) <= 0){
				continue;
			}
			$text .= $key[$well];
		}

		}
		if(isset($_POST["submit_encode"])){
			$val = $_POST["value"];
			$encode = array("A"=>"2","B"=>"22","C"=>"222","D"=>"3","E"=>"33","F"=>"333","G"=>"4","H"=>"44","I"=>"444","J"=>"5","K"=>"55","L"=>"555","M"=>"6","N"=>"66","O"=>"666","P"=>"7","Q"=>"77","R"=>"777","S"=>"7777","T"=>"8","U"=>"88","V"=>"888","W"=>"9","X"=>"99","Y"=>"999","Z"=>"9999"," "=>"0");
						$text = "";
			
			
			
						$exhaust = explode("=encode",$val);
						foreach($exhaust as $nitro){
							$upper = strtoupper($nitro);
							$split = str_split($upper);
							foreach($split as $bad){								$text .= $encode[$bad]." ";
							}
						}
		}
		?>
<!DOCTYPE html>
<html>
<head>
	<title>NokEnc</title>
</head>
<body>
<style type="text/css">
	body{width: 100%;
		height: 100%;}
</style>
<center>
	<form method="post" action="NokEnc.php">
		<input type="text" name="value" style="width: 500px; font-size: 20px;" />
		<br/>
		<input type="submit" name="submit_encode" value="Encode" style="margin-right: 50px;width: 100px; height: 50px;" /><input type="submit" name="submit_decode" value="Decode" style="margin-left: 50px; width: 100px; height: 50px;"/><br/>
		<input type="text" name="result" style="width: 500px;font-size: 20px; " value="<?php echo $text; ?>"/>
	
	</form>
</center>
</body>
</html>

