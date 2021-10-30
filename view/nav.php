<nav>
    <ul>
        <li><a href="?action=home" <?php if (!isset($_GET['action']) || $_GET['action'] == "home") {
                                        echo "id='selected'";
                                    } ?>>Home</a></li>
        <li><a href="#"> About </a></li>
    </ul>
</nav>