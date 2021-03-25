<?php

try {
    $db = new PDO("mysql:host=mysql;dbname=classicmodel;port=3306", "root", "root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
}

/* try {
    $search = $db->prepare("SELECT COUNT(*) FROM customers");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: '.$error->getMessage());
} */

/* try {
    $search = $db->prepare("SELECT * FROM customers WHERE contactFirstName='Mary' AND contactLastName='Young'");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: '.$error->getMessage());
} */

/* try {
    $search = $db->prepare("SELECT customerNumber FROM customers WHERE addressLine1='Magazinweg 7'");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: '.$error->getMessage());
} */

/* try {
    $search = $db->prepare("SELECT email FROM employees ORDER BY lastName");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
} */

/* try {
    $search = $db->prepare("SELECT productCode FROM products WHERE productLine='Trucks and Buses' ORDER BY productScale AND productName");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
} */

/* try {
    $search = $db->prepare("SELECT email, lastName FROM employees WHERE lastName LIKE 't%' ORDER BY lastName");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
} */

/* try {
    $search = $db->prepare("SELECT customerNumber FROM payments WHERE paymentDate='2004-01-19'  ");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
}
 */

/* try {
    $search = $db->prepare("SELECT count(*) FROM customers WHERE state='NV' OR state='NY' ");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
}
 */

/* try {
    $search = $db->prepare("SELECT count(*) FROM customers WHERE state='NV' OR state='NY' OR state IS NULL ");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
} */

/* try {
    $search = $db->prepare("SELECT count(*) FROM customers WHERE state='NV' OR state='NY' OR state IS NULL AND creditLimit>1000 ");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
} */

/* try {
    $search = $db->prepare("SELECT count(*) FROM customers WHERE salesRepEmployeeNumber IS NULL");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
} */

/* try {
    $search = $db->prepare("SELECT count(*) FROM orders WHERE comments IS NOT NULL");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
} */

/* try {
    $search = $db->prepare("SELECT count(*) FROM orders WHERE comments LIKE '%caution%'");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
} */

/* try {
    $search = $db->prepare("SELECT round(avg(creditLimit),0) FROM customers WHERE country='USA'");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
} */

/* try {
    $search = $db->prepare("SELECT max(ContactLastName) FROM customers");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
}
 */


/* try {
    $search = $db->prepare("SELECT DISTINCT status FROM orders");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
} */

/* try {
    $search = $db->prepare("SELECT DISTINCT country FROM customers");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
}
 */
/* try {
    $search = $db->prepare("SELECT count(status) FROM orders WHERE status != 'Shipped'");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
} */

/* try {
    $search = $db->prepare("SELECT customerNumber FROM customers INNER JOIN employees 
    WHERE employeeNumber=salesRepEmployeeNumber AND lastName='Patterson' AND firstName='Steve' AND creditLimit>100000");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
} */

/* try {
    $search = $db->prepare("SELECT count(*) FROM orders WHERE status='Shipped'");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
} */

/* try {
    $search = $db->prepare("SELECT count(productCode)/count(DISTINCT productLine) FROM products");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
} */

/* try {
    $search = $db->prepare("SELECT count(*) FROM products WHERE quantityInStock>100 AND quantityInStock<500");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
} */

try {
    $search = $db->prepare("SELECT count(*) FROM products WHERE quantityInStock>100 AND quantityInStock<500");
    $search->execute();
} catch (Exception $error) {
    die('Erreur: ' . $error->getMessage());
}

$display = $search->fetchAll(PDO::FETCH_ASSOC);

/* var_dump($display); */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Search Data from classicmodel:</h2>
    <ol>

        <?php
        foreach ($display as $key => $display) { ?>
            <li>
                <?php var_dump($display) ?>
            </li>
        <?php }; ?>


    </ol>
</body>

</html>