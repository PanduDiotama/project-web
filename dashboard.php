<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTARKAN TIM ANDA</title>
    <link rel="stylesheet" href="phoenix.css">
</head>
<body>

<?php include "layout/headerforum.html" ?>

<section id="games">
    <br><br>
        <h2>CHOOSE YOUR GAME</h2>
        <div class="game-selection">
            <div class="game-card">
                <br>
            <img src="logoml.png" alt="Mobile Legends">
            <br>
                <h3>Mobile Legends</h3>
                <a href="mobilelegend.php">
                <button class="game-btn" onclick="registerGame('Mobile Legends')">REGISTER!</button>
                </a>
            </div>
            <div class="game-card">
                <img src="logovalorant.png" alt="Valorant">
                <h3>Valorant</h3>
                <a href="valorant.php">
                <button class="game-btn" onclick="registerGame('Valorant')">REGISTER!</button>
                </a>
            </div>
        </div>
    </section>
    <?php include "layout/footer.html" ?>
</body>
</html>
