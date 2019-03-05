<?php



$dictionary = array("goa","gmail","goal","big");

$characters = array("b","g","i");

$dictionary_length = count($dictionary);
$characters_length = count($characters);

$reader = 0 ;


echo "Length of Dictionary ". $dictionary_length. "<br>";





            for($i=0; $i<=$dictionary_length-1; $i++ ){
                $count_tracker = 0;
                    for($j = 0; $j <= strlen($dictionary[$i])-1; $j++){                            
                            foreach($characters as $ch){
                                if( $ch == $dictionary[$i][$j] ){
                                    $count_tracker++;
                                    
                                }                                
                            }
                           

                    }
                    echo "<br>".$count_tracker;

                    

                    if( $count_tracker == strlen($dictionary[$i]) ){
                        echo "<br>" . $dictionary[$i];
                        break;
                    }


                    
            }


    






















?>