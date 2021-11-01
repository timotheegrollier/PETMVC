<?php require('./config/connect.php');

function postArticle()
{
    $bdd = connect();
    $req = $bdd->prepare('INSERT INTO articles(name,content) VALUES(:name,:content)');
    return $req;
}

function getArticles()
{
    $bdd = connect();
    return $bdd->query('SELECT id,name FROM articles');
}

function getArticle($articleId)
{
    $bdd = connect();
    return $bdd->query('SELECT * from articles WHERE id =' . $articleId);
}

function deleteList($id)
{
    $bdd = connect();
    return $bdd->query("DELETE FROM but WHERE id=$id");
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
    return $bdd->query('SELECT * FROM but');
}