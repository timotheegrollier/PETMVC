<?php $title = 'home'; ?>

<?php ob_start(); ?>
<div id="home">
    <div class="block">
        <h1>Petite app PHP MVC</h1>
    </div>

    <ul class="messages">
        <?php foreach ($messages as $message) {
        ?> <li><?= $message['message'] ?>
            <a href="?action=delete&id=<?= $message['id'] ?>"> <i class="fas fa-minus-circle"></i></a>
        </li>
        <?php
        }
        ?>
    </ul>

    <form action="?action=post" method="POST">
        <input type="text" name="message" autocomplete="off">
        <input type="submit" value="Envoyez">
    </form>
</div>






<?php $content = ob_get_clean(); ?>

<?php require('./view/template.php'); ?>