<?php 
        
    function normalDice() {
        $sum = 0;
         for ($i = 0; $i<6;$i++) {
             $ranDice=rand(1,6);
              $sum+=$ranDice;
            switch ($ranDice) {
            case 1: 
                echo "<img src='images/dice/$ranDice.png' width='100px' height='100px'>";
                break;
            case 2: 
                echo "<img src='images/dice/$ranDice.png' width='100px' height='100px'>";
                break;
            case 3: 
                echo "<img src='images/dice/$ranDice.png' width='100px' height='100px'>";
                break;
            case 4: 
                echo "<img src='images/dice/$ranDice.png' width='100px' height='100px'>";
                break;
            case 5: 
                echo "<img src='images/dice/$ranDice.png' width='100px' height='100px'>";
                break;
            case 6: 
                echo "<img src='images/dice/$ranDice.png' width='100px' height='100px'>";
                break;
            }
            
        }
        
        if($sum==36) {
            echo 'Huzzah 6 sixes!!';
        }
        
    }    
    
    function HeadsTails() {
        // $sum = 0;
         for ($i = 0; $i<1;$i++) {
             $headTails=rand(1,2);
            //   $sum+=$ranDice;
            switch ($headTails) {
            case 1: 
                echo "<h2 id='headsTails'>Heads</h2>";
                echo "<img src='images/dice/$headTails.png' width='100px' height='100px'>";
                        
                break;
            case 2: 
                echo "<h2 id='headsTails'>Tails</h2>";
                echo "<img src='images/dice/$headTails.png' width='100px' height='100px'>";
                        $tails = 2;
                break;
            }
         }
    }
    
    
    function buildD4() {
        
        $d4 = array();
        
        for($i=1;$i<5;$i++) {
            
            array_push($d4,$i);
            
        }
        
        shuffle($d4);
        
        for($i=0;$i<count($d4);$i++) {
            echo "<h2>D4</h2>";
            echo "<img src='images/dndDice/d4.png' width='100px' height='100px'>";
            echo $d4[$i];
            break;
        }
    }
    
    function buildD6() {
        
        $d6 = array();
        
        for($i=1;$i<7;$i++) {
            
            array_push($d6,$i);
            
        }
        
        shuffle($d6);
        
        for($i=0;$i<count($d6);$i++) {
            echo "<h2>D6</h2>";
            echo "<img src='images/dndDice/d6.png' width='100px' height='100px'>";
            echo $d6[$i];
            break;
        }
    }
    
    function buildD8() {
        
        $d8 = array();
        
        for($i=1;$i<9;$i++) {
            
            array_push($d8,$i);
            
        }
        
        shuffle($d8);
        
        for($i=0;$i<count($d8);$i++) {
            echo "<h2>D8</h2>";
            echo "<img src='images/dndDice/d8.png' width='100px' height='100px'>";
            echo $d8[$i];
            break;
        }
    }
    
    function buildD10() {
        
        $d10 = array();
        
        for($i=1;$i<11;$i++) {
            
            array_push($d10,$i);
            
        }
        
        shuffle($d10);
        
        for($i=0;$i<count($d10);$i++) {
            echo "<h2>D10</h2>";
            echo "<img src='images/dndDice/d10.png' width='100px' height='100px'>";
            echo $d10[$i];
            break;
        }
    }
    
    function buildD12() {
        
        $d12 = array();
        
        for($i=1;$i<13;$i++) {
            
            array_push($d12,$i);
            
        }
        
        shuffle($d12);
        
        for($i=0;$i<count($d12);$i++) {
            echo "<h2>D12</h2>";
            echo "<img src='images/dndDice/d12.png' width='100px' height='100px'>";
            echo $d12[$i];
            break;
        }
    }
    
    function buildD20() {
        
        $d20 = array();
        
        for($i=1;$i<21;$i++) {
            
            array_push($d20,$i);
            
        }
        
        shuffle($d20);
        
        for($i=0;$i<count($d20);$i++) {
            echo "<h2>D20</h2>";
            echo "<img src='images/dndDice/d20.png' width='100px' height='100px'>";
            echo $d20[$i];
            break;
        }
    }
    
    function buildD100() {
        
        $d100 = array();
        
        for($i=1;$i<101;$i++) {
            
            array_push($d100,$i);
            
        }
        
        shuffle($d100);
        
        for($i=0;$i<count($d100);$i++) {
            echo "<h2>D100</h2>";
            echo "<img src='images/dndDice/d10.png' width='100px' height='100px'>";
            echo "<img src='images/dndDice/d100.png' width='100px' height='100px'>";
            echo $d100[$i];
            break;
        }
    }

?>