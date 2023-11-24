<?php
	function LayHinhDauTien($strNoiDung)
	{
		$first_img = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $strNoiDung, $matches);
		if(empty($output))
			return 'images/noimage.png';
		else
			return $matches[1][0];
	}
	
	function DinhDangNgayGio($raw_date)
	{
		if(($raw_date == '0000-00-00 00:00:00') || empty($raw_date)) return false;
		
		$arr = explode(" ", $raw_date);
		$str_day = $arr[0];
		$str_time = $arr[1];
		
		$arr_day = explode("-", $str_day);
		$year	= (int)$arr_day[0];
		$month	= (int)$arr_day[1];
		$day	= (int)$arr_day[2];
		
		$arr_time = explode(":", $str_time);
		$hour	= (int)$arr_time[0];
		$minute	= (int)$arr_time[1];
		$second	= (int)$arr_time[2];
		
		if(@date('Y', mktime(0, 0, 0, $month, $day, $year)) == $year)
		{
			return date('d/m/Y H:i:s', mktime($hour, $minute, $second, $month, $day, $year));
		}
		else
		{
			return ereg_replace('2037' . '$', $year, date('d/m/Y H:i:s', mktime($hour, $minute, $second, $month, $day, 2037)));
		}
	}
?>