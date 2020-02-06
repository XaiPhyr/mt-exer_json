<?php

class IndexController
{
    function index()
    {
        include("views/index.php");
    }

    function decode()
    {
        include("views/decode.php");
    }
}

$index = new IndexController;
