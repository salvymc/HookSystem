<?php
HookManager::addHook('nav_bar', function ($nav_link) {
    foreach ($nav_link as $key => $nav) {
        echo "<a href='$nav'>$key</a> ";
    }
});

HookManager::addHook('after_login', function ($user) {
    echo "L'utente,$user ha eseguito l'accesso!";
});

HookManager::addHook('footer', function ($link) {
    echo "Footer $link";
});
