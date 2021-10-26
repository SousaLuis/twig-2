<?php

    /*require_once __DIR__.'/../layout.html.twig';*/
    require_once __DIR__.'/../src/View/home.html.twig';

    new Twig\Loader\FilesystemLoader;

    echo $twig->render(__DIR__.'/../src/View.html.twig');
    