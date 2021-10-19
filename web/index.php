<?php
require_once '../vendor/autoload.php';

session_start();

if ('post' === strtolower($_SERVER['REQUEST_METHOD'])) {
    $_SESSION['numbers'][] = (int)$_POST['newNumber'];
}

$numbers = $_SESSION['numbers'] ?? [];
$numbersCollection = new NumberCollection($numbers, new Calculator());
?>
<html>
<body>
    <p>Numbers entered: <b><?php echo implode(', ', $numbers); ?></b></p>
    <p>Sum: <b><?php echo $numbersCollection->sum();?></b></p>
    <hr/>
    <form method="post">
        <label for="newNumber">Enter a number between 1 and 100:</label>
        <input type="number" min="1" max="100" name="newNumber" id="newNumber"/>
        <input type="submit" value="Add it!"/>
    </form>
</body>
</html>
