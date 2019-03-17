<?php

class Helper {
    private $intThree = 3;
    private $intFive = 5;
    private $intFifteen = 15;

    function findMultiples($n, $version)  
    {  
        for ($i = 1; $i <= $n; $i++)  
        {  
            $textToPrint = "";  
            
            switch($version)
            {
                case "switch":
                    $textToPrint = $this->getStringForNumber($i);
                    break;
                
                default:
                    $textToPrint = $this->getStringForNumberSingleIF($i);
                    break;
            }
            
            echo ($textToPrint). "<br />";  
        }  
    }  

    public function getStringForNumber($num)
    {
        Switch($num) {
            case $num%$this->intFifteen==0:
                $stringToPrint = $num . " - Kadeeans.";  
                break;
                
            case $num%$this->intThree==0:
                $stringToPrint = $num . " - Kadeaa."; 
                break;
            
            case $num%$this->intFive==0:
                $stringToPrint = $num . " - IT.";  
                break;

            default:
                $stringToPrint = $num;
        }

        return $stringToPrint;
    }

    public function getStringForNumberSingleIF($num)
    {
        $isMulipleOf3 = (0 === $num % 3);
        $isMulipleOf5 = (0 === $num % 5);

        if ($isMulipleOf3 && $isMulipleOf5) {  
            return $num . " - Kadeeans.";
        }
    
        Switch(true) {
            case $isMulipleOf3:
                $stringToPrint = $num . " - Kadeaa."; 
                break;
            
            case $isMulipleOf5:
                $stringToPrint = $num . " - IT.";  
                break;

            default:
                $stringToPrint = $num;
        }
    
        return $stringToPrint;
    }
}
?>