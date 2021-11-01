<?php $title = 'PETMV | Home'; ?>

<?php ob_start(); ?>
<div id="home">
    <div class="block">
        <h1>Petite app PHP MVC</h1>
    </div>

    <ul class="articles">
        <?php foreach ($articles as $article) {
        ?> <li><a href="?action=showArticle&id=<?= $article['id'] ?>"><?= $article['name'] ?>
            </a>
        </li>
        <?php
        }
        ?>
    </ul>
    <div class="new_article">
        <i class="fas fa-plus"></i>
        <p>Créer un article</p>
    </div>
    <form action="?action=post" method="POST" id="new_article_form">
        <input type="text" name="name" autocomplete="off">
        <textarea name="content" id="article_content" cols="30" rows="10"></textarea>
        <input type="submit" value="Envoyez">
    </form>
</div>






<?php $content = ob_get_clean(); ?>

<?php require('./view/template.php'); ?>