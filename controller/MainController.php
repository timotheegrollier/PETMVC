<?php
require('./model/model.php');
function index()
{
    $messages = getMessages()->fetchAll(PDO::FETCH_ASSOC);
    require('./view/home.php');
}


function post()
{
    if (!empty($_POST['message'])) {
        $message = $_POST['message'];
        $req = postMessage();
        $req->execute(array("message" => $message));
        header('location: ?action=home');
    } else {
        $error = "message vide";
        require('./view/error.php');
    }
}

function delete()
{
    if (!empty($_GET['id'])) {
        deleteMessage($_GET['id']);
        header('location:?action=home');
    } else {
        $error = "erreur de supression";
        require('./view/error.php');
    }
}


function about()
{
    $buts = getButs()->fetchAll(PDO::FETCH_ASSOC);
    require('./view/about.php');
}


function addBut()
{
    if (!empty($_POST['but'])) {
        $but = $_POST['but'];
        $req = createBut();
        $req->execute(["but" => $but]);
    }
}