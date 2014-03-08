<?php namespace Punn\Registry\Facades;

use Illuminate\Support\Facades\Facade;

class Registry extends Facade
{
	protected static function getFacadeAccessor() { return 'registry'; }
}