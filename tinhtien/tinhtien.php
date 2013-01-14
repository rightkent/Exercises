<?php
	if (isset($_POST["submit"])){
	if (isset($_POST["giobd"]) && isset($_POST["giokt"]))
	{
		$giobd = $_POST["giobd"];
		$giokt = $_POST["giokt"];
		if (   $giobd > 24         || $giobd < 0 
			|| $giokt > 24         || $giokt < 0 
			|| !is_numeric($giobd) || !is_numeric($giokt) 
			|| $giobd > $giokt     || $giobd == $giokt)
			echo "Nhap sai! Hay nhap lai";
		else if ($giokt <= 17)
			$tinhtien = ($giokt - $giobd)*20000;
		else if ($giobd >= 17)
			$tinhtien = ($giokt - $giobd)*45000;
		else 
			$tinhtien = (17-$giobd)*20000 + ($giokt - 17)*45000 ;
	}
}

?>
