<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=classicmodels','root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT `customerNumber`, `customerName`, `contactLastName`, `contactFirstName`, `phone`, `addressLine1`, `addressLine2`, `city`, `state`, `postalCode`, `country`, `salesRepEmployeeNumber`, `creditLimit` FROM `customers` WHERE `customerNumber`>100";
    $stmt =$conn->query($sql);
    $result = $stmt->fetchAll();
    echo '<table border="2">';
    foreach ($result as $key => $obj){
        echo "<tr>";
        echo "<td>";
            echo $obj['customerName'];
        echo "</td>";
        echo "<td>";
            echo $obj['phone'];
        echo "</td>";
        echo "<td>";
            echo $obj['city'];
        echo "</td>";
        echo "<td>";
            echo $obj['country'];
        echo "</td>";
    }
    echo '</table>';

}catch (PDOException $e){
    echo "false".$e->getMessage();
}

