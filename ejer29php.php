<head>
<title>Ejercicio 29</title>
</head>
<body bgcolor="#A9E2F3">
<?php
class Vector{
        
		public $vector = array();
		
		public function __construct(){
            
			$cont = 0;
			
			for ($i=0;$i<20;$i++){
                
				array_push($this->vector, rand(1,10));
				
				if($this->vector[$i] == 2)
                
					$cont++;
			}
			
			$this->Mostrar($cont);
		}
		
		public function Mostrar($x){
            
			echo ".A continuacion el numero 2 aparece: $x veces.";
		}
	}
	
	$objContador = new Vector();

?>
</body>
</html>