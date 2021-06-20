<?php
include 'dbConnect.php';
$data = $pdo->query("SELECT * FROM `recettes` ORDER BY title")->fetchAll();
?>

<section id="new-recipe">

        <h1>new recettes</h1>

        <?php

foreach ($data as $item){
    if($item['author'] == 'Edson'){
    echo '<div class="edson">
            <h2>'.$item['title'].'</h2>
            <span>date de création : '.$item['date'].'</span><br>
            <span>durée : '.$item['time'].'min</span>
            <img src="images/'.$item['image'].'" alt="" />
            <p class="synopsis">'.$item['description'].'</p>
            <p>auteur de la recette : '.$item['author'].'</p>
        </div>';
	}
    else{
	echo '<div class="wrapper_recipe">
            <h2>'.$item['title'].'</h2>
            <span>date de création : '.$item['date'].'</span><br>
            <span>durée : '.$item['time'].'min</span>
            <img src="images/'.$item['image'].'" alt="" />
            <p class="synopsis">'.$item['description'].'</p>
            <p>auteur de la recette : '.$item['author'].'</p>
        </div>';
	}
}


    ?>

    </section>

    