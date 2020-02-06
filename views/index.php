<?php
header("Content-type: text/xml");
include("models/customers.php");

$results = $CustomerModel->get_customer();

echo "<?xml version='1.0' encoding='UTF-8'?>
<Data>
<title>Customers | RSS</title>
<description>Data on Customers</description>";

while ($item = mysqli_fetch_object($results)) {
    echo "<item>
    <Id>$item->customer_id</Id>
    <Name>$item->first_name $item->last_name</Name>
    <Address>$item->address $item->city</Address>
    <Contacts>$item->area_code $item->number</Contacts>
    </item>";
}

echo "</Data>";
?>