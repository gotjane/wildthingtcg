<?php session_start();

		$date=date("M j, Y");

		$thefile = "$authRow[name].txt"; 
		fwrite($openedfile, $towrite);
