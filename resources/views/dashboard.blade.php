<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* --- General Resets & Body Styling --- */
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
            overflow-x: hidden;
        }

        /* --- Main Title Styling --- */
        .main-title {
            font-size: 3em;
            color: #2c3e50;
            margin-bottom: 40px;
            text-align: center;
            font-weight: 700;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        /* --- Content Wrapper Styling (Main Container) --- */
        .content-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 900px;
            width: 100%;
            box-sizing: border-box;
            flex-grow: 1;
            justify-content: center;
        }

        /* --- Article Box Styling --- */
        .article-box {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            padding: 20px 30px;
            text-align: left;
            line-height: 1.8;
            font-size: 1.1em;
            color: #444;
            width: 100%;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
        }

        .article-box h2 {
            color: #4CAF50;
            font-size: 2em;
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }

        .article-box p {
            margin-bottom: 1em;
        }

        .article-box strong {
            color: #2c3e50;
        }

        .menu-box {
            padding: 10px 0 0;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .menu-box a:hover {
            background-color: #45a049;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <!-- Title -->
    <h1 class="main-title">Apa Itu Palindrom?</h1>

    <div class="content-wrapper">
        <!-- Article -->
        <div class="article-box">
            <p>
                Dalam dunia bahasa dan matematika, <strong>palindrom</strong> adalah kata, frasa, angka, atau urutan karakter lainnya yang berbunyi atau terbaca sama baik dari depan maupun dari belakang. Konsep ini telah memukau banyak orang selama berabad-abad karena sifatnya yang unik dan simetris.
            </p>
            <p>
                Contoh sederhana dari palindrom adalah kata-kata seperti <strong>"kakak"</strong> atau <strong>"level"</strong>. Jika kita membaca kata ini dari kiri ke kanan, lalu dari kanan ke kiri, ejaannya tetap sama.
            </p>
            <p>
                Tidak hanya kata tunggal, frasa dan kalimat juga bisa menjadi palindrom. Contoh yang terkenal dalam bahasa Indonesia adalah <strong>"Kasur ini rusak"</strong>. Untuk frasa dan kalimat, biasanya spasi, tanda baca, dan huruf besar/kecil diabaikan saat memeriksa apakah itu palindrom.
            </p>

            <!-- Checker Pages -->
            <div class="menu-box">
                <a href="{{ url('/palindrome') }}">Cek Palindrom</a>
            </div>
        </div>
    </div>

</body>

</html>