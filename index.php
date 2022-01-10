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
$user3 = new UserPrime('Luigi', 'Verdi', '20', 'luigiverdi@gmail.com', true);

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
echo '</br>'.'</br>';
echo '</br>'.'</br>';



echo '<p>Funzione per inserire la carta di credito :</p>';
echo '</br>'.'</br>';
$user1->insertCreditCard($user1_creditcard);
var_dump($user1);
echo '</br>'.'</br>';
echo '</br>'.'</br>';




echo '<p>Funzione per mostrare prezzo in base al privilegio :</p>';
echo '</br>'.'</br>';
$user3->setBonus();
echo '<p>Prezzo prodotto1 utente prime :</p>';
var_dump($prodotto1->applyBonus($user3->bonus));
echo '</br>'.'</br>';
$user2->setBonus();
echo '<p>Prezzo prodotto1 utente base :</p>';
var_dump($prodotto1->applyBonus($user2->bonus));







?>