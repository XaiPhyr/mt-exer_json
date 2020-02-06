<?php

class IndexController
{
    function index()
    {
        include("views/index.php");
    }
}

$index = new IndexController;
