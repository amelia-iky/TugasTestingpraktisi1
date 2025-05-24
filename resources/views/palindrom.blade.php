<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker - Tugas 1</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f2f5;
            color: #333;
            padding: 20px;
            box-sizing: border-box;
        }

        .container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            max-width: 600px;
            width: 100%;
            box-sizing: border-box;
            position: relative;
        }

        /* --- Tombol Kembali --- */
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #555;
            font-weight: 600;
            font-size: 0.9em;
            transition: color 0.3s ease;
        }

        .back-button:hover {
            color: #4CAF50;
        }

        .back-button i {
            margin-right: 8px;
            font-size: 1.2em;
        }

        h1 {
            font-size: 2.5em;
            color: #2c3e50;
            margin-bottom: 30px;
            font-weight: 700;
        }

        form {
            margin-bottom: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            display: block;
            font-size: 1.1em;
            margin-bottom: 10px;
            color: #555;
            font-weight: 600;
        }

        input[type="text"] {
            width: 80%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1em;
            outline: none;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            max-width: 400px;
        }

        input[type="text"]:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 8px rgba(76, 175, 80, 0.2);
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        button[type="submit"]:hover {
            background-color: #45a049;
            transform: translateY(-2px);
        }

        .result-section {
            margin-top: 20px;
            padding: 20px;
            border-top: 1px solid #eee;
        }

        .result-section h3 {
            font-size: 1.5em;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .result-section p {
            font-size: 1.2em;
            color: #555;
            line-height: 1.6;
        }

        .text-success {
            color: #28a745 !important;
            font-weight: 700;
        }

        .text-danger {
            color: #dc3545 !important;
            font-weight: 700;
        }

        .error-list {
            list-style-type: none;
            padding: 0;
            margin-top: 20px;
            text-align: left;
            width: 80%;
            max-width: 400px;
        }

        .error-list li {
            color: #d32f2f;
            background-color: #ffebee;
            border: 1px solid #ef9a9a;
            border-radius: 5px;
            padding: 10px 15px;
            margin-bottom: 10px;
            font-size: 0.95em;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">
        <!-- Tombol Kembali -->
        <a href="{{ url('/') }}" class="back-button">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>

        <!-- Title -->
        <h1>Palindrome Checker</h1>

        <!-- Form -->
        <form method="POST" action="/palindrome">
            @csrf
            <label for="input_text">Masukkan Kata/Kalimat</label>
            <input type="text" name="input_text" id="input_text" required value="{{ old('input_text', $text ?? '') }}">
            <button type="submit">Submit</button>
        </form>

        <!-- Result -->
        @if (isset($isPalindrom))
        <div class="result-section">
            <h3>Hasil</h3>
            <p>
                "{{ $text }}" adalah
                <strong class="{{ $isPalindrom ? 'text-success' : 'text-danger' }}">
                    {{ $isPalindrom ? 'Palindrom' : 'Bukan Palindrom' }}
                </strong>
            </p>
        </div>
        @endif

        <!-- Error Handling -->
        @if ($errors->any())
        <ul class="error-list">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
</body>

</html>