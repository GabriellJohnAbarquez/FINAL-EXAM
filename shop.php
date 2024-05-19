<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        h2 {
            margin-bottom: 20px;
            color: #663399; /* Purple */
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            color: #663399; /* Purple */
            margin-top: 10px;
        }
        input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            color: #663399; /* Purple */
        }
        input[type="number"]::placeholder {
            color: #663399; /* Purple */
        }
        input[type="submit"] {
            background-color: #b8860b; /* Warm gold */
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #daa520; /* Darker warm gold */
        }
        a {
            display: inline-block;
            margin-top: 15px;
            color: #663399; /* Purple */
            text-decoration: none;
            transition: color 0.3s ease;
        }
        a:hover {
            color: #b8860b; /* Warm gold */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome to Fistac's Snack Stop!</h2>
        <form method="post" action="ordersummary.php">
            <label>Snack 1: French Fries</label>
            <label>Price: &#8369;25</label><br>

            <label>Snack 2: Cheese Sticks</label>
            <label>Price: &#8369;15</label><br>

            <label>Snack 3: Potato Wedges</label>
            <label>Price: &#8369;30</label><br>

            <label for="quantity1">Quantity of Food 1:</label>
            <input type="number" id="quantity1" name="quantity1" min="0" required><br>

            <label for="quantity2">Quantity of Food 2:</label>
            <input type="number" id="quantity2" name="quantity2" min="0" required><br>
            
            <label for="quantity3">Quantity of Food 3:</label>
            <input type="number" id="quantity3" name="quantity3" min="0" required><br>

            <label for="cash">Amount of Cash:</label>
            <input type="number" id="cash" name="cash" required><br>

            <input type="submit" name="submit" value="Submit Order">
        </form>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
