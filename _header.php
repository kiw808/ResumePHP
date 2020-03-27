<?php

// Definition of a nav item function :
// $param1 is the link rel to $_SERVER => SCRIPT_NAME,
// $param2 is the title of the link to display on the navbar.
function nav_item(string $lien, string $titre): string
{
    // The class to display in the <li> tag if  active page.
    $classe = '';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe .= ' active';
    }

    // Full <li> html code to return with class, $param1 and $param2.
    return '<li class="nav-item' . $classe .'">
        <a href="' . $lien . '">' . $titre . '</a>
    </li>';
}

?>

<aside>
    <div class="PM-content">
        <div class="title">
            <h1>Mr. Bean</h1>
            <p>- Resume -</p>
        </div>
        <nav>
            <ul class="PM-link-list">
                <?= nav_item('/index.php', 'INTRODUCTION'); ?>
                <?= nav_item('/experience.php', 'EXPERIENCE'); ?>
                <?= nav_item('/hobbies.php', 'HOBBIES'); ?>
                <?= nav_item('/contact.php', 'CONTACT'); ?>
            </ul>
        </nav>
    </div>
    <div class="PM-credits">
        <p>Copyright © 2020 All right reserved</p>
        <p>Made by Pierre Muller</p>
        <p>Wild Code School</p>
    </div>
</aside>