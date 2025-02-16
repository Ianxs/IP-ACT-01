<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #cce7ff, #eaf9ff);
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            padding: 20px;
            max-width: 600px;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            color: #007BFF;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Monthly Weather Report</h1>
        <?php
            // array of weather conditions
            $weather_conditions = ['rain', 'sunshine', 'clouds', 'hail', 'sleet', 'snow', 'wind'];

            // inserting the weather conditions into the weather statement 
            $weather_statement = "We've seen all kinds of weather this month. At the beginning of the month, we had " . 
            $weather_conditions[5] . " and " . $weather_conditions[6] . ". Then came " . 
            $weather_conditions[1] . " with a few " . $weather_conditions[2] . " and some " . 
            $weather_conditions[0] . ". At least we didn't get any " . $weather_conditions[3] . 
            " or " . $weather_conditions[4] . ".";

            // prints the weather statement
            echo "<p>$weather_statement</p>";
        ?>
    </div>
</body>
</html>
