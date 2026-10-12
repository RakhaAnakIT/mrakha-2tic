<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Terima Kasih</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .thankyou-container {
            max-width: 700px;
            margin: 80px auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .thankyou-container h2 {
            color: #3E97FF;
            font-weight: bold;
        }

        .email-info {
            color: #555;
            font-style: italic;
        }

        blockquote {
            font-size: 1.1rem;
            margin-top: 20px;
            color: #333;
            background-color: #f8f9fa;
            border-left: 5px solid #3E97FF;
            padding: 15px 20px;
            border-radius: 6px;
        }

        .btn-primary {
            background-color: #3E97FF;
            border: none;
        }
    </style>
</head>
<body>

    <div class="thankyou-container">
        <h2>Terima Kasih, {{$nama}} 🎉</h2>
        <p class="lead">Pertanyaan Anda telah berhasil dikirim.</p>

        <blockquote>
            <strong>Pertanyaan Anda:</strong><br>
            "{{$pertanyaan}}"
        </blockquote>

        <p class="email-info mt-4">
            Pertanyaan Anda akan segera kami tanggapi dan balas melalui email <strong>{{$email}}</strong>.<br><br>
            Mohon cek kotak masuk atau folder spam Anda secara berkala.
        </p>

        <a href="{{ url('/home') }}" class="btn btn-primary mt-4">Kembali ke Beranda</a>
    </div>

</body>
</html>
