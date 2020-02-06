<?php
header('Content-Type: application/json');
include("models/customers.php");

$results = $CustomerModel->get_customer();

echo "[";
while ($item = mysqli_fetch_object($results)) {
    echo json_encode($item);
}
echo "]";
