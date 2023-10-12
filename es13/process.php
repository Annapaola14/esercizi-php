<?php


$numeroCasuale = rand(0, 5);

switch ($numeroCasuale) {

    case 0:

        echo "<img src='https://images.pexels.com/photos/6033664/pexels-photo-6033664.jpeg?auto=compress&cs=tinysrgb&w=1600' alt='prima immagine dio'> ";
        break;

    case 1:

        echo "<img src='https://images.pexels.com/photos/3361714/pexels-photo-3361714.jpeg?auto=compress&cs=tinysrgb&w=1600' alt='prima immagine dio'> ";
        break;
    case 2:

        echo "<img src='https://images.pexels.com/photos/2679501/pexels-photo-2679501.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1600' alt='prima immagine dio'> ";
        break;

    case 3:

        echo "<img src='https://images.pexels.com/photos/1629216/pexels-photo-1629216.jpeg?auto=compress&cs=tinysrgb&w=1600' alt='prima immagine dio'> ";
        break;

    case 4:

        echo "<img src='https://images.pexels.com/photos/1894346/pexels-photo-1894346.jpeg?auto=compress&cs=tinysrgb&w=400' alt='prima immagine dio'> ";
        break;

    case 5:

        echo "<img src='https://images.pexels.com/photos/1312067/pexels-photo-1312067.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1' alt='prima immagine dio'> ";
        break;

    default:
        echo "no immagine";
        break;
}


?>