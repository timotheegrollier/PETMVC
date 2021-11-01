<nav>
    <ul>
        <li><a href="?action=home" <?php if (!isset($_GET['action']) || $_GET['action'] == "home") {
                                        echo "id='selected'";
                                    } ?>>Home</a></li>
        <li><a href="?action=about"
                <?php if (isset($_GET['action']) && ($_GET['action'] == "about")) echo "id='selected'"; ?>> About </a>
        </li>
    </ul>
</nav>
<div class="burgerBlock">

    <i class="fas fa-bars burger"></i>
</div>


<div class="mobileMenu">
    <ul>
        <li><a href="?action=home" <?php if (!isset($_GET['action']) || $_GET['action'] == "home") {
                                        echo "id='selected'";
                                    } ?>>Home</a></li>
        <li><a href="?action=about"
                <?php if (isset($_GET['action']) && ($_GET['action'] == "about")) echo "id='selected'"; ?>> About </a>
        </li>
    </ul>

</div>