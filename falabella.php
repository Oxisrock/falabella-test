<?php
class falabella
{
    //
    public function countDown(){
        $limit = 100;
        for ($i=1; $i <= $limit; $i++) {
            switch ($i) {
                case (($i%3) == 0) :
                    echo "Falabella <br>";
                    break;
                case (($i%5) == 0) :
                    echo "IT <br>";
                    break;
                default:
                    break;
            }
            if(($i%3)== 0 && ($i%5)== 0) {
                echo "Integraciones <br>";
            }
        }
    }
}

$falabella = new falabella();

$falabella->countDown();
