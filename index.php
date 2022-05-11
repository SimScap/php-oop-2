<?php
/**
 **
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
 */

include_once __DIR__ . "/data/User.php";
include_once __DIR__ . "/data/Registered.php";
include_once __DIR__ . "/data/Card.php";
include_once __DIR__ . "/data/Product.php";

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
    <?php 
$prod1 = new Product("crocchette per cani", "animali", 25);
$prod2 = new Product("lettiera per gatti", "animali", 12);
$prod3 = new Product("mix per pappagalli", "animali", 8);
$prod4 = new Product("guinzaglio per cani taglia media", "Accessori", 40);
$products = array($prod1, $prod2, $prod3, $prod4);
var_dump($products);
$card1 = new CreditCard('1234123412341234', 2023, '123');
    var_dump($card1); 
$card2 = new CreditCard('1234567812345678', 2024, '456');
    var_dump($card2); 
$card3 = new CreditCard('1212121212121212', 2025, '789');
    var_dump($card3); 
$card4 = new CreditCard('1111111122222222', 2032, '987');
$cards = array($card1, $card2, $card3, $card4);
    var_dump($cards);
$user1 = new User("Ugo", "De Ughi");
$user1->getCreditCard($card1);
$user1->addProduct($prod1);
    var_dump($user1); 
$user2 = new User("Franco", "Rossi");
$user2->dateOfBirth = "10/08/1982";
$user2->address = "Via Rossi 1, Milano";
$user2->getCreditCard($card2);
$user2->addProduct($prod2);
    var_dump($user2); 
$users = array($user1, $user2);

$registeredUser1 = new Registered('Giuseppe', 'Verdi', 'true');
$registeredUser1->dateOfBirth = "10/08/1987";
$registeredUser1->address = "Via Verdi 1, Torino";
$registeredUser1->getCreditCard($card3);
$registeredUser1->addProduct($prod3);
$registeredUser1->setDiscount();
$registeredUser2 = new Registered("Alessia", "Bianchi", 'false');
$registeredUser2->addProduct($prod4);
$registeredUser2->setDiscount();
$registeredUsers = array($registeredUser1, $registeredUser2);
    var_dump($registeredUsers);
    ?>
</body>
</html>