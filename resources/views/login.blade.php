<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin PMI</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .wrapper {
            display: flex;
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            width: 1000px;
            max-width: 95%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.42);
        }

        .illustration {
            flex: 1;
            background: url('{{ asset('images/logo.png') }}') center/contain no-repeat;
            background-color: #fff;
        }

        .login-container {
            flex: 1;
            background-color: #fff; /* merah PMI */
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #000;
            position: relative;
            
        }

        h2 {
            text-align: center;
            color: #000;
            margin-bottom: 10px;
            font-size: 26px;
            letter-spacing: 1px;
        }

        .subtitle {
            text-align: center;
            font-size: 14px;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        label {
            color: #000;
            font-weight: 500;
            margin-bottom: 6px;
            display: block;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 14px;
            margin-bottom: 22px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            outline: none;
            transition: 0.3s;
            background-color: #f8f8f8;
        }

        input:focus {
            border-color: #f97316;
            box-shadow: 0 0 5px rgba(249,115,22,0.6);
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: #f97316;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #c2410c;
            transform: translateY(-1px);
        }

        .error {
            background-color: #fdecea;
            color: #b91c1c;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            text-align: center;
            font-size: 14px;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background: none;
            border: none;
            color: #fff;
            font-size: 28px;
            cursor: pointer;
        }

        .back-button:hover {
            color: #f97316;
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .wrapper {
                flex-direction: column;
                width: 95%;
            }
            .illustration {
                height: 250px;
            }
            .login-container {
                padding: 40px 30px;
            }
        }
    </style>
</head>
<body>

<div class="wrapper">

    <div class="illustration"></div>

    <div class="login-container">

        <a href="{{ route('home') }}" class="back-button" aria-label="Kembali">
            <i class="bi bi-arrow-left-circle"></i>
        </a>

        <h2>LOGIN ADMIN</h2>
        <div class="subtitle">PMI Kabupaten Magetan</div>

        @if ($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif

<form method="POST" action="{{ route('login.submit') }}">
    @csrf

    <label for="email">Email</label>
    <input
        type="email"
        id="email"
        name="email"
        value="{{ old('email') }}"
        placeholder="Masukkan Email"
        required
    >

    <label for="password">Kata Sandi</label>
    <input
        type="password"
        id="password"
        name="password"
        placeholder="Masukkan kata sandi"
        required
    >

    <button type="submit">MASUK</button>
</form>


    </div>
</div>

</body>
</html>
