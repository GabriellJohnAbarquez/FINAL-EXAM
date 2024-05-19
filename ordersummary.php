<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            background-color: #4B0082; /* Purple background */
            color: #FFD700; /* Warm gold text color */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h3 {
            color: #FFD700; /* Warm gold color for the heading */
        }
        .receipt {
            color: #4B0082; /* Purple color for the receipt text */
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            if(isset($_POST['submit'])){
                $quantity1 = $_POST['quantity1'];
                $quantity2 = $_POST['quantity2'];
                $quantity3 = $_POST['quantity3'];
                $price1 = 25;
                $price2 = 15;
                $price3 = 30;
                $cash = $_POST['cash'];

                $total_cost = ($quantity1 * $price1) + ($quantity2 * $price2) + ($quantity3 * $price3);
                $change = $cash - $total_cost;

                echo "<h3>Receipt:</h3>";
                echo "<div class='receipt'>Total Cost: &#8369;". $total_cost. "<br>";
                if ($change >= 0){
                    echo "Change: &#8369;". $change;
                } else {
                    echo "Insufficient cash, Please pay the exact amount.";
                }
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>