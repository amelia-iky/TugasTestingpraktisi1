<!DOCTYPE html>
<html>
<head>
    <title>Cek Palindrom</title>
</head>
<body>
    <h1>Cek Palindrom</h1>

    <form method="POST" action="/palindrom">
        @csrf
        <label for="input_text">Masukkan kata/kalimat:</label>
        <input type="text" name="input_text" id="input_text" required>
        <button type="submit">Cek</button>
    </form>

    @if (isset($isPalindrom))
        <h3>Hasil:</h3>
        <p>
            "{{ $text }}" adalah
            <strong>{{ $isPalindrom ? 'Palindrom' : 'Bukan Palindrom' }}</strong>
        </p>
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>
