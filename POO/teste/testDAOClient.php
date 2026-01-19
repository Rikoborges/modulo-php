<?php
require_once 'DAOClient.php';

$dao = new DAOClient();
$clients = $dao->selectAll();

foreach ($clients as $c) {
    echo $c->getNom() . " " . $c->getPrenom() . "<br>";
}
