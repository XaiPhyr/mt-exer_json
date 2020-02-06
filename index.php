<?php

switch ($_GET['page']) {
    default:
        include("controllers/index.php");
        $index->index();
        break;
}
