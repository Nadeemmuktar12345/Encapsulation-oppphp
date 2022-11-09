
           
<!DOCTYPE html>
<html>
<head>
	<title>firstcode</title>
</head>
<body>
	<?php
    class Tv{
    	protected $model;
    	protected $volume;
             function volumeup(){
    		$this->volume++;
    	}
    	function volumedown(){
    		$this->volume--;
    	}
        protected function getmodel(){
            return $this->volume;

        }
    	function __Construct($v,$m){
           $this->model=$m;
           $this->volume=$v;
    	}
 }
 class PlazmaTv extends Tv{

     function getmodel(){
         return $this->volume;
    }
 }
 
 $tv=new PlazmaTv (5,'ref');
 echo $tv->getmodel();

?></body>
</html>
