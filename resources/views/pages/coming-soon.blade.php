<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Kind Walkers – Coming Soon</title>

    {{-- Meta SEO Sederhana --}}
    <meta name="description" content="The Kind Walkers - Coming Soon">

    <style>
        /* Reset margin & padding default browser */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Set full height viewport & background warna pink */
        body, html {
            height: 100%;
            width: 100%;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #FF5EA7; /* Warna pink sesuai gambar */
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        /* Container pembungkus di tengah layar */
        .coming-soon-container {
            text-align: center;
            color: #ffffff;
            padding: 20px;
            max-width: 600px;
            width: 100%;
        }

        /* Penataan Logo */
        .coming-soon-logo {
            max-width: 320px;
            width: 80%;
            height: auto;
            margin-bottom: 35px;
            display: inline-block;
        }

        /* Judul COMING SOON */
        .coming-soon-title {
            font-size: 42px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 12px;
            color: #ffffff;
        }

        /* Subtitle / Tautan Website */
        .coming-soon-link {
            font-size: 22px;
            font-style: italic;
            font-weight: 400;
            color: #ffffff;
            text-decoration: none;
            opacity: 0.95;
            transition: opacity 0.3s ease;
        }

        .coming-soon-link:hover {
            opacity: 1;
            text-decoration: underline;
        }

        /* Responsif untuk tampilan mobile/layar kecil */
        @media (max-width: 576px) {
            .coming-soon-logo {
                max-width: 240px;
                margin-bottom: 25px;
            }
            .coming-soon-title {
                font-size: 30px;
                letter-spacing: 1.5px;
            }
            .coming-soon-link {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>

    <div class="coming-soon-container">
        {{-- Logo --}}
        <img src="{{ asset('assets/img/icon/the-kind-walkers-logo.png') }}" alt="The Kind Walkers Logo" class="coming-soon-logo">

        {{-- Teks Coming Soon --}}
        <h1 class="coming-soon-title">COMING SOON</h1>

        {{-- Tautan Website --}}
        <a href="https://kindwalkers.sg/" class="coming-soon-link" target="_blank" rel="noopener noreferrer">
            https://kindwalkers.sg/
        </a>
    </div>

</body>
</html>
