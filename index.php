<?php
require('./controller/MainController.php');
// je  vérifie si j'ai une clef action dans mon $_GET['action']

if (isset($_GET['action'])) {
    if ($_GET['action'] == "home") {
        index();
    } elseif ($_GET['action'] == 'post') {
        post();
    } elseif ($_GET['action'] == 'deleteBut') {
        deleteBut();
    } elseif ($_GET['action'] == 'about') {
        about();
    } elseif ($_GET['action'] == 'addBut') {
        addBut();
    } elseif ($_GET['action'] == 'showArticle') {
        showArticle();
    }
} else {
    index();
}