<html>
 	<head>
  		<title>PHP Test</title>
 	</head>
 	<body>
 		<?php
 		date_default_timezone_set('Asia/Bangkok');
 		$days =array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");
 		$month =array(1=>"มกราคม","กุมภาพันธ์","มีนาคม","เมษา","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
 		$d =date('w');
 		$day = $days[$d];	
 		$date = date('j');
 		$m =date('n');
 		$month = $month[$m];
 		$year = date('Y') + 543;
 		echo " <br>วันนี้ตรงกับวัน$day วันที่ $date เดือน$month พ.ศ.$year<br>";
 		echo date("ขณะนี้เวลา H:i:s");
 		function datetime_ago($datetime_string){
 				date_default_timezone_set('Asia/Bangkok');
 				$ts = strtotime($datetime_string);
 				$now = strtotime('now');
 				if(!$ts || $ts > $now){ return false;}

 				$diff = $now - $ts;

 				$secound = 1;
 				$minuite = 60 * $secound;
 				$hour = 60 * $minuite;
 				$day = 24 * $hour;
 				$yesterday = 48 * $hour;
 				$month = 30 * $day;
 				$year = 365 * $day;
 				$ago = "";

 				if($diff >= $year){
 					$ago = round($diff/$year) . " ปีที่แล้ว";
 				}
 				else if($diff >= $month){
 					$ago = round($diff/$month) . " เดือนที่แล้ว";
 				}
 				else if ($diff > $yesterday) {
 					$ago = intval($diff/$day) . " วันที่แล้ว";
 				}
 				else if ($diff <= $yesterday) {
 					$ago = " เมื่อวานนี้";
 				}
 				else if ($diff >= $hour) {
 					$ago = intval($diff/$hour) . " ชั่วโมงที่แล้ว";
 				}
 				else if ($diff >= $minuite) {
 					$ago = intval($diff/$minuite) . " นาทีที่แล้ว";
 				}
 				else if ($diff >= 5*$secound){
 					$ago = intval($diff/$secound) . " วินาทีที่แล้ว";
 				}
 				else {
 					$ago = "เมื่อสักครู่";
 				}
 				return $ago;
 			}
 			$datetime_compare = "2014/07/20 12:00";
 			echo "วันเวลาปัจจุบัน : " .date('Y/m/d H:i'). "<br>";
 			echo "วันเวลาที่โพส : " .$datetime_compare. " " ;
 			echo "<span>" .datetime_ago($datetime_compare)."</span>";
 		?>
 			<p><a href="https://tpserver00001.000webhostapp.com/sol_temp.php?tempdata=&humidity=&submit=Temp">Click Here</a></p>
 	</body>
 	<footer>
 		
 	</footer>
</html>
