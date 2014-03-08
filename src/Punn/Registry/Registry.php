<?php

namespace Punn\Registry;

/**
 * Registry package for storing values based on keys
 *
 * @author Erik Omlid <erik@madfeller.com>
 * @version 1.0.0
 * @link https://github.com/punn/registry
 * @license http://opensource.org/licenses/mit-license.php MIT License
 */

class Registry
{
	private static $storage;

	public static function set($name, $val)
	{
		if(!is_array(self::$storage))
		{
			self::$storage = array();
		}

		self::$storage[$name] = $val;
	}

	public static function get($name)
	{
		return self::grabFromStorage($name);
	}

	protected static function grabFromStorage($name)
	{
		if(isset(self::$storage[$name]))
		{
			return self::$storage[$name];
		}

		return false;
	}
}