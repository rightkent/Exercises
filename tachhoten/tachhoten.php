<?php
	$hoten; $ho; $hodem; $tendem; $ten;

	if (isset($_POST['hoten']) && isset($_POST['tach'])  )
	{
		$sub_string = explode(" ", $hoten);
		$ho = $sub_string[0];
		$tendem = $sub_string[1];
		$ten = $sub_string[2];
	}
?>