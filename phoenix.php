<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO PHOENIX ARENA</title>
    <link rel="stylesheet" href="phoenix.css">
</head>
<body>

    <?php include "layout/header.html" ?>

    <main id="home">
        <h1 style="color: #003366;">PHOENIX ARENA</h1>
        <div class="content">
            <img src="Logo-Index.png" alt="Indexx Logo">
            <p class="tagline">ONE TEAM, ONE DREAM<br>LEVEL UP YOUR GAME</p>
            <p>Siap menjadi juara ? Bergabunglah dalam GG FEST! Event tahunan game yang paling ditunggu-tunggu. Pertaruhkan skillmu! Raih hadiah jutaan rupiah, dan ukir namamu dalam sejarah eSports! Game On! Tantang dirimu sekarang! Dominasi, Kejayaan, Kemenangan, raih semuanya di GG FEST 2025.</p>
            <a href="register.php">
                <button id="register-btn">REGISTER NOW!</button>
            </a>
            <p>Sudah punya akun? <a href="login.php" style="color: #003366;">Masuk di sini</a></p>
        </div>
        <div class="logo-container">
        </div>
    </main>

    <section id="about">
        <h2>ABOUT US</h2>

        <div class="frosthowl-section">
            <img src="Logo-Maskot.png" alt="Maskot Logo" class="blueflare-logo">
            <div class="frosthowl-content">
                <h2>FROSTHOWL</h2>
                <p>FrostHowl adalah ikon dari GG FEST 2025, tempat di mana kekuatan dan strategi bertemu dalam harmoni. FrostHowl melambangkan ketangguhan, kecerdikan, dan semangat persaudaraan yang tak tergoyahkan. Dikenal sebagai serigala legendaris yang menguasai badai es, FrostHowl adalah simbol kekuatan yang tenang tetapi mematikan, mencerminkan ketenangan di tengah tekanan dan ketajaman dalam setiap langkah. FrostHowl mengingatkan pemain bahwa kemenangan bukan hanya tentang kekuatan semata, tetapi juga tentang kecerdasan, kesabaran, dan kerja sama. Dalam dunia e-sport, ia menginspirasi tim untuk tetap solid, belajar dari kekalahan, dan melampaui batas demi mencapai kejayaan.</p>
            </div>
        </div>
    </section>

<section id="faq">
    <h2>FAQ</h2>
    <ul>
        <li>
            <details>
                <summary>Bagaimana cara mendaftar turnamen?</summary>
                Klik tombol "REGISTER NOW" atau pilih game Anda.
            </details>
        </li>
        <li>
            <details>
                <summary>Apakah ada biaya pendaftaran?</summary>
                Tidak, pendaftaran gratis untuk semua peserta!
            </details>
        </li>
        <li>
            <details>
                <summary>Siapa yang bisa ikut?</summary>
                Semua gamer yang memenuhi persyaratan turnamen kami.
            </details>
        </li>
    </ul>
</section>

<?php include "layout/footer.html" ?>

    <script src="phoenix.js"></script>
</body>
</html>
