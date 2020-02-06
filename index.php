<?php

switch ($_GET['page']) {
    default:
        include("controllers/index.php");
        $index->index();
        break;

    case 'decode':
        include("controllers/index.php");
        $index->decode();
        break;
}
