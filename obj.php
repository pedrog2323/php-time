<?php
    class Car
    {
        //propriedades do objt e métodos//
        public $color = 'vermeio';
        public $numberoftires = '4 tires';
        public static $country = "canada";

        public function __construct($color)
        {
                $this->color = $color;
        }
        public function __destruct()
        {
            echo "<br>";
            echo "  O objeto esta sendo destruído";
        }
    
             public function setColor($val)  
        
        {
                $this->color  = $val;
        }
                public function getColor()
        {
                return $this->color;
        }
    }

    $bmw = new Car("white");
    //$bmw->setColor("black");

    echo $bmw->color;
    echo "<br>";
    echo $bmw->getColor();
   
    echo "<br>";

    $bmw->setColor("Black");

    echo $bmw->getColor();
    echo "<br>";
    echo Car::$country;
?>