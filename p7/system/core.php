<?php

	class  Core{
            static private $conf;
            
		static function init(){
		
			$conf=Config::getIns();

            Config::set('juego','rol'); 

            echo "<strong>Intruccion de datos</strong><br/>";

            if(Config::set('juego','rol') == true){
                  echo "Guardado<br/>";
            }else{
                  echo "Ya existe <br/>";

            }


            echo "<strong>Recuperacion de datos</strong><br/>";

            if(Config::get("juego") != null){

                  echo Config::get("juego");
            }else{

                  echo "Error 404";
            }
		}
	}
?>