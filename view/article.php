<?php $title = 'PETMV | ' . $article[0]['name']; ?>
<?php ob_start(); ?>

<div class="articlePage">
    <div class="article">
        <div class="articleHeader">
            <h1><?= $article[0]['name'] ?></h1>
        </div>
        <p><?= $article[0]['content'] ?></p>
    </div>

</div>


<?php $content = ob_get_clean(); ?>

<?php require('./view/template.php'); ?>