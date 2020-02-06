<?php
// header('Content-Type: application/json');
include("models/customers.php");

$results = $CustomerModel->get_customer();

echo "[<br>";
while ($item = mysqli_fetch_object($results)) {
    $jsonEn = json_encode($item);
    $jsonDe = json_decode($jsonEn, true);

    echo "&emsp;{<br>";
    echo "&emsp;&emsp;\"Id\": \"" . $jsonDe["Id"] . "\"<br>";
    echo "&emsp;&emsp;\"first_name\": \"" . $jsonDe["first_name"] . "\"<br>";
    echo "&emsp;&emsp;\"last_name\": \"" . $jsonDe["last_name"] . "\"<br>";
    echo "&emsp;&emsp;\"dob\": \"" . $jsonDe["dob"] . "\"<br>";
    echo "&emsp;&emsp;\"image\": \"" . $jsonDe["image"] . "\"<br>";
    echo "&emsp;&emsp;\"created\": \"" . $jsonDe["created"] . "\"<br>";
    echo "&emsp;&emsp;\"modified\": \"" . $jsonDe["modified"] . "\"<br>";
    echo "&emsp;&emsp;\"flag\": \"" . $jsonDe["flag"] . "\"";
    echo "<br>&emsp;},<br>";
}
echo "]";