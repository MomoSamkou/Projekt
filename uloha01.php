<?php
require_once "connect.php";
//.
$sql_customers = "SELECT * FROM customers";
$sql_orders = "SELECT * FROM orders";
$sql_suppliers = "SELECT * FROM suppliers";

<<<<<<< HEAD
$result_customers = $connection->query($sql_customers);
$result_orders = $connection->query($sql_orders);
$result_suppliers = $connection->query($sql_suppliers);
=======
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

>>>>>>> a9e04f30ee0b261e7e4c79c3ee029aa016f282a8
?>

<!DOCTYPE html>
<html>
<head>
    <title>Database Output</title>
</head>
<body>
    <h1>požiadavka 01</h1>
    <h2>Customers</h2>
    <table border="1">
        <tr>
            <th>CustomerID</th>
            <th>CompanyName</th>
            <th>ContactName</th>
            <th>ContactTitle</th>
            <th>Address</th>
            <th>City</th>
            <th>Region</th>
            <th>PostalCode</th>
            <th>Country</th>
            <th>Phone</th>
            <th>Fax</th>
        </tr>
        <?php
        if ($result_customers->num_rows > 0) {
            while ($row = $result_customers->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['CustomerID']}</td>
                        <td>{$row['CompanyName']}</td>
                        <td>{$row['ContactName']}</td>
                        <td>{$row['ContactTitle']}</td>
                        <td>{$row['Address']}</td>
                        <td>{$row['City']}</td>
                        <td>{$row['Region']}</td>
                        <td>{$row['PostalCode']}</td>
                        <td>{$row['Country']}</td>
                        <td>{$row['Phone']}</td>
                        <td>{$row['Fax']}</td>
                      </tr>";
            }
        }
        ?>
    </table>

    <h2>Orders</h2>
    <table border="1">
        <tr>
            <th>OrderID</th>
            <th>CustomerID</th>
            <th>EmployeeID</th>
            <th>OrderDate</th>
            <th>RequiredDate</th>
            <th>ShippedDate</th>
            <th>ShipVia</th>
            <th>Freight</th>
            <th>ShipName</th>
            <th>ShipAddress</th>
            <th>ShipCity</th>
            <th>ShipRegion</th>
            <th>ShipPostalCode</th>
            <th>ShipCountry</th>
        </tr>
        <?php
        if ($result_orders->num_rows > 0) {
            while ($row = $result_orders->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['OrderID']}</td>
                        <td>{$row['CustomerID']}</td>
                        <td>{$row['EmployeeID']}</td>
                        <td>{$row['OrderDate']}</td>
                        <td>{$row['RequiredDate']}</td>
                        <td>{$row['ShippedDate']}</td>
                        <td>{$row['ShipVia']}</td>
                        <td>{$row['Freight']}</td>
                        <td>{$row['ShipName']}</td>
                        <td>{$row['ShipAddress']}</td>
                        <td>{$row['ShipCity']}</td>
                        <td>{$row['ShipRegion']}</td>
                        <td>{$row['ShipPostalCode']}</td>
                        <td>{$row['ShipCountry']}</td>
                      </tr>";
            }
        }
        ?>
    </table>

    <h2>Suppliers</h2>
    <table border="1">
        <tr>
            <th>SupplierID</th>
            <th>CompanyName</th>
            <th>ContactName</th>
            <th>ContactTitle</th>
            <th>Address</th>
            <th>City</th>
            <th>Region</th>
            <th>PostalCode</th>
            <th>Country</th>
            <th>Phone</th>
            <th>Fax</th>
            <th>HomePage</th>
        </tr>
        <?php
        if ($result_suppliers->num_rows > 0) {
            while ($row = $result_suppliers->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['SupplierID']}</td>
                        <td>{$row['CompanyName']}</td>
                        <td>{$row['ContactName']}</td>
                        <td>{$row['ContactTitle']}</td>
                        <td>{$row['Address']}</td>
                        <td>{$row['City']}</td>
                        <td>{$row['Region']}</td>
                        <td>{$row['PostalCode']}</td>
                        <td>{$row['Country']}</td>
                        <td>{$row['Phone']}</td>
                        <td>{$row['Fax']}</td>
                        <td>{$row['HomePage']}</td>
                      </tr>";
            }
        }
        ?>
    </table>

<?php
$sql = "SELECT * FROM customers ORDER BY Country, CompanyName";
$result = $connection->query($sql);
?>
<<<<<<< HEAD
    <h1>požiadavka 02</h1>
    <table border="1">
        <tr>
            <th>CustomerID</th>
            <th>CompanyName</th>
            <th>ContactName</th>
            <th>ContactTitle</th>
            <th>Address</th>
            <th>City</th>
            <th>Region</th>
            <th>PostalCode</th>
            <th>Country</th>
            <th>Phone</th>
            <th>Fax</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['CustomerID']}</td>
                        <td>{$row['CompanyName']}</td>
                        <td>{$row['ContactName']}</td>
                        <td>{$row['ContactTitle']}</td>
                        <td>{$row['Address']}</td>
                        <td>{$row['City']}</td>
                        <td>{$row['Region']}</td>
                        <td>{$row['PostalCode']}</td>
                        <td>{$row['Country']}</td>
                        <td>{$row['Phone']}</td>
                        <td>{$row['Fax']}</td>
                      </tr>";
            }
        }
        ?>
    </table>

