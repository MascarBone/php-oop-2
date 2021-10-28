<?php 

require_once __DIR__ . '/shop.php';

$user1 = new User('user1','user1@mail.com');
var_dump($user1);

$card1 = new CreditCard(4444,123,'10/10/2022');
var_dump($card1);

$user1->setPayments($card1);
var_dump($user1);



$user2 = new User('user2','user2@mail.com');

$user2->setPayments(new CreditCard(5555,666,'not yet'));

$card2 = new CreditCard(3333,321,'10/09/2028');
$user2->setPayments($card2);
var_dump($user2);
var_dump($card2);



?>


