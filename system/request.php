<?php
    class Request{
	
        static private $parametro=array();
        static private $apregunta=array();
        static private $cont;
        static private $accion;
        static private $pregunta;
        
        static function retrieve(){	
            self::$apregunta =  explode('/',$_SERVER['REQUEST_URI']); 
            return self::$apregunta;    
        }
        static function getCount(){	
            $pregunta = count(self::$apregunta);
            if($pregunta == 2){
                echo "Controlador";
            }else{
               self::$cont = self::$apregunta[1];
               return self::$cont; 
            } 
        }

        static function getParams(){	
            $pregunta = count(self::$apregunta);
            $j2=0;
            if($pregunta >= 5){
                if($pregunta % 2 == 0){
    	            for($j=2;$j < $pregunta;$j++){ 
    	            	self::$parametro[$j2]= self::$apregunta[$j];
           				$j2++;  
    	            }
                    return self::$parametro;
            	}else{
            		echo "Los parametros introducidos son incorrectos";
            	}
            }else{
                echo "Correcto!!";
            }
        }

          static function getAction(){ 
            $pregunta = count(self::$apregunta);
            if($pregunta >= 4){
                self::$accion = self::$apregunta[3];
                return self::$accion; 
            }else{
                echo "Accion";
            }  
        }
    }
?>