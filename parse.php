<?php
	
	function readconf($cfg)
	{
		$var = '';
		$file = fopen($cfg, "r");
		while(!feof($file))
		{
			$line = fgets($file);
			if(!preg_match("/(^#|^\s*$)/", $line))
			{
				$parts = explode('=', $line);
				foreach ($parts as &$val)
				{
					$val = trim($val);
				}
				unset($val);
				if(is_numeric($parts[1]))
				{
					$var[$parts[0]] = $parts[1] + 0;
				}
				else if(strcmp(strtolower($parts[1]),"yes") == 0 || strcmp(strtolower($parts[1]),"true") == 0 || strcmp(strtolower($parts[1]),"on") == 0)
				{
					$var[$parts[0]] = true ;
				}
				else if(strcmp(strtolower($parts[1]),"no") == 0 || strcmp(strtolower($parts[1]),"false") == 0 || strcmp(strtolower($parts[1]),"off") == 0)
				{
					$var[$parts[0]] = false ;
				}
				else
				{
					$var[$parts[0]] = $parts[1];
				}
			}
			unset($line);
		}
		fclose($file);
		return $var;
	}
	
?>