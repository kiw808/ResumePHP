<?php

if ($_SERVER['REQUEST_URI'] == '/') {
    header('location: index.php?page=intro');
}

// Function for active link
function setActive(string $page) : string
{
    $class = '';

    // if page is active : insert 'active' in link class
    if ($_GET) {
        if ($_GET['page'] == $page) {
            $class .= ' active';
        }
    }
    return $class;
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
                <li class="nav-item<?= setActive('intro'); ?>"><a href="?page=intro">INTRODUCTION</a></li>
                <li class="nav-item<?= setActive('experience'); ?>"><a href="?page=experience">EXPERIENCE</a></li>
                <li class="nav-item<?= setActive('hobbies'); ?>"><a href="?page=hobbies">HOBBIES</a></li>
                <li class="nav-item<?= setActive('contact'); ?>"><a href="?page=contact">CONTACT</a></li>
            </ul>
        </nav>
    </div>
    <div class="PM-credits">
        <p>Copyright © 2020 All right reserved</p>
        <p>Made by Pierre Muller</p>
        <p>Wild Code School</p>
    </div>
</aside>