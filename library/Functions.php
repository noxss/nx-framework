<?php

//Here your useful functions..

function cut($str,$chars)
{
	if(strlen($str)>$chars)
	{
		$str = substr($str,0,strrpos(substr($str,0,$chars)," "))."..";
	}
	
	return $str;
}

function parseString($str, $in = "UTF-8", $out = "windows-1252")
{
	return iconv($in, $out, $str);
}

?>