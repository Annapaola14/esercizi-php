<?php


$numero = $_POST["numero"];

switch ($_POST["shift"]) {
    case 'shiftright':
        echo decbin($numero >> 1);
        break;

    case 'shiftleft':
        echo decbin($numero << 1);
        break;

    case 'not':
        echo decbin(~$numero);
        break;
    default:

        echo "numero non valido";
        break;
}

?>