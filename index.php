<?php
require_once __DIR__ . '/Classi/user.php';
require_once __DIR__ . '/Classi/product.php';
require_once __DIR__ . '/Classi/creditcard.php';
require_once __DIR__ . '/Classi/user_prime.php';
require_once __DIR__ . '/Classi/product_prime.php';


$prodotto1 = new Product('Aciugacapelli', 50.00, 'asciuga i capelli');
$prodotto2 = new Product('Fermaporta', 10.99, 'trattiene la porta');
$prodotto3 = new Product('Borraccia', 20.50, 'contenitore per bevande');

$user1 = new User('Marco', 'Rossi', '30', 'marcorossi@gmail.com');
$user2 = new User('Dario', 'Bianchi', '50', 'dariobianchi@gmail.com');
$user3 = new User('Luigi', 'Verdi', '20', 'luigiverdi@gmail.com');

$user1_creditcard = new Creditcard('1234 5678 1234 5678', '000', '17061998', 'Mastercard');
$user2_creditcard = new Creditcard('0000 5678 1234 5678', '679', '10111962', 'Visa');
$user3_creditcard = new Creditcard('1234 5678 0000 5678', '888', '03052000', 'Mastercard');



var_dump($prodotto1);
echo '</br>'.'</br>';
var_dump($prodotto2);
echo '</br>'.'</br>';
var_dump($prodotto3);
echo '</br>'.'</br>';
echo '</br>'.'</br>';
echo '</br>'.'</br>';
var_dump($user1);
echo '</br>'.'</br>';
var_dump($user2);
echo '</br>'.'</br>';
var_dump($user3);
echo '</br>'.'</br>';
echo '</br>'.'</br>';
echo '</br>'.'</br>';
var_dump($user1_creditcard);
echo '</br>'.'</br>';
var_dump($user2_creditcard);
echo '</br>'.'</br>';
var_dump($user3_creditcard);
echo '</br>'.'</br>';




?>