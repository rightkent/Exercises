<?php
	if (isset($_POST["number"])){
		$num = $_POST["number"];
		$mangdonvi = array(" ", "một", "hai", "ba", "bốn", "năm", "sáu", "bảy", "tám", "chín", "mười")
		if($num< 0 || $num> 999)
			echo "nhap lai";
		else if($num<=10){
			$ketqua = $mangdonvi[$num];
		};
		else if ($num<100){
			$chuc = floor($num/10);
			$donvi = $num- $chuc*10;
			if($chuc==1)
				$ketqua = "mười".$mangdonvi[$donvi];
			else
				$ketqua = $mangdonvi[$chuc]."mươi".$mangdonvi[$donvi];
		};
		else if($num>100 && $num<1000){
			$tram = floor($num/100);
			$chuc = floor(($num-(floor($num/100))*100) /10);
			$donvi = $num - $tram*100 - $chuc*10;
			if($chuc==0)
			$ketqua = $mangdonvi[$tram]."trăm lẻ".$mangdonvi[$donvi];
			else $ketqua = $mangdonvi[$tram]."trăm".$mangdonvi[$chuc]."mươi".$mangdonvi[$donvi];
		
		}
	}
?>