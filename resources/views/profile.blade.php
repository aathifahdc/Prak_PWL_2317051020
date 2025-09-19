<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #ffd6e0, #ffb6c1, #ff9ebb);
            font-family: 'Poppins', sans-serif;
        }
        .profile-card {
            background: #fff;
            padding: 30px 40px;
            border-radius: 25px;
            box-shadow: 0 10px 25px rgba(255, 105, 180, 0.25);
            text-align: center;
            width: 360px;
            position: relative;
        }
        .profile-card img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 6px solid #ff9ebb;
            box-shadow: 0 0 25px rgba(255, 105, 180, 0.6);
        }
        .profile-info {
            margin-top: 25px;
        }
        .info-box {
            background: #ffe4ec;
            padding: 14px;
            border-radius: 15px;
            margin: 12px 0;
            text-align: left;
            box-shadow: inset 0 2px 6px rgba(255, 182, 193, 0.4);
        }
        .info-label {
            font-size: 13px;
            color: #777;
            margin-bottom: 3px;
            display: block;
        }
        .info-value {
            font-weight: 600;
            font-size: 16px;
            color: #333;
        }
        .info-icon {
            color: #ff7bac;
            margin-right: 8px;
            font-size: 18px;
        }
        .cute-icon {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 28px;
            color: #ff7bac;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="cute-icon">♡</div>
        <img src="{{ asset('images/profile.jpg') }}" alt="Foto Profil">
        <div class="profile-info">
            <div class="info-box">
                <span class="info-label"> Nama</span>
                <span class="info-value">{{ $nama }}</span>
            </div>
            <div class="info-box">
                <span class="info-label"> NPM</span>
                <span class="info-value">{{ $npm }}</span>
            </div>
            <div class="info-box">
                <span class="info-label"> Kelas</span>
                <span class="info-value">{{ $kelas }}</span>
            </div>
        </div>
    </div>

</body>
</html>
