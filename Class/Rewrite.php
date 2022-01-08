<?php
/**
 * @desc Супер нужный и очень чоткий механизм решения всех проблем
 * @author RiP
 * @package WWGoodSite
 */
class Rewrite 
{
	public static $rewrite;
	public static function resolve ()
	{
		$config = IcEngine::getServiceLocator()->getService('configManager')->get (__CLASS__);
		
		if (!isset ($_SERVER ['REQUEST_URI']))
		{
			return;
		}

		$uri = ltrim ($_SERVER ['REQUEST_URI'], '/');
	
		foreach ($config as $pattern => $match_uri)
		{
			$matches = array ();
			preg_match_all ( 
				'#' . $pattern . '#',
				$uri,
				$matches
			);
			
			if (!empty ($matches [0][0]))
			{
				self::$rewrite = $pattern;
				$url = parse_url ($match_uri);
				if (!isset ($url ['query']))
				{
					$url ['query'] = '';
				}
				parse_str ($url ['query'], $query);
				$n = 1;
				foreach ($query as $var => $value)
				{
					$_GET [$var] = $value;
					$_REQUEST [$var] = $value;
					if (substr ($value, 0, 1) == '$')
					{
						if (isset ($matches [$n][0]))
						{
							$_GET [$var] = $matches [$n][0];
							$_REQUEST [$var] = $matches [$n][0];
							$n++;
						}
						else
						{
							unset ($_GET [$var]);
							unset ($_REQUEST [$var]);
						}
					}
					else
					{

					}
				}
				return;
			}
		}
	}
}
