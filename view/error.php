<?php $title = 'home'; ?>

<?php ob_start(); ?>

<div id="error">
    <h2><?= strtoupper($error) ?></h2>
    <a href="?action=home">Retour</a>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('./view/template.php'); ?>