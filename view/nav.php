<nav>
    <ul>
        <li><a href="?action=home" <?php if (!isset($_GET['action']) || $_GET['action'] == "home") {
                                        echo "id='selected'";
                                    } ?>>Home</a></li>
        <li><a href="?action=about" <?php if ($_GET['action'] == "about") echo "id='selected'"; ?>> About </a></li>
    </ul>
</nav>