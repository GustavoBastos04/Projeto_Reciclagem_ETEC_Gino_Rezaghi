<?php
require_once('./database-connection.php');

$materialPoints;

switch ($_POST['material']) {
    case "papelao_P":
        $materialPoints = 10;
        break;
    case "papelao_M":
        $materialPoints = 20;
        break;
    case "papelao_G":
        $materialPoints = 30;
        break;
    case "pet_P":
        $materialPoints = 15;
        break;
    case "pet_G":
        $materialPoints = 30;
        break;
    case "lata":
        $materialPoints = 50;
        break;
    case "oleo":
        $materialPoints = 70;
        break;
    case "papel_80_folhas":
        $materialPoints = 10;
        break;
    default:
        $materialPoints = 0;
}

$totalPoints = $materialPoints * (int)$_POST['quantity'];
$RMnumber = $_POST['RM'];

$sql = "UPDATE Sala SET pontuacaoTotal = pontuacaoTotal + '".$totalPoints."' WHERE serie = '".$_POST['grade']."';";
$sql2 = "INSERT INTO Alunos (RM, pontos) VALUES ($RMnumber, $totalPoints)";

if ($connection->multi_query($sql) === TRUE && $connection->multi_query($sql2) === TRUE) {
    echo '<a href="menu.php"><h1 class="w3-button w3-teal w3-display-middle">Pontuação salva com sucesso! </h1></a>';
} else {
    echo '<a href="./menu.php"><h1 class="w3-button w3-teal w3-display-middle">ERRO! </h1></a>';
}

$connection->close();
?>
