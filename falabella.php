<?php
class falabella
{
    //
    public function render(){
        $limit = 100;
        $string = [];
        for ($i=1; $i <= $limit; $i++) {
            switch ($i) {
                case (($i%3) == 0) :
                    $string[] = "Falabella";
                    break;
                case (($i%5) == 0) :
                    $string[] = "IT";
                    break;
                default:
                    break;
            }
            if(($i%3)== 0 && ($i%5)== 0) {
                $string[] = "Integraciones";
            }
        }
        return $string;
    }
}
