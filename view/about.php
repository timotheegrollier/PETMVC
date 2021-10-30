<?php $title = 'home'; ?>

<?php ob_start(); ?>


<div id="about">
    <div class="block">
        <h1>About</h1>
    </div>

    <form action="?action=addBut" method="POST">
        <input type="text" name="but" autocomplete="off">
        <input type="submit" value="Ajouter un but">
    </form>
    <div class="content">
        <p>This website was made for :</p>
        <ul>
            <li>Practice PHP</li>
            <li>Do Code</li>
            <li>Remind me MVC</li>
            <?php if ($buts) {
                foreach ($buts as $but) {
            ?>
            <li><?= $but['but']; ?></li>
            <?php
                }
            }
            ?>
        </ul>
    </div>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('./view/template.php'); ?>