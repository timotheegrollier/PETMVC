<?php require('./config/connect.php');

function postMessage()
{
    $bdd = connect();
    $req = $bdd->prepare('INSERT INTO message(message) VALUES(:message)');
    return $req;
}

function getMessages()
{
    $bdd = connect();
    return $bdd->query('SELECT * FROM message');
}

function deleteMessage($id)
{
    $bdd = connect();
    return $bdd->query("DELETE FROM message WHERE id=$id");
}

function createBut()
{
    $bdd = connect();
    $req = $bdd->prepare('INSERT INTO but(but) VALUES(:but)');
    return $req;
}

function getButs()
{
    $bdd = connect();
    return $bdd->query('SELECT but FROM but');
}