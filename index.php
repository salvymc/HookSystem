<?php
require "class.php";
require "hooks.php";
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <nav>
        <h1>NavBar:</h1>
        <?php
        HookManager::invokeHook('nav_bar', array('nav_link' => ['Home' => 'home.php', 'Contact' => 'contact.php']));
        ?>
    </nav>

    <section>
        <h1>Section:</h1>
        <?php
        HookManager::invokeHook('after_login', array('Salvatore'));
        ?>
    </section>
    <footer>
        <h1>footer:</h1>

        <?php
        HookManager::invokeHook('footer', array(''));
        ?>
        <hr>
        <h1>Debug Hooks:</h1>
        <?php
        HookManager::debug();
        ?>
    </footer>
</body>

</html>