<?php

$user = 'laurianep';
$pass = 'BUbJg8XAVj';

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=laurianep_portfolio', $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    catch(PDOException $e) {
        echo $e->getMessage();
    }

?>
