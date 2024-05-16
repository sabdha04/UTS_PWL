<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="num1">Angka Pertama:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        <label for="num2">Angka Kedua:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        
        <label for="operation">Operasi:</label>
        <select id="operation" name="operation" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select><br><br>
        
        <input type="submit" value="Hitung">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? $_POST['num1'] : '';
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : '';
    $operation = isset($_POST['operation']) ? $_POST['operation'] : '';
    
    $result = 0;
    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Kesalahan: Pembagian dengan nol tidak diperbolehkan.";
            }break;
        default:
            $result = "Operasi tidak valid.";
            break;
    }
    echo "<p>Hasil: $result</p>";
}
?>
</body>
</html>
