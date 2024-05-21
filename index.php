<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputkan | Selamat Datang</title>
    <link href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,
        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            margin: 0;
            padding: 0;
            background-color: #E9BCB7;
            background-image: url('./images/backgrounds.png');
            background-size: cover;
            background-position: center;
            color: #333;
            overflow: hidden;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        header h1 {
            margin: 0;
            font-size: 2em;
        }

        .hero {
            padding: 80px 0;
            text-align: center;
        }

        .container-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            align-items: center;
        }

        .text-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            margin: -50px auto 0;
        }

        .text-content h2 {
            margin: 0;
            font-size: 2.5em;
            color: #353535;
        }

        .button {
            margin-top: -250px;
        }

        .button a {
            display: inline-block;
            padding: 15px 30px;
            background-color: #564787;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button a:hover {
            background-color: #3C315E;
        }

        .image img {
            margin-top: -10%;
            max-width: 100%;
            max-height: 400px;
        }

        footer {
            background-color: #A60067;
            color: #F2FDFF;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }

        .navbar-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px; /* Adjust the height as needed */
        }
    </style>
</head>

<body>
    <nav class="navbar" style="background-color: #A60067;">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img src="./images/logoPutih.png" alt="Digital Talent" style="max-height: 50px;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </nav>

    <section class="hero">
        <div class="container-grid">
            <div class="text-content">
                <h2>Digital Talent</h2>
                <p>Tunjukkan Bakatmu Meski Biasa Saja</p>
            </div>
            <div class="image">
                <img src="./images/yuki.png" alt="Anime Character Image">
            </div>
            <a class="button" href="daftar-peserta.php">
                <button type="button" class="btn btn-outline-primary">Mulai Mendata</button>
            </a>
        </div>
    </section>
    </main>
    <footer>
        <div class="container">
            <p>2024 Kos Waifu. All Rights Reserved </p>
        </div>
    </footer>
</body>

</html>