<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
            width: 350px;
        }
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 4px solid #74ebd5;
        }
        .info {
            font-size: 18px;
            color: #333;
            margin: 10px 0;
        }
        .label {
            font-weight: 600;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="{{ asset('images/foto_almet.jpg') }}" alt="Foto Profile" class="profile-img">
        <div class="info"><span class="label">Nama:</span> {{ $nama }}</div>
        <div class="info"><span class="label">NPM:</span> {{ $npm }}</div>
        <div class="info"><span class="label">Kelas:</span> {{ $kelas }}</div>
    </div>
</body>
</html>
