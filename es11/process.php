<?php


echo "<h1>Tavola Pitagorica</h1>";
echo "<table border = 1>";


for ($i = 1; $i <= 10; $i++) {
    echo "<tr>
    <td>

    $i

    </td>";

    for ($r = 2; $r <= 10; $r++) {
        $risultato = $i * $r;
        echo "<td> $risultato </td>";
    }

    echo "</tr>";
}
echo "</table>";
