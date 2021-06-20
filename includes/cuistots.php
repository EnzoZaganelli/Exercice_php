<?php 

    $cuistot1 = ["cuistot 1", "nombre de recette : 29", "membre depuis : 2018", "images/cuistot1.jpeg", "ing elit. Morbi metus nunc, malesua vel eu urna. Phasellus maximus lacinia", "note moyenne : 4,5 / 5" ];
    $cuistot2 = ["cuistot 2", "nombre de recette : 29", "membre depuis : 2018", "images/cuistot2.jpeg", "ing elit. Morbi metus nunc, malesua vel eu urna. Phasellus maximus lacinia", "note moyenne : 4,5 / 5" ];
    $cuistot3 = ["cuistot 3", "nombre de recette : 29", "membre depuis : 2018", "images/cuistot3.jpeg", "ing elit. Morbi metus nunc, malesua vel eu urna. Phasellus maximus lacinia", "note moyenne : 4,5 / 5" ];
    

    $array_cuistot = array($cuistot1, $cuistot2, $cuistot3);


?>


<section id="new-recipe">

        <h1>top cuistots</h1>

        
    
       <?php


            for($i=0; $i < count($array_cuistot); $i++){
                create_cuistot($array_cuistot[$i]);
            }  
        ?>

        

        </section>





