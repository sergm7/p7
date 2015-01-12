<?php
	
	spl_autoload_register(null, false);
	spl_autoload_register('KAutoloader::Sysloader');
	
	class KAutoloader{
		static function SysLoader($class){
			$Filename = strtolower($class) . '.php';
			$file =ROOT.'system/' .DS. $filename;
			
			if (!file_exists($file)){
				return false;
			}
			include $file;
		}
		
	static function ContLoader($class){
			$Filename = strtolower($class) . '.php';
			$file =ROOT.'appplication'.DS.'controllers'.DS.$Filename;
			
			if (!file_exists($file)){
				return false;
			}
			include $file;
		}
		static function ModLoader($class){
			$Filename = strtolower($class) . '.php';
			$file =ROOT.'appplication'.DS.'models'.DS.$Filename;
			
			if (!file_exists($file)){
				return false;
			}
			include $file;
		}
		static function ViewsLoader($class){
			$Filename = strtolower($class) . '.php';
			$file =ROOT.'application'.DS.'views' .DS. $Filename;
			
			if (!file_exists($file)){
				return false;
			}
			include $file;
		}
		
	}

	class Coder{

		static function code($var){
			echo '<pre>'.$var.'</pre>';
		}

		static function code_var($var){
			echo '<pre>'.var_dump($var).'</pre>';
		}

	}
