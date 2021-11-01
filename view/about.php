<?php $title = 'PETMV | About'; ?>

<?php ob_start(); ?>


<div id="about">



    <div class="content">
        <p>This website was made for :</p>
        <ul>
            <li>Practice PHP</li>
            <li>Do Code</li>
            <li>Remind me MVC</li>
            <?php if ($buts) {
                foreach ($buts as $but) {
            ?>
            <li><?= $but['but']; ?>
                <a data-turbo="false" id="delBut" href="?action=deleteBut&id=<?= $but['id'] ?>"> <i
                        class="fas fa-minus-circle"></i></a>
            </li>
            <?php
                }
            }
            ?>
        </ul>
    </div>

    <form action="?action=addBut" method="POST">
        <input type="text" name="but" autocomplete="off">
        <input type="submit" value="Ajouter un but">
    </form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('./view/template.php'); ?>