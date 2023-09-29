<!DOCTYPE html>
<html>
<head>
    <title>Currency Converter</title>
    <style>

        body {

            font-family: Arial, sans-serif;
            background-color: black;
            margin: 0;
            padding: 0;
        }
        
        h1 {
            color:white;
            text-align: center;
            margin-top: 20px;
        }

 

        form {

            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);

        }

 

        label {

            display: block;
            
            margin-bottom: 15px;

        }

 

        select, input[type="text"], input[type="submit"] {

            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;

        }

 

        input[type="submit"] {

            background-color: #7460ee;
            color: #fff;
            border: none;
            cursor: pointer;

        }

 

        input[type="submit"]:hover {
            background-color: black;

        }

    </style>

</head>

<body>

    <h1>Currency Converter</h1>

    <form action="exchange.php" method="post">

        <label for="from_currency">From Currency:</label>

        <select id="from_currency" name="from_currency">

            <option value="USD">USD (US Dollar)</option>
            <option value="EUR">EUR (Euro)</option>
            <option value="IND">IND (Rupees)</option>
            <option value="AGN">AGN (Afgani)</option>

            <!-- Add more currency options here -->

        </select>

 

        <label for="to_currency">To Currency:</label>

        <select id="to_currency" name="to_currency">

            <option value="EUR">EUR (Euro)</option>
            <option value="IND">IND (Rupees)</option>
            <option value="USD">USD (US Dollar)</option>
            <option value="AGN">AGN (Afgani)</option>

            <!-- Add more currency options here -->

        </select>
        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" placeholder="Enter amount" required>
        <input type="submit" value="Convert">

    </form>

    <?php

    require_once("apicurl.php");
?> 
</body>

</html>