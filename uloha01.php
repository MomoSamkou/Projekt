<?php

require_once "connect.php";

$servername = "localhost";
$username = "userdb";
$password = "databaza";
$dbname = "northwindmysql";


$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrola pripojenia
if ($conn->connect_error) {
    die("Pripojenie zlyhalo: " . $conn->connect_error);
}


$zakaznici_sql = "SELECT * FROM Zakaznici";
$zakaznici_result = $conn->query($zakaznici_sql);


$objednavky_sql = "SELECT * FROM Objednavky";
$objednavky_result = $conn->query($objednavky_sql);


$dodavatelia_sql = "SELECT * FROM Dodavatelia";
$dodavatelia_result = $conn->query($dodavatelia_sql);

?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>požiadavka 01</title>
</head>
<body>
    <h1>požiadavka 01</h1>

    <h2>Zákazníci</h2>
    <?php
    if ($zakaznici_result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>";
        while ($fieldinfo = $zakaznici_result->fetch_field()) {
            echo "<th>{$fieldinfo->name}</th>";
        }
        echo "</tr>";
        while($row = $zakaznici_result->fetch_assoc()) {
            echo "<tr>";
            foreach($row as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 výsledkov";
    }
    ?>

    <h2>Objednávky</h2>
    <?php
    if ($objednavky_result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>";
        while ($fieldinfo = $objednavky_result->fetch_field()) {
            echo "<th>{$fieldinfo->name}</th>";
        }
        echo "</tr>";
        while($row = $objednavky_result->fetch_assoc()) {
            echo "<tr>";
            foreach($row as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 výsledkov";
    }
    ?>

    <h2>Dodávatelia</h2>
    <?php
    if ($dodavatelia_result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>";
        while ($fieldinfo = $dodavatelia_result->fetch_field()) {
            echo "<th>{$fieldinfo->name}</th>";
        }
        echo "</tr>";
        while($row = $dodavatelia_result->fetch_assoc()) {
            echo "<tr>";
            foreach($row as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 výsledkov";
    }
    ?>

</body>
</html>

<?php
$conn->close();
?>


<?php

$zakaznici_sql = "SELECT * FROM Zakaznici ORDER BY krajina, nazov";
$zakaznici_result = $conn->query($zakaznici_sql);

?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>požiadavka 02</title>
</head>
<body>
    <h1>požiadavka 02</h1>

    <h2>Zákazníci</h2>
    <?php
    if ($zakaznici_result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>";
        while ($fieldinfo = $zakaznici_result->fetch_field()) {
            echo "<th>{$fieldinfo->name}</th>";
        }
        echo "</tr>";
        while($row = $zakaznici_result->fetch_assoc()) {
            echo "<tr>";
            foreach($row as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 výsledkov";
    }
    ?>

</body>
</html>

<?php
$conn->close();
?>