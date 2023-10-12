<?php

$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$ragionesociale = $_POST["ragionesociale"];
$indirizzo = $_POST["indirizzo"];
$partitaIVA = $_POST["partitaIVA"];
$telefono = $_POST["telefono"];
$descrizione = $_POST["descrizione"];
$codice = $_POST["codice"];
$giacenza = $_POST["giacenza"];
$prezzounitario = $_POST["prezzounitario"];
$percentualeIVA = $_POST["percentualeIVA"];
$quantitaacquistata = $_POST["quantitaacquistata"];
$sconto = $_POST["sconto"];
$prezzosenzaIVA = $prezzounitario*$quantitaacquistata ;
$iva = ($prezzosenzaIVA*$percentualeIVA )/100;
$prezzoconIVA = $iva+$prezzosenzaIVA;   
$calcolosconto= ($prezzosenzaIVA*$sconto)/100;
$prezzosenzaIVA -= $sconto;
$prezzoconIVA -=($calcolosconto+(($calcolosconto+$percentualeIVA)/100));

echo "<h2>Dati Cliente</h2>";
echo "<p><strong>Nome:</strong> $nome</p>";
echo "<p><strong>Cognome:</strong> $cognome</p>";
echo "<p><strong>Ragione Sociale:</strong> $ragionesociale</p>";
echo "<p><strong>Indirizzo:</strong> $indirizzo</p>";
echo "<p><strong>Partita IVA:</strong> $partitaIVA</p>";
echo "<p><strong>Telefono:</strong> $telefono</p>";

echo "<h2>Dati Prodotto</h2>";
echo "<p><strong>Descrizione:</strong> $descrizione</p>";
echo "<p><strong>Codice:</strong> $codice</p>";
echo "<p><strong>Giacenza:</strong> $giacenza</p>";
echo "<p><strong>Prezzo Unitario:</strong> $prezzounitario</p>";
echo "<p><strong>Percentuale IVA:</strong> $percentualeIVA</p>";
echo "<p><strong>QuantitA Acquistata:</strong> $quantitaacquistata</p>";
echo "<p><strong>Sconto Applicato:</strong> $sconto</p>";

echo "<h2>Prezzo da Pagare</h2>";
echo "<p><strong>Prezzo Senza IVA:</strong> $prezzosenzaIVA</p>";
echo "<p><strong>IVA ($percentualeIVA%):</strong> $iva</p>";
echo "<p><strong>Prezzo Con IVA:</strong> $prezzoconIVA</p>";

?>
