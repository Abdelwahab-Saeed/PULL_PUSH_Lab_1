<?php
$products = [
    ["id" => 1, "name" => "Laptop"],
    ["id" => 2, "name" => "Keyboard"],
    ["id" => 3, "name" => "Mouse"],
    ["id" => 4, "name" => "Monitor"],
    ["id" => 5, "name" => "Webcam"],
    ["id" => 6, "name" => "External Hard Drive"],
];

$q = strtolower(trim($_GET['q'] ?? ''));
$results = '';

if (!empty($q)) {
    foreach ($products as $product) {
        if (strpos(strtolower($product['name']), $q) !== false) {
            $results .= "<div>{$product['name']}</div>";
        }
    }
}

echo $results ?: "<div>No products found.</div>";
?>
