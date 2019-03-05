<?php



$dictionary = array("bestest","Volvo", "BMW", "Toyota");

$characters = array("b","e","s","t");

$dictionary_length = count($dictionary);
$characters_length = count($characters);

$reader = 0 ;
$count_tracker = 0;


    for($i = 0;  $i <= $dictionary_length; $i++ ){

        foreach($characters as $ch){

            $dic_val = $dictionary[$i];             
            
            while( $reader != strlen($dic_val) ){

                for($j=0;  $j <=strlen($dic_val); $j++){

                    if($ch == $dictionary[$i]    ){

                        $count_tracker++;                                

                    }
                
            }
                
            }
        }
    
    }

print($count_tracker);




















?>