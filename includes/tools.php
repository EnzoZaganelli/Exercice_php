<?php

function create_menu($current){

$accueil = "index.php";
$label_1 = "accueil";

$contact = "contact.php";
$label_2 = "contact";

$cgu = "cgu.php";
$label_3 = "cgu";


if($current == 'home'){
    echo '<nav>
            <ul>
                <li><a class="current" href="'.$accueil.'" title="accueil">'.$label_1.'</a></li>
                <li><a href="'.$contact.'" title="accueil">'.$label_2.'</a></li>
                <li><a href="'.$cgu.'" title="accueil">'.$label_3.'</a></li>
            </ul>
        </nav>';
}
elseif ($current == 'contact'){
    echo '<nav>
            <ul>
                <li><a href="'.$accueil.'" title="accueil">'.$label_1.'</a></li>
                <li><a class="current" href="'.$contact.'" title="accueil">'.$label_2.'</a></li>
                <li><a href="'.$cgu.'" title="accueil">'.$label_3.'</a></li>
            </ul>
        </nav>';

}else{
    echo '<nav>
            <ul>
                <li><a href="'.$accueil.'" title="accueil">'.$label_1.'</a></li>
                <li><a href="'.$contact.'" title="accueil">'.$label_2.'</a></li>
                <li><a class="current" href="'.$cgu.'" title="accueil">'.$label_3.'</a></li>
            </ul>
        </nav>';
}
}


function create_cuistot($cuistot){

    echo '<div class="wrapper_recipe">
            <h2>'.$cuistot[0].'</h2>
            <span>'.$cuistot[1].'</span><br>
            <span>'.$cuistot[2].'</span>
            <img src="'.$cuistot[3].'" alt="" />
            <p class="synopsis">'.$cuistot[4].'</p>
            <p>'.$cuistot[5].'</p>
        </div>';
    }

?>