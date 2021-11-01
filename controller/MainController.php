<?php
require('./model/model.php');
function index()
{
    $articles = getArticles()->fetchAll(PDO::FETCH_ASSOC);
    require('./view/home.php');
}


function post()
{
    if (!empty($_POST['name'])) {
        $articleName = $_POST['name'];
        $articleContent = $_POST['content'];
        $req = postArticle();
        $req->execute(array("name" => $articleName, "content" => $articleContent));
        header('location: ?action=home');
    } else {
        $error = "message vide";
        require('./view/error.php');
    }
}

function deleteBut()
{
    if (!empty($_GET['id'])) {
        deleteList($_GET['id']);
        header('location:?action=about');
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
        header('location:?action=about');
    } else {
        $error = "Veuillez entrez un But";
        header("Refresh:1");
    }
}


function showArticle()
{
    $articleId = $_GET['id'];
    $article = getArticle($articleId)->fetchAll(PDO::FETCH_ASSOC);
    require('./view/article.php');
}