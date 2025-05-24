<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f0f2f5;
            color: #333;
            padding: 20px;
            box-sizing: border-box;
        }

        .main-title {
            font-size: 3em;
            color: #2c3e50;
            margin-bottom: 40px;
            text-align: center;
            font-weight: 700;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .menu-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            padding: 20px;
            max-width: 1200px;
            width: 100%;
        }

        .menu-box {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            flex: 1;
            min-width: 250px;
            max-width: 300px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            border: 1px solid #e0e0e0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .menu-box:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .menu-box h3 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #4CAF50;
            font-size: 1.8em;
            font-weight: 600;
        }

        .menu-box p {
            font-size: 1.1em;
            line-height: 1.6;
            color: #555;
            margin-bottom: 25px;
            flex-grow: 1;
        }

        .menu-box a {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease;
            margin-top: auto;
        }

        .menu-box a:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1 class="main-title">Tugas 1</h1>
    <div class="menu-container">
        <div class="menu-box">
            <h3>Calculator</h3>
            <p>A simple calculator for basic arithmetic operations.</p>
            <a href="{{ url('/calculator') }}">Go to Calculator</a>
        </div>

        <div class="menu-box">
            <h3>Loan</h3>
            <p>Estimate your loan payments with our easy-to-use tool.</p>
            <a href="{{ url('/loan') }}">Go to Loan Calculator</a>
        </div>

        <div class="menu-box">
            <h3>Palindrome</h3>
            <p>Check if a word or phrase is a palindrome.</p>
            <a href="{{ url('/palindrome') }}">Go to Palindrome Checker</a>
        </div>
    </div>
</body>

</html>