<?php
$sql = "SELECT * FROM orders ORDER BY OrderDate";
$result = $connection->query($sql);
?>
    <h1>požiadavka 03</h1>
    <table border="1">
        <tr>
            <th>OrderID</th>
            <th>CustomerID</th>
            <th>EmployeeID</th>
            <th>OrderDate</th>
            <th>RequiredDate</th>
            <th>ShippedDate</th>
            <th>ShipVia</th>
            <th>Freight</th>
            <th>ShipName</th>
            <th>ShipAddress</th>
            <th>ShipCity</th>
            <th>ShipRegion</th>
            <th>ShipPostalCode</th>
            <th>ShipCountry</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['OrderID']}</td>
                        <td>{$row['CustomerID']}</td>
                        <td>{$row['EmployeeID']}</td>
                        <td>{$row['OrderDate']}</td>
                        <td>{$row['RequiredDate']}</td>
                        <td>{$row['ShippedDate']}</td>
                        <td>{$row['ShipVia']}</td>
                        <td>{$row['Freight']}</td>
                        <td>{$row['ShipName']}</td>
                        <td>{$row['ShipAddress']}</td>
                        <td>{$row['ShipCity']}</td>
                        <td>{$row['ShipRegion']}</td>
                        <td>{$row['ShipPostalCode']}</td>
                        <td>{$row['ShipCountry']}</td>
                      </tr>";
            }
        }
        ?>
    </table>

<?php
$sql = "SELECT COUNT(*) as total_orders FROM orders WHERE YEAR(OrderDate) = 1997";
$result = $connection->query($sql);
$row = $result->fetch_assoc();
?>
    <h1>požiadavka 04</h1>
    <p>Total Orders in 1997: <?php echo $row['total_orders']; ?></p>

<?php
$sql = "SELECT ContactName FROM suppliers WHERE ContactTitle LIKE '%Manager%' ORDER BY ContactName";
$result = $connection->query($sql);
?>
    <h1>požiadavka 05</h1>
    <table border="1">
        <tr>
            <th>ContactName</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['ContactName']}</td>
                      </tr>";
            }
        }
        ?>
    </table>

<?php
$sql = "SELECT * FROM orders WHERE OrderDate = '1997-05-19'";
$result = $connection->query($sql);
?>
    <h1>požiadavka 06</h1>
    <table border="1">
        <tr>
            <th>OrderID</th>
            <th>CustomerID</th>
            <th>EmployeeID</th>
            <th>OrderDate</th>
            <th>RequiredDate</th>
            <th>ShippedDate</th>
            <th>ShipVia</th>
            <th>Freight</th>
            <th>ShipName</th>
            <th>ShipAddress</th>
            <th>ShipCity</th>
            <th>ShipRegion</th>
            <th>ShipPostalCode</th>
            <th>ShipCountry</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['OrderID']}</td>
                        <td>{$row['CustomerID']}</td>
                        <td>{$row['EmployeeID']}</td>
                        <td>{$row['OrderDate']}</td>
                        <td>{$row['RequiredDate']}</td>
                        <td>{$row['ShippedDate']}</td>
                        <td>{$row['ShipVia']}</td>
                        <td>{$row['Freight']}</td>
                        <td>{$row['ShipName']}</td>
                        <td>{$row['ShipAddress']}</td>
                        <td>{$row['ShipCity']}</td>
                        <td>{$row['ShipRegion']}</td>
                        <td>{$row['ShipPostalCode']}</td>
                        <td>{$row['ShipCountry']}</td>
                      </tr>";
            }
        }
        ?>
    </table>
</body>
</html>
=======


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

<?php
// uloha1.php

// Nastavenie časového pásma
date_default_timezone_set('Europe/Bratislava');

// Nastavenie pripojenia k databáze
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mojadatabaza";

// Vytvorenie pripojenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrola pripojenia
if ($conn->connect_error) {
    die("Pripojenie zlyhalo: " . $conn->connect_error);
}

// Získanie údajov z tabuľky Objednávky podľa dátumu
$objednavky_sql = "SELECT * FROM Objednavky ORDER BY datum";
$objednavky_result = $conn->query($objednavky_sql);

?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>požiadavka 03</title>
</head>
<body>
    <h1>požiadavka 03</h1>

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

</body>
</html>

<?php
$conn->close();
?>

>>>>>>> a9e04f30ee0b261e7e4c79c3ee029aa016f282a8
