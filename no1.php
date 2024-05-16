<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo</title>
</head>
<body>
    
<form action="" method="post">
    <label for="totalTrips">Masukkan jumlah perjalanan yang sudah ditempuh:</label><br><br>
    <input type="number" id="totalTrips" name="totalTrips" required><br><br>
    <input type="submit" value="Submit">
</form><br>

<?php
function getPromoCategory($totalTrips) {
    if ($totalTrips >= 10 && $totalTrips <= 20) {
        $category = "Bronze";
        $discount = 5;
    } elseif ($totalTrips >= 21 && $totalTrips <= 50) {
        $category = "Silver";
        $discount = 10;
    } elseif ($totalTrips > 50) {
        $category = "Gold";
        $discount = 15;
    } else {
        $category = "No Promo";
        $discount = 0;
    }
    
    return array("category" => $category, "discount" => $discount);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $totalTrips = $_POST['totalTrips'];

    // Validasi input
    if (!is_numeric($totalTrips) || $totalTrips < 0) {
        echo "Input tidak valid. Silahkan masukkan angka yang valid.";
    } else {
$promoDetails = getPromoCategory($totalTrips);

echo "Kategori Promo: " . $promoDetails["category"] . "\n";
echo "Diskon: " . $promoDetails["discount"] . "%\n";
}}?>

</body>
</html>