<!DOCTYPE html>
<html>
<head>
    <title>Mini ATM Simulator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="box">
<h2>MINI ATM SIMULATOR</h2>

<?php
session_start();

if (!isset($_SESSION["balance"])) {
    $_SESSION["balance"] = 10000;
}

if (isset($_POST["choice"])) {
    $choice = $_POST["choice"];

    if ($choice == 1) {
        echo "Balance: ₹" . $_SESSION["balance"];
    }
    elseif ($choice == 2) {
        $amount = $_POST["amount"];
        $_SESSION["balance"] += $amount;
        echo "Deposit Successful<br>";
        echo "New Balance: ₹" . $_SESSION["balance"];
    }
    elseif ($choice == 3) {
        $amount = $_POST["amount"];

        if ($amount <= $_SESSION["balance"]) {
            $_SESSION["balance"] -= $amount;
            echo "Withdrawal Successful<br>";
            echo "New Balance: ₹" . $_SESSION["balance"];
        }
        else {
            echo "Insufficient Balance";
        }
    }
    elseif ($choice == 4) {
        echo "Thank You! Visit Again.";
    }
}
?>

<form method="post">
    <button name="choice" value="1">1. Balance Inquiry</button><br>
    <button name="choice" value="2">2. Deposit</button><br>
    <button name="choice" value="3">3. Withdraw</button><br>
    <button name="choice" value="4">4. Exit</button><br><br>
    <input type="number" name="amount" placeholder="Enter Amount">
</form>

</div>
</body>
</html>
